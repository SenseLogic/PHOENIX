<?php // -- IMPORTS

require_once __DIR__ . '/' . '../MODEL/session.php';
require_once __DIR__ . '/' . '../MODEL/text_model.php';

// -- TYPES

class VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        $this->Session = new SESSION();

        $this->LanguageCode = $language_code;
        $this->LanguageDecimalSeparator = ',';
        $this->TextArray = GetDatabaseTextArray();
        $this->TextMap = array();

        foreach ( $this->TextArray as  $text )
        {
            $this->TextMap[ $text->Slug ] = $text->Text;
        }
    }

    // -- INQUIRIES

    function GetRawText(
        string $text
        )
    {
        return
            str_replace(
                [
                    '[black]',
                    '[/black]',
                    '[gray]',
                    '[/gray]',
                    '[white]',
                    '[/white]',
                    '[pink]',
                    '[/pink]',
                    '[red]',
                    '[/red]',
                    '[orange]',
                    '[/orange]',
                    '[yellow]',
                    '[/yellow]',
                    '[green]',
                    '[/green]',
                    '[cyan]',
                    '[/cyan]',
                    '[blue]',
                    '[/blue]',
                    '[violet]',
                    '[/violet]',
                    '[p]',
                    '[/p]',
                    '[b]',
                    '[/b]',
                    '[i]',
                    '[/i]',
                    '[a]',
                    '[:]',
                    '[/a]',
                    '[nbsp]',
                    '[br]'
                ],
                '',
                $this->GetTranslatedText( $text )
                );
    }

    // ~~

    function GetProcessedText(
        string $text
        )
    {
        return
            str_replace(
                [
                    '[black]',
                    '[/black]',
                    '[gray]',
                    '[/gray]',
                    '[white]',
                    '[/white]',
                    '[pink]',
                    '[/pink]',
                    '[red]',
                    '[/red]',
                    '[orange]',
                    '[/orange]',
                    '[yellow]',
                    '[/yellow]',
                    '[green]',
                    '[/green]',
                    '[cyan]',
                    '[/cyan]',
                    '[blue]',
                    '[/blue]',
                    '[violet]',
                    '[/violet]',
                    '[p]',
                    '[/p]',
                    '[b]',
                    '[/b]',
                    '[i]',
                    '[/i]',
                    '[a]',
                    '[:]',
                    '[/a]',
                    '[nbsp]',
                    '[br]'
                ],
                [
                    '<span class="text-color-black">',
                    '</span>',
                    '<span class="text-color-gray">',
                    '</span>',
                    '<span class="text-color-white">',
                    '</span>',
                    '<span class="text-color-pink">',
                    '</span>',
                    '<span class="text-color-red">',
                    '</span>',
                    '<span class="text-color-orange">',
                    '</span>',
                    '<span class="text-color-yellow">',
                    '</span>',
                    '<span class="text-color-green">',
                    '</span>',
                    '<span class="text-color-cyan">',
                    '</span>',
                    '<span class="text-color-blue">',
                    '</span>',
                    '<span class="text-color-violet">',
                    '</span>',
                    '<p>',
                    '</p>',
                    '<b>',
                    '</b>',
                    '<i>',
                    '</i>',
                    '<a href="',
                    '">',
                    '</a>',
                    '&nbsp;',
                    '<br/>'
                ],
                $this->GetTranslatedText( $text )
                );
    }

    // ~~

    function GetTranslatedText(
        string $text
        )
    {
        return GetTranslatedText( $text, $this->LanguageCode );
    }

    // ~~

    function GetTranslatedNumber(
        string $number
        )
    {
        return GetTranslatedNumber( $number, $this->LanguageDecimalSeparator );
    }

    // ~~

    function GetText(
        string $slug
        )
    {
        return $this->GetProcessedText( GetTranslatedText( $this->TextMap[ $slug ], $this->LanguageCode ) );
    }

    // ~~

    function GetNumber(
        string $slug
        )
    {
        return GetTranslatedNumber( $this->TextMap[ $slug ], $this->LanguageDecimalSeparator );
    }
}
