<?php // -- FUNCTIONS

function GetJsonText(
    $value
    )
{
    return json_encode( $value );
}

// ~~

function GetJsonValue(
    $text
    )
{
    return json_decode( $text );
}
