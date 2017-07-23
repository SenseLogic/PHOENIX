/*
    This file is part of the Phoenix distribution.

    https://github.com/senselogic/PHOENIX

    Copyright (C) 2017 Eric Pelzer (ecstatic.coder@gmail.com)

    Phoenix is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, version 3.

    Phoenix is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/

// == LOCAL

// -- IMPORTS

import core.stdc.stdlib : exit;
import core.thread;
import std.conv : to;
import std.datetime : Clock, SysTime;
import std.file : dirEntries, exists, mkdirRecurse, readText, timeLastModified, write, FileException, SpanMode;
import std.path : dirName;
import std.stdio : writeln;
import std.string : endsWith, indexOf, replace, startsWith, toUpper;

// == GLOBAL

// -- TYPES

// .. LANGUAGE_TYPE

enum LANGUAGE_TYPE
{
    // -- CONSTANTS

    Html,
    Css,
    Javascript,
    Phoenix
}

// .. TOKEN_TYPE

enum TOKEN_TYPE
{
    // -- CONSTANTS

    None,
    BeginShortComment,
    ShortComment,
    BeginLongComment,
    LongComment,
    EndLongComment,
    RegularExpressionLiteral,
    BeginCharacterLiteral,
    CharacterLiteral,
    EndCharacterLiteral,
    BeginStringLiteral,
    StringLiteral,
    EndStringLiteral,
    BeginTextLiteral,
    TextLiteral,
    EndTextLiteral,
    BeginDeclaration,
    EndDeclaration,
    BeginElement,
    EndElement,
    BeginOpeningTag,
    EndOpeningTag,
    CloseOpeningTag,
    BeginClosingTag,
    EndClosingTag,
    Number,
    Identifier,
    Operator,
    Separator,
    Special
}

class TOKEN
{
    // -- ATTRIBUTES

    string
        Text;
    LANGUAGE_TYPE
        LanguageType;
    TOKEN_TYPE
        Type;
    long
        LineIndex,
        ColumnIndex,
        PriorSpaceCount;
        
    // -- CONSTRUCTORS
    
    this(
        string text,
        LANGUAGE_TYPE language_type,
        TOKEN_TYPE token_type,
        CODE code
        )
    {
        Text = text;
        LanguageType = language_type;
        Type = token_type;
        LineIndex = code.LineIndex;
        ColumnIndex = code.TokenCharacterIndex - code.LineCharacterIndex;
        PriorSpaceCount = 0;
    }
    
    // -- OPERATIONS

    bool IsReservedKeyword(
        )
    {
        return 
            LanguageType == LANGUAGE_TYPE.Phoenix
            && Type == TOKEN_TYPE.Identifier
            && ( Text == "abstract"
                 || Text == "and"
                 || Text == "array"
                 || Text == "as"
                 || Text == "bool"
                 || Text == "break"
                 || Text == "callable"
                 || Text == "case"
                 || Text == "catch"
                 || Text == "class"
                 || Text == "clone"
                 || Text == "const"
                 || Text == "continue"
                 || Text == "declare"
                 || Text == "default"
                 || Text == "do"
                 || Text == "echo"
                 || Text == "else"
                 || Text == "elseif"
                 || Text == "extends"
                 || Text == "false"
                 || Text == "final"
                 || Text == "finally"
                 || Text == "float"
                 || Text == "for"
                 || Text == "foreach"
                 || Text == "function"
                 || Text == "global"
                 || Text == "goto"
                 || Text == "if"
                 || Text == "implement"
                 || Text == "include"
                 || Text == "include_once"
                 || Text == "instanceof"
                 || Text == "insteadof"
                 || Text == "int"
                 || Text == "interface"
                 || Text == "namespace"
                 || Text == "new"
                 || Text == "null"
                 || Text == "or"
                 || Text == "print"
                 || Text == "private"
                 || Text == "protected"
                 || Text == "public"
                 || Text == "require"
                 || Text == "require_once"
                 || Text == "return"
                 || Text == "static"
                 || Text == "string"
                 || Text == "switch"
                 || Text == "throw"
                 || Text == "trait"
                 || Text == "true"
                 || Text == "try"
                 || Text == "use"
                 || Text == "var"
                 || Text == "while"
                 || Text == "xor"
                 || Text == "yield" );
    }

    // ~~

    bool IsGlobalVariable(
        )
    {
        return
            LanguageType == LANGUAGE_TYPE.Phoenix
            && Type == TOKEN_TYPE.Identifier
            && ( Text == ""
                 || Text == "GLOBALS"
                 || Text == "_COOKIE"
                 || Text == "_ENV"
                 || Text == "_FILES"
                 || Text == "_GET"
                 || Text == "_POST"
                 || Text == "_REQUEST"
                 || Text == "_SERVER"
                 || Text == "_SESSION" );

    }

    // ~~

    bool IsConstant(
        )
    {
        return
            LanguageType == LANGUAGE_TYPE.Phoenix
            && Type == TOKEN_TYPE.Identifier
            && Text.length > 1
            && Text == Text.toUpper();
    }

    // ~~
    
    bool IsAttributePrefixKeyword(
        )
    {
        return 
            LanguageType == LANGUAGE_TYPE.Phoenix
            && Type == TOKEN_TYPE.Identifier
            && ( Text == "const"
                 || Text == "private"
                 || Text == "protected"
                 || Text == "public"
                 || Text == "static" );
    }
    
    // ~~
    
    void SetMinimumPriorSpaceCount(
        long minimum_prior_space_count
        )
    {
        if ( PriorSpaceCount < minimum_prior_space_count )
        {
            PriorSpaceCount = minimum_prior_space_count;
        }
    }
}

// .. CONTEXT

class CONTEXT
{
    // -- ATTRIBUTES

    LANGUAGE_TYPE
        LanguageType;
    TOKEN_TYPE
        TokenType;

    // -- CONSTRUCTORS

    this(
        LANGUAGE_TYPE language_type
        )
    {
        LanguageType = language_type;
        TokenType = TOKEN_TYPE.None;
    }
}

// .. SCOPE

class SCOPE
{
    bool[ string ]
        ItIsVariableMap;
    long
        BlockLevel;

    void AddVariable(
        string variable_name
        )
    {
        ItIsVariableMap[ variable_name ] = true;
    }

    bool HasVariable(
        string variable_name
        )
    {
        return ( variable_name in ItIsVariableMap ) !is null;
    }
}

// .. CODE

class CODE
{
    // -- ATTRIBUTES

    bool
        ItIsWrapped;
    long
        LineCharacterIndex,
        CharacterIndex,
        LineIndex,
        TokenCharacterIndex;
    TOKEN[]
        TokenArray;
    TOKEN
        Token;
    long
        TokenIndex;
    bool
        TokenIsSplit;
    CONTEXT
        BaseContext,
        PhoenixContext,
        Context;
    SCOPE[]
        ScopeArray;
    SCOPE
        Scope;

    // -- CONSTRUCTORS

    this(
        bool it_is_wrapped
        )
    {
        ItIsWrapped = it_is_wrapped;
        LineCharacterIndex = -1;
        CharacterIndex = -1;
        LineIndex = -1;
        TokenCharacterIndex = -1;
        TokenArray = null;
        Token = null;
        TokenIndex = -1;
        TokenIsSplit = false;
        BaseContext = null;
        PhoenixContext = null;
        Context = null;
        Scope = new SCOPE;
        ScopeArray ~= Scope;
    }

    // ~~

    bool IsAlphabeticalCharacter(
        char character
        )
    {
        return
            ( character >= 'a' && character <= 'z' )
            || ( character >= 'A' && character <= 'Z' );
    }

    // ~~

    bool IsNumberCharacter(
        char character,
        char prior_character,
        char next_character
        )
    {
        return
            ( character >= '0' && character <= '9' )
            || ( character >= 'a' && character <= 'z' )
            || ( character >= 'A' && character <= 'Z' )
            || ( character == '.'
                 && prior_character >= '0' && prior_character <= '9'
                 && next_character >= '0' && next_character <= '9' )
            || ( character == '-'
                 && ( prior_character == 'e' || prior_character == 'E' ) );
    }

    // ~~

    bool IsIdentifierCharacter(
        char character
        )
    {
        return
            ( character >= 'a' && character <= 'z' )
            || ( character >= 'A' && character <= 'Z' )
            || ( character >= '0' && character <= '9' )
            || character == '_';
    }

    // ~~

    bool IsSeparatorCharacter(
        char character
        )
    {
        return
            character == '{'
            || character == '}'
            || character == '['
            || character == ']'
            || character == '('
            || character == ')'
            || character == ';'
            || character == ','
            || character == '.'
            || character == ':';
    }

    // ~~

    bool IsOperatorCharacter(
        char character
        )
    {
        return
            character == '='
            || character == '+'
            || character == '-'
            || character == '*'
            || character == '/'
            || character == '%'
            || character == '<'
            || character == '>'
            || character == '~'
            || character == '&'
            || character == '|'
            || character == '^'
            || character == '!'
            || character == '?'
            || character == '@'
            || character == '#'
            || character == '$';
    }

    // ~~

    bool IsLastTokenPrecedingRegularExpression()
    {
        TOKEN
            token;

        if ( TokenArray.length == 0 )
        {
            return true;
        }
        else
        {
            token = TokenArray[ TokenArray.length - 1 ];

            return
                ( token.Type == TOKEN_TYPE.Separator
                  && token.Text != "]"
                  && token.Text != ")" )
                || token.Type == TOKEN_TYPE.Operator;
        }
    }

    // ~~

    void AddToken()
    {
        Token = new TOKEN( "", Context.LanguageType, Context.TokenType, this );
        TokenArray ~= Token;
        TokenIsSplit = false;
    }

    // ~~

    void BeginToken(
        TOKEN_TYPE token_type
        )
    {
        Token = null;
        Context.TokenType = token_type;
    }

    // ~~

    void AddTokenCharacter(
        char token_character
        )
    {
        if ( Token is null
             || TokenIsSplit )
        {
            AddToken();
        }

        Token.Text ~= token_character;
        ++TokenCharacterIndex;
    }

    // ~~

    void EndToken()
    {
        Token = null;
        Context.TokenType = TOKEN_TYPE.None;
    }

    // ~~

    void SetPriorSpaceCount(
        )
    {
        long
            token_index;
        TOKEN
            prior_token,
            token;

        prior_token = null;

        for ( token_index = 0;
              token_index < TokenArray.length;
              ++token_index )
        {
            token = TokenArray[ token_index ];

            if ( token_index == 0
                 || token.LineIndex > prior_token.LineIndex )
            {
                token.PriorSpaceCount = token.ColumnIndex;
            }
            else
            {
                token.PriorSpaceCount = token.ColumnIndex - prior_token.ColumnIndex - prior_token.Text.length;
            }

            prior_token = token;
        }
    }

    // ~~

    void Tokenize(
        string file_text
        )
    {
        char
            character,
            character_2,
            character_3,
            character_4,
            character_5,
            character_6,
            character_7,
            character_8,
            character_9,
            prior_character;
        long
            character_count,
            closing_tag_token_index,
            element_count,
            opening_tag_token_index;
        string
            tag_name;

        file_text = file_text.replace( "\t", "    " ).replace( "\r", "" );

        LineCharacterIndex = 0;
        LineIndex = 0;
        TokenArray = [];
        TokenIsSplit = false;

        if ( ItIsWrapped )
        {
            BaseContext = new CONTEXT( LANGUAGE_TYPE.Phoenix );
            PhoenixContext = null;
        }
        else
        {
            BaseContext = new CONTEXT( LANGUAGE_TYPE.Html );
            PhoenixContext = new CONTEXT( LANGUAGE_TYPE.Phoenix );
        }

        Context = BaseContext;

        EndToken();

        character_count = file_text.length;
        element_count = 0;
        opening_tag_token_index = -1;
        closing_tag_token_index = -1;

        TokenCharacterIndex = 0;

        while ( TokenCharacterIndex < character_count )
        {
            prior_character = ( TokenCharacterIndex - 1 >= 0 ) ? file_text[ TokenCharacterIndex - 1 ] : 0;
            character = file_text[ TokenCharacterIndex ];
            character_2 = ( TokenCharacterIndex + 1 < character_count ) ? file_text[ TokenCharacterIndex + 1 ] : 0;
            character_3 = ( TokenCharacterIndex + 2 < character_count ) ? file_text[ TokenCharacterIndex + 2 ] : 0;
            character_4 = ( TokenCharacterIndex + 3 < character_count ) ? file_text[ TokenCharacterIndex + 3 ] : 0;
            character_5 = ( TokenCharacterIndex + 4 < character_count ) ? file_text[ TokenCharacterIndex + 4 ] : 0;
            character_6 = ( TokenCharacterIndex + 5 < character_count ) ? file_text[ TokenCharacterIndex + 5 ] : 0;
            character_7 = ( TokenCharacterIndex + 6 < character_count ) ? file_text[ TokenCharacterIndex + 6 ] : 0;
            character_8 = ( TokenCharacterIndex + 7 < character_count ) ? file_text[ TokenCharacterIndex + 7 ] : 0;
            character_9 = ( TokenCharacterIndex + 8 < character_count ) ? file_text[ TokenCharacterIndex + 8 ] : 0;

            if ( character == ' '
                 || character == '\n' )
            {
                ++TokenCharacterIndex;

                if ( character == '\n' )
                {
                    if ( Context.TokenType == TOKEN_TYPE.ShortComment
                         || ( ( Context.TokenType == TOKEN_TYPE.CharacterLiteral
                                || Context.TokenType == TOKEN_TYPE.StringLiteral
                                || Context.TokenType == TOKEN_TYPE.TextLiteral )
                              && Context.LanguageType <= LANGUAGE_TYPE.Phoenix )
                         || ( Context.TokenType == TOKEN_TYPE.RegularExpressionLiteral
                              && Context.LanguageType == LANGUAGE_TYPE.Javascript ) )
                    {
                        EndToken();
                    }

                    ++LineIndex;
                    LineCharacterIndex = TokenCharacterIndex;
                }

                TokenIsSplit = true;
            }
            else if ( character == '<'
                      && ( character_2 == '?' 
                           || character_2 == '%' 
                           || character_2 == '#' )
                      && Context.LanguageType != LANGUAGE_TYPE.Phoenix )
            {
                Context = PhoenixContext;

                BeginToken( TOKEN_TYPE.BeginDeclaration );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();
            }
            else if ( Context.TokenType == TOKEN_TYPE.ShortComment )
            {
                AddTokenCharacter( character );
            }
            else if ( Context.TokenType == TOKEN_TYPE.LongComment )
            {
                if ( character == '-'
                     && character_2 == '-'
                     && character_3 == '>'
                     && Context.LanguageType == LANGUAGE_TYPE.Html )
                {
                    BeginToken( TOKEN_TYPE.EndLongComment );
                    AddTokenCharacter( character );
                    AddTokenCharacter( character_2 );
                    AddTokenCharacter( character_3 );
                    EndToken();
                }
                else if ( character == '*'
                          && character_2 == '/'
                          && Context.LanguageType >= LANGUAGE_TYPE.Css )
                {
                    BeginToken( TOKEN_TYPE.EndLongComment );
                    AddTokenCharacter( character );
                    AddTokenCharacter( character_2 );
                    EndToken();
                }
                else
                {
                    AddTokenCharacter( character );
                }
            }
            else if ( Context.TokenType == TOKEN_TYPE.RegularExpressionLiteral )
            {
                AddTokenCharacter( character );

                if ( character == '\\' )
                {
                    AddTokenCharacter( character_2 );
                }
                else if ( character == '/' )
                {
                    EndToken();
                }
            }
            else if ( Context.TokenType == TOKEN_TYPE.CharacterLiteral )
            {
                if ( character == '\'' )
                {
                    BeginToken( TOKEN_TYPE.EndCharacterLiteral );
                    AddTokenCharacter( character );
                    EndToken();
                }
                else if ( character == '\\' )
                {
                    AddTokenCharacter( character );
                    AddTokenCharacter( character_2 );
                }
                else
                {
                    AddTokenCharacter( character );
                }
            }
            else if ( Context.TokenType == TOKEN_TYPE.StringLiteral )
            {
                if ( character == '\"' )
                {
                    BeginToken( TOKEN_TYPE.EndStringLiteral );
                    AddTokenCharacter( character );
                    EndToken();
                }
                else if ( character == '\\' )
                {
                    AddTokenCharacter( character );
                    AddTokenCharacter( character_2 );
                }
                else
                {
                    AddTokenCharacter( character );
                }
            }
            else if ( Context.TokenType == TOKEN_TYPE.TextLiteral )
            {
                if ( character == '`' )
                {
                    BeginToken( TOKEN_TYPE.EndStringLiteral );
                    AddTokenCharacter( character );
                    EndToken();
                }
                else if ( character == '\\' )
                {
                    AddTokenCharacter( character );
                    AddTokenCharacter( character_2 );
                }
                else
                {
                    AddTokenCharacter( character );
                }
            }
            else if ( ( character == '?'
                        || character == '%'
                        || character == '#' )
                      && character_2 == '>'
                      && Context.LanguageType == LANGUAGE_TYPE.Phoenix )
            {
                BeginToken( TOKEN_TYPE.EndDeclaration );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();

                Context = BaseContext;
            }
            else if ( character == '/'
                      && character_2 == '/'
                      && Context.LanguageType >= LANGUAGE_TYPE.Css )
            {
                BeginToken( TOKEN_TYPE.BeginShortComment );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();

                BeginToken( TOKEN_TYPE.ShortComment );
            }
            else if ( character == '<'
                      && character_2 == '!'
                      && character_3 == '-'
                      && character_4 == '-'
                      && Context.LanguageType == LANGUAGE_TYPE.Html )
            {
                BeginToken( TOKEN_TYPE.BeginLongComment );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                AddTokenCharacter( character_3 );
                AddTokenCharacter( character_4 );
                EndToken();

                BeginToken( TOKEN_TYPE.LongComment );
            }
            else if ( character == '/'
                      && character_2 == '*'
                      && Context.LanguageType >= LANGUAGE_TYPE.Css )
            {
                BeginToken( TOKEN_TYPE.BeginLongComment );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();

                BeginToken( TOKEN_TYPE.LongComment );
            }
            else if ( character == '/'
                      && Context.LanguageType == LANGUAGE_TYPE.Javascript
                      && IsLastTokenPrecedingRegularExpression() )
            {
                BeginToken( TOKEN_TYPE.RegularExpressionLiteral );
                AddTokenCharacter( character );
            }

            else if ( character == '\''
                      && ( Context.LanguageType >= LANGUAGE_TYPE.Css
                           || opening_tag_token_index != -1 ) )
            {
                BeginToken( TOKEN_TYPE.BeginCharacterLiteral );
                AddTokenCharacter( character );
                EndToken();

                BeginToken( TOKEN_TYPE.CharacterLiteral );
            }
            else if ( character == '\"'
                      && ( Context.LanguageType >= LANGUAGE_TYPE.Css
                           || opening_tag_token_index != -1 ) )
            {
                BeginToken( TOKEN_TYPE.BeginStringLiteral );
                AddTokenCharacter( character );
                EndToken();

                BeginToken( TOKEN_TYPE.StringLiteral );
            }
            else if ( character == '`'
                      && ( Context.LanguageType >= LANGUAGE_TYPE.Css
                           || opening_tag_token_index != -1 ) )
            {
                BeginToken( TOKEN_TYPE.BeginTextLiteral );
                AddTokenCharacter( character );
                EndToken();

                BeginToken( TOKEN_TYPE.TextLiteral );
            }
            else if ( character == '<'
                      && character_2 == '!'
                      && Context.LanguageType == LANGUAGE_TYPE.Html )
            {
                BeginToken( TOKEN_TYPE.BeginElement );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();

                ++element_count;
            }
            else if ( character == '>'
                      && element_count > 0
                      && Context.LanguageType == LANGUAGE_TYPE.Html )
            {
                BeginToken( TOKEN_TYPE.EndElement );
                AddTokenCharacter( character );
                EndToken();

                --element_count;
            }
            else if ( character == '<'
                      && IsAlphabeticalCharacter( character_2 )
                      && Context.LanguageType == LANGUAGE_TYPE.Html
                      && opening_tag_token_index == -1
                      && closing_tag_token_index == -1 )
            {
                BeginToken( TOKEN_TYPE.BeginOpeningTag );
                AddTokenCharacter( character );
                EndToken();

                opening_tag_token_index = TokenArray.length;
            }
            else if ( character == '/'
                      && character_2 == '>'
                      && Context.LanguageType == LANGUAGE_TYPE.Html
                      && opening_tag_token_index != -1 )
            {
                BeginToken( TOKEN_TYPE.CloseOpeningTag );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();

                opening_tag_token_index = -1;
            }
            else if ( character == '>'
                      && Context.LanguageType == LANGUAGE_TYPE.Html
                      && opening_tag_token_index != -1 )
            {
                BeginToken( TOKEN_TYPE.EndOpeningTag );
                AddTokenCharacter( character );
                EndToken();

                tag_name = TokenArray[ opening_tag_token_index ].Text;

                if ( tag_name == "style" )
                {
                    Context.LanguageType = LANGUAGE_TYPE.Css;
                }
                else if ( tag_name == "script" )
                {
                    Context.LanguageType = LANGUAGE_TYPE.Javascript;
                }

                opening_tag_token_index = -1;
            }
            else if ( character == '<'
                      && character_2 == '/'
                      && IsAlphabeticalCharacter( character_3 )
                      && Context.LanguageType == LANGUAGE_TYPE.Html
                      && opening_tag_token_index == -1
                      && closing_tag_token_index == -1 )
            {
                BeginToken( TOKEN_TYPE.BeginClosingTag );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();

                closing_tag_token_index = TokenArray.length;
            }
            else if ( character == '>'
                      && Context.LanguageType == LANGUAGE_TYPE.Html
                      && closing_tag_token_index != -1 )
            {
                BeginToken( TOKEN_TYPE.EndClosingTag );
                AddTokenCharacter( character );
                EndToken();

                closing_tag_token_index = -1;
            }
            else if ( character == '<'
                      && character_2 == '/'
                      && character_3 == 's'
                      && character_4 == 't'
                      && character_5 == 'y'
                      && character_6 == 'l'
                      && character_7 == 'e'
                      && character_8 == '>'
                      && Context.LanguageType == LANGUAGE_TYPE.Css )
            {
                Context.LanguageType = LANGUAGE_TYPE.Html;

                BeginToken( TOKEN_TYPE.BeginClosingTag );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();

                BeginToken( TOKEN_TYPE.Identifier );
                AddTokenCharacter( character_3 );
                AddTokenCharacter( character_4 );
                AddTokenCharacter( character_5 );
                AddTokenCharacter( character_6 );
                AddTokenCharacter( character_7 );
                EndToken();

                BeginToken( TOKEN_TYPE.EndClosingTag );
                AddTokenCharacter( character_8 );
                EndToken();
            }
            else if ( character == '<'
                      && character_2 == '/'
                      && character_3 == 's'
                      && character_4 == 'c'
                      && character_5 == 'r'
                      && character_6 == 'i'
                      && character_7 == 'p'
                      && character_8 == 't'
                      && character_9 == '>'
                      && Context.LanguageType == LANGUAGE_TYPE.Javascript )
            {
                Context.LanguageType = LANGUAGE_TYPE.Html;

                BeginToken( TOKEN_TYPE.BeginClosingTag );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();

                BeginToken( TOKEN_TYPE.Identifier );
                AddTokenCharacter( character_3 );
                AddTokenCharacter( character_4 );
                AddTokenCharacter( character_5 );
                AddTokenCharacter( character_6 );
                AddTokenCharacter( character_7 );
                AddTokenCharacter( character_8 );
                EndToken();

                BeginToken( TOKEN_TYPE.EndClosingTag );
                AddTokenCharacter( character_9 );
                EndToken();
            }
            else if ( IsNumberCharacter( character, prior_character, character_2 )
                      && Context.TokenType == TOKEN_TYPE.Number )
            {
                AddTokenCharacter( character );
            }
            else if ( IsIdentifierCharacter( character )
                      && Context.TokenType == TOKEN_TYPE.Identifier )
            {
                AddTokenCharacter( character );
            }
            else if ( character >= '0' && character <= '9' )
            {
                BeginToken( TOKEN_TYPE.Number );
                AddTokenCharacter( character );
            }
            else if ( IsIdentifierCharacter( character ) )
            {
                BeginToken( TOKEN_TYPE.Identifier );
                AddTokenCharacter( character );
            }
            else if ( IsOperatorCharacter( character ) )
            {
                BeginToken( TOKEN_TYPE.Operator );
                AddTokenCharacter( character );
                EndToken();
            }
            else if ( character == '.'
                      && character_2 == '.' )
            {
                BeginToken( TOKEN_TYPE.Operator );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();
            }
            else if ( character == ':'
                      && character_2 == ':' )
            {
                BeginToken( TOKEN_TYPE.Operator );
                AddTokenCharacter( character );
                AddTokenCharacter( character_2 );
                EndToken();
            }
            else if ( IsSeparatorCharacter( character ) )
            {
                BeginToken( TOKEN_TYPE.Separator );
                AddTokenCharacter( character );
                EndToken();
            }
            else
            {
                BeginToken( TOKEN_TYPE.Special );
                AddTokenCharacter( character );
                EndToken();
            }
        }

        SetPriorSpaceCount();
    }

    // ~~

    void ProcessLocalVariable(
        ref long token_index
        )
    {
        TOKEN
            token;

        TokenArray[ token_index ].Text = "";

        ++token_index;

        if ( token_index < TokenArray.length )
        {
            token = TokenArray[ token_index ];

            if ( token.Type == TOKEN_TYPE.Identifier )
            {
                Scope.AddVariable( token.Text );

                token.Text = "$" ~ token.Text;
            }
        }
    }

    // ~~

    void ProcessStaticVariables(
        ref long token_index
        )
    {
        bool
            it_is_value;
        TOKEN
            token;

        ++token_index;

        it_is_value = false;

        while ( token_index < TokenArray.length )
        {
            token = TokenArray[ token_index ];

            if ( token.Type == TOKEN_TYPE.Identifier
                 && !it_is_value
                 && token_index + 1 < TokenArray.length
                 && ( TokenArray[ token_index + 1 ].Text == "="
                      || TokenArray[ token_index + 1 ].Text == ","
                      || TokenArray[ token_index + 1 ].Text == ";" ) )
            {
                Scope.AddVariable( token.Text );

                token.Text = "$" ~ token.Text;
            }
            else if ( token.Text == "=" )
            {
                it_is_value = true;
            }
            else if ( token.Text == "," )
            {
                it_is_value = false;
            }
            else if ( token.Text == ";" )
            {
                break;
            }
            else
            {
                ProcessToken( token_index );
            }

            ++token_index;
        }
    }

    // ~~
    
    void ProcessLocalVariables(
        ref long token_index
        )
    {
        TOKEN
            token;

        TokenArray[ token_index ].Text = "";

        if ( token_index > 0
             && TokenArray[ token_index - 1 ].Text == "static" )
        {
            ProcessStaticVariables( token_index );
        }
        else
        {
            ++token_index;

            while ( token_index < TokenArray.length )
            {
                token = TokenArray[ token_index ];

                if ( token.Type == TOKEN_TYPE.Identifier )
                {
                    Scope.AddVariable( token.Text );
                }
                else if ( token.Text == ";" )
                {
                    token.Text = "";

                    break;
                }

                token.Text = "";

                ++token_index;
            }
        }
    }

    // ~~

    void ProcessGlobalVariables(
        ref long token_index
        )
    {
        TOKEN
            token;

        ++token_index;

        while ( token_index < TokenArray.length )
        {
            token = TokenArray[ token_index ];

            if ( token.Type == TOKEN_TYPE.Identifier )
            {
                Scope.AddVariable( token.Text );
                
                token.Text = "$" ~ token.Text;
            }
            else if ( token.Text == ";" )
            {
                break;
            }
            
            ++token_index;
        }
    }

    // ~~

    void ProcessClassAttributes(
        ref long token_index
        )
    {
        bool
            it_is_value;
        TOKEN
            token;

        TokenArray[ token_index ].Text = "";

        if ( token_index > 0
             && !TokenArray[ token_index - 1 ].IsAttributePrefixKeyword() )
        {
            TokenArray[ token_index ].Text = "public";
        }

        ++token_index;

        it_is_value = false;

        while ( token_index < TokenArray.length )
        {
            token = TokenArray[ token_index ];

            if ( token.Type == TOKEN_TYPE.Identifier
                 && !it_is_value
                 && token_index + 1 < TokenArray.length
                 && ( TokenArray[ token_index + 1 ].Text == "="
                      || TokenArray[ token_index + 1 ].Text == ","
                      || TokenArray[ token_index + 1 ].Text == ";" ) )
            {
                token.Text = "$" ~ token.Text;
            }
            else if ( token.Text == "=" )
            {
                it_is_value = true;
            }
            else if ( token.Text == "," )
            {
                it_is_value = false;
            }
            else if ( token.Text == ";" )
            {
                break;
            }
            else
            {
                ProcessToken( token_index );
            }

            ++token_index;
        }
    }

    // ~~

    void ProcessParameters(
        ref long token_index
        )
    {
        bool
            it_is_value;
        TOKEN
            token;
        
        Scope = new SCOPE;
        ScopeArray ~= Scope;

        ++token_index;

        it_is_value = false;

        while ( token_index < TokenArray.length )
        {
            token = TokenArray[ token_index ];

            if ( token.Type == TOKEN_TYPE.Identifier
                 && !it_is_value
                 && token_index + 1 < TokenArray.length
                 && ( TokenArray[ token_index + 1 ].Text == ","
                      || TokenArray[ token_index + 1 ].Text == ")" ) )
            {
                Scope.AddVariable( token.Text );
                
                token.Text = "$" ~ token.Text;
            }
            else if ( token.Text == "=" )
            {
                it_is_value = true;
            }
            else if ( token.Text == "," )
            {
                it_is_value = false;
            }
            else if ( token.Text == ")" )
            {
                break;
            }
            else
            {
                ProcessToken( token_index );
            }

            ++token_index;
        }
    }

    // ~~

    void ProcessForeachLoop(
        ref long token_index
        )
    {
        long
            first_token_index,
            last_token_index,
            parenthesis_level,
            semicolon_token_index;
        TOKEN
            token;

        ++token_index;
        
        first_token_index = token_index;
        
        if ( token_index < TokenArray.length
             && TokenArray[ token_index ].Text == "(" )
        {
            semicolon_token_index = -1;
            last_token_index = -1;

            parenthesis_level = 0;
                    
            while ( token_index < TokenArray.length )
            {
                token = TokenArray[ token_index ];
                
                if ( token.Text == "(" )
                {
                    ++parenthesis_level;
                }
                else if ( token.Text == ")" )
                {
                    --parenthesis_level;
                
                    if ( parenthesis_level == 0 )
                    {
                        break;
                    }
                }
                else if ( token.Text == ";" )
                {
                    semicolon_token_index = token_index;
                }
                
                ++token_index;
            }
            
            last_token_index = token_index;
            
            if ( first_token_index < semicolon_token_index
                 && semicolon_token_index < last_token_index
                 && first_token_index < TokenArray.length
                 && semicolon_token_index < TokenArray.length
                 && last_token_index < TokenArray.length )
            {
                TokenArray[ semicolon_token_index ].Type = TOKEN_TYPE.Identifier;
                TokenArray[ semicolon_token_index ].Text = "as";
                TokenArray[ semicolon_token_index ].SetMinimumPriorSpaceCount( 1 );
                TokenArray[ first_token_index + 1 ].SetMinimumPriorSpaceCount( 1 );
                
                TokenArray 
                    = TokenArray[ 0 .. first_token_index + 1 ]
                      ~ TokenArray[ semicolon_token_index + 1 .. last_token_index ]
                      ~ TokenArray[ semicolon_token_index .. semicolon_token_index + 1 ]
                      ~ TokenArray[ first_token_index + 1 .. semicolon_token_index ]
                      ~ TokenArray[ last_token_index .. $ ];

                for ( token_index = first_token_index;
                      token_index < last_token_index;
                      ++token_index )
                {
                    if ( TokenArray[ token_index ].LineIndex > TokenArray[ token_index + 1 ].LineIndex )
                    {
                        TokenArray[ token_index ].LineIndex = TokenArray[ token_index + 1 ].LineIndex;
                    }
                }
            }
        }
                
        token_index = first_token_index - 1;
    }

    // ~~
    
    void ProcessToken(
        ref long token_index
        )
    {
        TOKEN
            token;

        token = TokenArray[ token_index ];
        
        if ( token.LanguageType == LANGUAGE_TYPE.Phoenix )
        {
            if ( token.Type == TOKEN_TYPE.Identifier )
            {
                if ( token.Text == "var" )
                {
                    ProcessLocalVariable( token_index );
                }
                else if ( token.Text == "local" )
                {
                    ProcessLocalVariables( token_index );
                }
                else if ( token.Text == "global" )
                {
                    ProcessGlobalVariables( token_index );
                }
                else if ( token.Text == "attribute" )
                {
                    ProcessClassAttributes( token_index );
                }
                else if ( token.Text == "catch" )
                {
                    ProcessParameters( token_index );
                }
                else if ( token.Text == "function" )
                {
                    ProcessParameters( token_index );
                }
                else if ( token.Text == "method" )
                {
                    token.Text = "function";

                    ProcessParameters( token_index );
                }
                else if ( token.Text == "foreach" )
                {
                    ProcessForeachLoop( token_index );
                }
                else if ( token.Text == "import" )
                {
                    if ( token_index + 1 < TokenArray.length
                         && TokenArray[ token_index + 1 ].Text == "?" )
                    {
                        token.Text = "include_once __DIR__ . '/' .";
                        TokenArray[ token_index + 1 ].Text = "";
                    }
                    else
                    {
                        token.Text = "require_once __DIR__ . '/' .";
                    }
                }
                else if ( token.Text == "include" )
                {
                    if ( token_index + 1 < TokenArray.length
                         && TokenArray[ token_index + 1 ].Text == "?" )
                    {
                        token.Text = "include __DIR__ . '/' .";
                        TokenArray[ token_index + 1 ].Text = "";
                    }
                    else
                    {
                        token.Text = "require __DIR__ . '/' .";
                    }
                }
                else if ( token.Text == "constructor" )
                {
                    token.Text = "__construct";
                }
                else if ( token.Text == "destructor" )
                {
                    token.Text = "__destruct";
                }
                else if ( token.Text == "this" )
                {
                    token.Text = "$this";
                }
                else if ( !token.IsReservedKeyword()
                          && ( token.IsGlobalVariable()
                               || Scope.HasVariable( token.Text )
                               || ( token_index > 0
                                    && TokenArray[ token_index - 1 ].Text == "::"
                                    && token_index + 1 < TokenArray.length
                                    && TokenArray[ token_index + 1 ].Text != "(" )
                                    && !token.IsConstant() ) )
                {
                    token.Text = "$" ~ token.Text;
                }
            }
            else if ( token.Type == TOKEN_TYPE.Operator )
            {
                if ( token.Text == ".." )
                {
                    token.Text = ".";
                }
            }
            else if ( token.Type == TOKEN_TYPE.Separator )
            {
                if ( token.Text == "." )
                {
                    if ( token_index >= 1
                         && TokenArray[ token_index - 1 ].Text != ")"
                         && TokenArray[ token_index - 1 ].Text != "]"
                         && ( TokenArray[ token_index - 1 ].Type != TOKEN_TYPE.Identifier
                              || TokenArray[ token_index - 1 ].IsReservedKeyword() ) )
                    {
                        token.Text = "$this->";
                    }
                    else
                    {
                        token.Text = "->";
                    }
                }
                else if ( token.Text == "{" )
                {
                    ++Scope.BlockLevel;
                }
                else if ( token.Text == "}" )
                {
                    if ( Scope.BlockLevel > 0 )
                    {
                        --Scope.BlockLevel;
                        
                        if ( Scope.BlockLevel == 0
                             && ScopeArray.length > 1 )
                        {
                            ScopeArray = ScopeArray[ 0 .. $ - 1 ];
                            Scope = ScopeArray[ $ - 1 ];
                        }
                    }
                }
            }
            else if ( token.Type == TOKEN_TYPE.BeginDeclaration )
            {
                if ( token.Text == "<?" )
                {
                    token.Text = "<?php";
                }
                else if ( token.Text == "<%" )
                {
                    token.Text = "<?php echo";

                    if ( token_index + 1 < TokenArray.length
                         && TokenArray[ token_index + 1 ].PriorSpaceCount == 0 )
                    {
                        TokenArray[ token_index + 1 ].PriorSpaceCount = 1;
                    }
                }
                else if ( token.Text == "<#" )
                {
                    token.Text = "<?php echo htmlspecialchars(";
                }

            }
            else if ( token.Type == TOKEN_TYPE.EndDeclaration )
            {
                if ( token.Text == "%>" )
                {
                    token.Text = "; ?>";
                    token.PriorSpaceCount = 0;
                }
                else if ( token.Text == "#>" )
                {
                    token.Text = "); ?>";
                }
            }
        }
    }

    // ~~
    
    void Process(
        )
    {
        long
            token_index;
            
        for ( token_index = 0;
              token_index < TokenArray.length;
              ++token_index )
        {
            ProcessToken( token_index );
        }
    }

    // ~~

    string GetText(
        )
    {
        long
            line_index;
        string
            file_text;

        if ( ItIsWrapped )
        {
            file_text = "<?php ";
        }
        else
        {
            file_text = "";
        }

        line_index = 0;

        foreach ( ref token; TokenArray )
        {
            while ( token.LineIndex > line_index )
            {
                file_text ~= "\n";
                ++line_index;
            }

            foreach ( space_index; 0 .. token.PriorSpaceCount )
            {
                file_text ~= " ";
            }

            file_text ~= token.Text;
        }

        file_text ~= "\n";

        return file_text;
    }
}

class FILE
{
    string
        InputPath,
        OutputPath;
    bool
        ItExists,
        ItIsWrapped;

    // ~~

    this(
        string input_file_path,
        string output_file_path
        )
    {
        InputPath = input_file_path;
        OutputPath = output_file_path;
        ItExists = true;
        ItIsWrapped = input_file_path.endsWith( ".phx" );
    }
    
    // ~~
    
    string ReadInputFile(
        )
    {
        string 
            input_file_text;
            
        writeln( "Reading file : ", InputPath );

        try
        {
            input_file_text = InputPath.readText();
        }
        catch ( FileException file_exception )
        {
            Abort( "Can't read file : " ~ InputPath, file_exception );
        }
        
        return input_file_text;
    }
    
    // ~~
    
    void CreateOutputFolder(
        )
    {
        string
            output_folder_path;
            
        output_folder_path = OutputPath.dirName();
        
        if ( !output_folder_path.exists() )
        {
            writeln( "Creating folder : ", output_folder_path );
            
            try
            {
                if ( output_folder_path != ""
                     && output_folder_path != "/"
                     && !output_folder_path.exists() )
                {
                    output_folder_path.mkdirRecurse();
                }
            }
            catch ( FileException file_exception )
            {
                Abort( "Can't create folder : " ~ output_folder_path, file_exception );
            }
        }
    }
    
    // ~~
    
    void WriteOutputFile(
        string output_file_text
        )
    {
        writeln( "Writing file : ", OutputPath );

        try
        {
            OutputPath.write( output_file_text );
        }
        catch ( FileException file_exception )
        {
            Abort( "Can't write file : " ~ OutputPath, file_exception );
        }
    }

    // ~~

    void Process(
        bool modification_time_is_used
        )
    {
        string
            input_file_text,
            output_file_text;
        CODE
            code;
            
        if ( ItExists
             && ( !OutputPath.exists()
                  || !modification_time_is_used
                  || InputPath.timeLastModified() > OutputPath.timeLastModified() ) )
        {
            input_file_text = ReadInputFile();

            code = new CODE( InputPath.endsWith( ".phx" ) );
            code.Tokenize( input_file_text );
            code.Process();
            
            output_file_text = code.GetText();
            
            if ( CreateOptionIsEnabled )
            {
                CreateOutputFolder();
            }
            
            WriteOutputFile( output_file_text );
        }
    }
}

// -- VARIABLES

bool
    CreateOptionIsEnabled,
    WatchOptionIsEnabled;
long
    PauseDuration;
string
    InputFolderPath,
    OutputFolderPath;
FILE[ string ]
    FileMap;

// -- FUNCTIONS

void PrintError(
    string message
    )
{
    writeln( "*** ERROR : ", message );
}

// ~~

void Abort(
    string message
    )
{
    PrintError( message );

    exit( -1 );
}

// ~~

void Abort(
    string message,
    FileException file_exception
    )
{
    PrintError( message );
    PrintError( file_exception.msg );

    exit( -1 );
}

// ~~

void FindFiles(
    string input_folder_path,
    string output_folder_path
    )
{
    string
        input_file_path,
        output_file_path;
    FILE *
        file;

    foreach ( ref old_file; FileMap )
    {
        old_file.ItExists = false;
    }

    foreach ( input_folder_entry; dirEntries( input_folder_path, "*.ph?", SpanMode.depth ) )
    {
        if ( input_folder_entry.isFile() )
        {
            input_file_path = input_folder_entry.name();
            
            if ( input_file_path.startsWith( input_folder_path )
                 && ( input_file_path.endsWith( ".phx" )
                      || input_file_path.endsWith( ".pht" ) ) )
            {
                output_file_path 
                    = output_folder_path 
                      ~ input_file_path[ input_folder_path.length .. $ - 4 ]
                      ~ ".php";
            
                file = input_file_path in FileMap;
                
                if ( file is null )
                {
                    FileMap[ input_file_path ] = new FILE( input_file_path, output_file_path );
                }
                else
                {
                    file.ItExists = true;
                }
            }
        }
    }
}

// ~~

void ProcessFiles(
    string input_folder_path,
    string output_folder_path,
    bool modification_time_is_used
    )
{
    FindFiles( input_folder_path, output_folder_path );
    
    foreach ( ref file; FileMap )
    {
        file.Process( modification_time_is_used );
    }
}

// ~~

void WatchFiles(
    string input_folder_path,
    string output_folder_path
    )
{
    ProcessFiles( input_folder_path, output_folder_path, false );

    writeln( "Watching files..." );

    while ( true )
    {
        Thread.sleep( dur!( "msecs" )( PauseDuration ) );

        ProcessFiles( input_folder_path, output_folder_path, true );
    }
}

// ~~

void main(
    string[] argument_array
    )
{
    string
        option;

    argument_array = argument_array[ 1 .. $ ];

    CreateOptionIsEnabled = false;
    WatchOptionIsEnabled = false;
    PauseDuration = 500;

    while ( argument_array.length >= 1
            && argument_array[ 0 ].startsWith( "--" ) )
    {
        option = argument_array[ 0 ];

        argument_array = argument_array[ 1 .. $ ];

        if ( option == "--create" )
        {
            CreateOptionIsEnabled = true;
        }
        else if ( option == "--watch" )
        {
            WatchOptionIsEnabled = true;
        }
        else if ( option == "--pause"
                  && argument_array.length >= 1 )
        {
            PauseDuration = argument_array[ 0 ].to!long();

            argument_array = argument_array[ 1 .. $ ];
        }
        else
        {
            PrintError( "Invalid option : " ~ option );
        }
    }

    if ( argument_array.length == 2
         && argument_array[ 0 ].endsWith( '/' )
         && argument_array[ 1 ].endsWith( '/' ) )
    {
        if ( WatchOptionIsEnabled )
        {
            WatchFiles( argument_array[ 0 ], argument_array[ 1 ] );
        }
        else
        {
            ProcessFiles( argument_array[ 0 ], argument_array[ 1 ], false );
        }
    }
    else
    {
        writeln( "Usage :" );
        writeln( "    phoenix [options] INPUT_FOLDER/ OUTPUT_FOLDER/" );
        writeln( "Options :" );
        writeln( "    --create" );
        writeln( "    --watch" );
        writeln( "    --pause 500" );
        writeln( "Examples :" );
        writeln( "    phoenix PHX/ PHP/" );
        writeln( "    phoenix --create PHX/ PHP/" );
        writeln( "    phoenix --create --watch PHX/ PHP/" );

        PrintError( "Invalid arguments : " ~ argument_array.to!string() );
    }
}
