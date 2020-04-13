<?php // -- FUNCTIONS

function HasGlobalValue(
    string $name
    )
{
    return isset( $GLOBALS[ $name ] );
}

// ~~

function GetGlobalValue(
    string $name
    )
{
    return $GLOBALS[ $name ];
}

// ~~

function FindGlobalValue(
    string $name,
    $default_value
    )
{
    if ( isset( $GLOBALS[ $name ] ) )
    {
        return $GLOBALS[ $name ];
    }
    else
    {
        return $default_value;
    }
}

// ~~

function SetGlobalValue(
    string $name,
    $value
    )
{
    $GLOBALS[ $name ] = $value;
}

// ~~

function SetGlobalValueOnce(
    string $name,
    $value
    )
{
    if ( !isset( $GLOBALS[ $name ] ) )
    {
        $GLOBALS[ $name ] = $value;

        return true;
    }
    else
    {
        return false;
    }
}
