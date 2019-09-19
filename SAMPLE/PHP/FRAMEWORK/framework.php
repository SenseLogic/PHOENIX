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

function Reload(
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

function GetTranslation(
    string $text,
    int $translation_index
    )
{
    
        

    $translation_array = explode( ' ¨ ', $text );

    if ( $translation_index < count( $translation_array ) )
    {
        return $text[ $translation_index ];
    }
    else
    {
        return $text[ 0 ];
    }
}

// -- STATEMENTS

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

session_start();
