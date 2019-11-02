<?php // -- CONSTANTS

define( 'DatabaseHost', 'localhost' );
define( 'DatabaseName', 'blog' );
define( 'DatabaseUserName', 'root' );
define( 'DatabasePassword', 'root' );

// -- IMPORTS

require_once __DIR__ . '/' . 'FRAMEWORK/framework.php';
require_once __DIR__ . '/' . 'FRAMEWORK/captcha.php';

// -- FUNCTIONS

function Route(
    string $path
    )
{
     $path_value_array = GetPathValueArray( $path );
     $path_value_count = count( $path_value_array );
     $controller_name = '';

    if ( $path_value_count > 0 )
    {
        $controller_name = $path_value_array[ 0 ];
    }

    if ( IsGetRequest() )
    {
        if ( $controller_name == 'show_section'
             && $path_value_count == 2
             && IsId( $path_value_array[ 1 ] ) )
        {
             $section_id = $path_value_array[ 1 ];
            require_once __DIR__ . '/' . 'CONTROLLER/show_section_controller.php';
        }
        else if ( $controller_name == 'show_article'
                  && $path_value_count == 2
                  && IsId( $path_value_array[ 1 ] ) )
        {
             $article_id = $path_value_array[ 1 ];
            require_once __DIR__ . '/' . 'CONTROLLER/show_article_controller.php';
        }
        else if ( $controller_name == 'get_captcha_image'
                  && $path_value_count == 1 )
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
        if ( $controller_name == 'add_comment'
             && $path_value_count == 2
             && IsId( $path_value_array[ 1 ] )
             && IsSessionValue( "UserIsConnected", true ) )
        {
             $article_id = $path_value_array[ 1 ];
            require_once __DIR__ . '/' . 'CONTROLLER/add_comment_controller.php';
        }
        else if ( $controller_name == 'add_subscriber'
                  && $path_value_count == 1 )
        {
            require_once __DIR__ . '/' . 'CONTROLLER/add_subscriber_controller.php';
        }
        else if ( $controller_name == 'connect_user'
                  && $path_value_count == 1 )
        {
            require_once __DIR__ . '/' . 'CONTROLLER/connect_user_controller.php';
        }
        else if ( $controller_name == 'disconnect_user'
                  && $path_value_count == 1 )
        {
            require_once __DIR__ . '/' . 'CONTROLLER/disconnect_user_controller.php';
        }
    }
}

// -- STATEMENTS

Route( GetPath() );