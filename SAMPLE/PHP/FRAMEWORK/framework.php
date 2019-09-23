<?php // -- FUNCTIONS

function GetPath(
    )
{
    static 
        $path = null;

    if ( is_null( $path ) )
    {
        $path = explode( '?', $_SERVER[ 'REQUEST_URI' ] )[ 0 ];

        if ( $path == '' )
        {
            $path = '/';
        }
    }

    return $path;
}

// ~~

function GetPathValueArray(
    string $path
    )
{
    if ( substr( $path, 0, 1 ) == '/' )
    {
        $path = substr( $path, 1 );
    }

    if ( substr( $path, -1 ) == '/' )
    {
        $path = substr( $path, 0, -1 );
    }

    return explode( '/', $path );
}

// ~~

function IsGetRequest(
    )
{
    return $_SERVER[ "REQUEST_METHOD" ] == "GET";
}

// ~~

function IsPostRequest(
    )
{
    return $_SERVER[ "REQUEST_METHOD" ] == "POST";
}

// ~~

function IsPutRequest(
    )
{
    return $_SERVER[ "REQUEST_METHOD" ] == "PUT";
}

// ~~

function IsDeleteRequest(
    )
{
    return $_SERVER[ "REQUEST_METHOD" ] == "DELETE";
}

// ~~

function HasQueryValue(
    string $name
    )
{
    return isset( $_GET[ $name ] );
}

// ~~

function GetQueryValue(
    string $name
    )
{
    return $_GET[ $name ];
}

// ~~

function HasPostValue(
    string $name
    )
{
    return isset( $_POST[ $name ] );
}

// ~~

function GetPostValue(
    string $name
    )
{
    return $_POST[ $name ];
}

// ~~

function HasSessionValue(
    string $name
    )
{
    return isset( $_SESSION[ $name ] );
}

// ~~

function GetSessionValue(
    string $name
    )
{
    return $_SESSION[ $name ];
}

// ~~

function SetSessionValue(
    $name,
    $value
    )
{
    $_SESSION[ $name ] = $value;
}

// ~~

function IsSessionValue(
    string $name,
    $value
    )
{
    return
        isset( $_SESSION[ $name ] )
        && $_SESSION[ $name ] == $value;
}

// ~~

function FindSessionValue(
    string $name,
    $default_value
    )
{
    if ( isset( $_SESSION[ $name ] ) )
    {
        return $_SESSION[ $name ];
    }
    else
    {
        return $default_value;
    }
}

// ~~

function HasCookieValue(
    string $name
    )
{
    return isset( $_COOKIE[ $name ] );
}

// ~~

function GetCookieValue(
    string $name
    )
{
    return $_COOKIE[ $name ];
}

// ~~

function Redirect(
    string $path
    )
{
    header( 'Location: ' . $path );
}

// ~~

function IsId(
    $value
    )
{
    return
        is_numeric( $value )
        && $value == ( int ) $value
        && $value > 0;
}

// ~~

function GetDatabaseConnection(
    )
{
    static 
        $connection = null;

    if ( is_null( $connection ) )
    {
        $connection = new PDO( 'mysql:host=localhost;dbname=BLOG', 'root', 'root' );
        $connection->prepare( "set names 'utf8mb4'" )->execute();
    }

    return $connection;
}

// ~~

function GetDatabaseError(
    )
{
    return GetDatabaseConnection()->errorInfo();
}

// ~~

function GetDatabaseAddedId(
    )
{
    return GetDatabaseConnection()->lastInsertId();
}

// ~~

function GetDatabaseStatement(
    string $command
    )
{
    return GetDatabaseConnection()->prepare( $command );
}

// ~~

function GetDatabaseObject(
    $statement
    )
{
    return $statement->fetchObject();
}

// ~~

function GetDatabaseObjectArray(
    $statement
    )
{
     $object_array = [];

    while (  $object = $statement->fetchObject() )
    {
        array_push( $object_array, $object );
    }

    return $object_array;
}

// ~~

function GetBrowserLanguageIndex(
    array $valid_language_code_array
    )
{
    if ( isset( $_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ] ) )
    {
         $browser_language_code_array = explode( ',', str_replace( ';', ',', $_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ] ) );

        foreach ( $browser_language_code_array as  $browser_language_code )
        {
            $browser_language_code = strtolower( substr( $browser_language_code, 0, 2 ) );

             $valid_language_code_index = array_search( $browser_language_code, $valid_language_code_array, true );

            if ( $valid_language_code_index !== false )
            {
                return $valid_language_code_index;
            }
        }
    }
    else
    {
        return 0;
    }
}

// ~~

function GetTranslation(
    string $text,
    int $translation_index,
    string $translation_separator
    )
{
    
        

     $translation_array = explode( $translation_separator, $text );

    if ( $translation_index < count( $translation_array ) )
    {
        $translation = $translation_array[ $translation_index ];
    }
    else
    {
        $translation = $translation_array[ 0 ];
    }

    return str_replace( '[<', '<', str_replace( '>]', '>', $translation ) );
}

// -- STATEMENTS

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

session_start();
