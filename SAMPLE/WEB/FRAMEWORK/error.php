<?php // -- FUNCTIONS

function ShowErrors(
    )
{
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
}

// ~~

function HideErrors(
    )
{
    ini_set( 'display_errors', 0 );
    error_reporting( 0 );
}

// ~~

function PrintText(
    $text
    )
{
    error_log( $text, 3, $_SERVER[ 'DOCUMENT_ROOT' ] . '/php.log' );
}

// ~~

function PrintLine(
    $text
    )
{
    PrintText( $text . "\n" );
}

// ~~

function PrintRequest(
    )
{
    PrintLine( 'TIME : ' . date( 'Y-m-d H:i:s' ) );
    PrintLine( 'URI : ' . $_SERVER[ 'REQUEST_URI' ] );
    PrintLine( 'GET : ' . json_encode( $_GET, JSON_PRETTY_PRINT ) );
    PrintLine( 'POST : ' . json_encode( $_POST, JSON_PRETTY_PRINT ) );
    PrintLine( 'FILES : ' . json_encode( $_FILES, JSON_PRETTY_PRINT ) );
    PrintLine( 'SESSION : ' . json_encode( $_SESSION, JSON_PRETTY_PRINT ) );
    PrintLine( 'SERVER : ' . json_encode( $_SERVER, JSON_PRETTY_PRINT ) );
}
