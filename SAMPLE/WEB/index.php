<?php // -- CONSTANTS

define( 'DatabaseHost', 'localhost' );
define( 'DatabaseName', 'blog' );
define( 'DatabaseUserName', 'root' );
define( 'DatabasePassword', 'root' );

// -- IMPORTS

require_once __DIR__ . '/' . 'FRAMEWORK/error.php';
require_once __DIR__ . '/' . 'FRAMEWORK/request.php';
require_once __DIR__ . '/' . 'FRAMEWORK/session.php';
require_once __DIR__ . '/' . 'FRAMEWORK/database.php';
require_once __DIR__ . '/' . 'FRAMEWORK/language.php';
require_once __DIR__ . '/' . 'FRAMEWORK/captcha.php';

// -- FUNCTIONS

function Route(
    string $path
    )
{
     $path_value_array = GetPathValueArray( $path );
     $language_code_array = [ 'en', 'de', 'fr' ];
     $language_code = ExtractLanguageCode( $path_value_array, $language_code_array, '' );

    if ( $language_code === '' )
    {
        $language_code = GetBrowserLanguageCode( $language_code_array, 'en' );
    }

     $path_value_count = count( $path_value_array );

    if ( IsGetRequest() )
    {
        if ( $path_value_count == 2
             && $path_value_array[ 0 ] == 'section'
             && IsId( $path_value_array[ 1 ] ) )
        {
             $section_id = $path_value_array[ 1 ];
            require_once __DIR__ . '/' . 'CONTROLLER/show_section_controller.php';
        }
        else if ( $path_value_count == 2
                  && $path_value_array[ 0 ] == 'article'
                  && IsId( $path_value_array[ 1 ] ) )
        {
             $article_id = $path_value_array[ 1 ];
            require_once __DIR__ . '/' . 'CONTROLLER/show_article_controller.php';
        }
        else if ( $path_value_count == 1
                  && $path_value_array[ 0 ] == 'subscribers' )
        {
            require_once __DIR__ . '/' . 'CONTROLLER/show_subscribers_controller.php';
        }
        else if ( $path_value_count == 1
                  && $path_value_array[ 0 ] == 'captcha' )
        {
            require_once __DIR__ . '/' . 'CONTROLLER/get_captcha_image_controller.php';
        }
        else
        {
             $section_id = 0;
            require_once __DIR__ . '/' . 'CONTROLLER/show_section_controller.php';
        }
    }
    else if ( IsPostRequest() )
    {
        if ( $path_value_count == 2
             && $path_value_array[ 0 ] == 'add_comment'
             && IsId( $path_value_array[ 1 ] )
             && IsSessionValue( "UserIsConnected", true ) )
        {
             $article_id = $path_value_array[ 1 ];
            require_once __DIR__ . '/' . 'CONTROLLER/add_comment_controller.php';
        }
        else if ( $path_value_count == 1
                  && $path_value_array[ 0 ] == 'add_subscriber' )
        {
            require_once __DIR__ . '/' . 'CONTROLLER/add_subscriber_controller.php';
        }
        else if ( $path_value_count == 1
                  && $path_value_array[ 0 ] == 'connect_user' )
        {
            require_once __DIR__ . '/' . 'CONTROLLER/connect_user_controller.php';
        }
        else if ( $path_value_count == 1
                  && $path_value_array[ 0 ] == 'disconnect_user' )
        {
            require_once __DIR__ . '/' . 'CONTROLLER/disconnect_user_controller.php';
        }
    }
}

// -- STATEMENTS

Route( GetPath() );
