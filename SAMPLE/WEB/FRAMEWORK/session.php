<?php // -- FUNCTIONS

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

// -- STATEMENTS

session_start();
