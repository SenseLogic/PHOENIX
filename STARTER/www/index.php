<?php // -- IMPORTS

require_once __DIR__ . '/' . 'FRAMEWORK/error.php';
require_once __DIR__ . '/' . 'FRAMEWORK/global.php';
require_once __DIR__ . '/' . 'FRAMEWORK/text.php';
require_once __DIR__ . '/' . 'FRAMEWORK/path.php';
require_once __DIR__ . '/' . 'FRAMEWORK/file.php';
require_once __DIR__ . '/' . 'FRAMEWORK/date.php';
require_once __DIR__ . '/' . 'FRAMEWORK/language.php';
require_once __DIR__ . '/' . 'FRAMEWORK/request.php';
require_once __DIR__ . '/' . 'FRAMEWORK/session.php';
require_once __DIR__ . '/' . 'FRAMEWORK/database.php';
require_once __DIR__ . '/' . 'FRAMEWORK/captcha.php';
require_once __DIR__ . '/' . 'FRAMEWORK/mail.php';

// -- CONSTANTS

define( 'DatabaseHost', 'localhost' );

if ( GetServerName() === 'localhost' )
{
    define( 'DatabaseName', 'blog' );
    define( 'DatabaseUserName', 'root' );
    define( 'DatabasePassword', 'root' );
}
else
{
    define( 'DatabaseName', '???' );
    define( 'DatabaseUserName', '???' );
    define( 'DatabasePassword', '???' );
}

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
     $it_is_get_request = IsGetRequest();
     $it_is_post_request = IsPostRequest();
     $it_is_put_request = IsPutRequest();
     $it_is_delete_request = IsDeleteRequest();
     $user_is_connected = FindSessionValue( 'UserIsConnected', false );

    if ( $path_value_count >= 1
         && $path_value_array[ 0 ] === 'admin' )
    {
         $user_is_connected = FindSessionValue( 'UserIsConnected', false );

        if ( $path_value_count === 1
             || !$user_is_connected )
        {
            if ( $it_is_get_request )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/connect_user_controller.php';
            }
            else if ( $it_is_post_request )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_connect_user_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $it_is_post_request
                  && $path_value_count == 3
                  && $path_value_array[ 1 ] === 'upload'
                  && $path_value_array[ 2 ] === 'image' )
        {
            require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/upload_image_controller.php';
        }
        else if ( $it_is_post_request
                  && $path_value_count == 3
                  && $path_value_array[ 1 ] === 'upload'
                  && $path_value_array[ 2 ] === 'video' )
        {
            require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/upload_video_controller.php';
        }
        else if ( $it_is_post_request
                  && $path_value_count == 3
                  && $path_value_array[ 1 ] === 'upload'
                  && $path_value_array[ 2 ] === 'file' )
        {
            require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/upload_file_controller.php';
        }
        else if ( $it_is_get_request
                  && $path_value_count === 2
                  && $path_value_array[ 1 ] === 'disconnect' )
        {
            require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/disconnect_user_controller.php';
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'text' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_texts_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_text_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'Slug' )
                      && HasPostValue( 'Text' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_text_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $text_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_text_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $text_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_text_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] )
                      && HasPostValue( 'Slug' )
                      && HasPostValue( 'Text' ) )
            {
                 $text_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_text_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $text_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_text_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $text_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_text_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'contact' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_contacts_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_contact_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'Name' )
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'Message' )
                      && HasPostValue( 'DateTime' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_contact_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $contact_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_contact_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $contact_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_contact_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] )
                      && HasPostValue( 'Name' )
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'Message' )
                      && HasPostValue( 'DateTime' ) )
            {
                 $contact_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_contact_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $contact_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_contact_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $contact_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_contact_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'user' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_users_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_user_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'Pseudonym' )
                      && HasPostValue( 'Password' )
                      && HasPostValue( 'IsAdministrator' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_user_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $user_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_user_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $user_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_user_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] )
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'Pseudonym' )
                      && HasPostValue( 'Password' )
                      && HasPostValue( 'IsAdministrator' ) )
            {
                 $user_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_user_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $user_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_user_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $user_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_user_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else
        {
            require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
        }
    }
    else
    {
        if ( $it_is_get_request )
        {
            if ( $path_value_count === 1
                 && $path_value_array[ 0 ] === 'captcha' )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/get_captcha_image_controller.php';
            }
            else if ( $path_value_count == 0 )
            {
                 $section_id = 0;
                require_once __DIR__ . '/' . 'CONTROLLER/show_base_controller.php';
            }
            else
            {
                SetStatus( 404 );
            }
        }
        else if ( $it_is_post_request )
        {
            if ( $path_value_count === 2
                 && $path_value_array[ 0 ] === 'user' )
            {
                if ( $path_value_array[ 1 ] === 'connect' )
                {
                    require_once __DIR__ . '/' . 'CONTROLLER/connect_user_controller.php';
                }
                else if ( $path_value_array[ 1 ] === 'disconnect' )
                {
                    require_once __DIR__ . '/' . 'CONTROLLER/disconnect_user_controller.php';
                }
            }
            else if ( $path_value_count === 1
                      && $path_value_array[ 0 ] === 'contact'
                      && HasPostValue( 'Name' )
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'Message' )
                      && HasPostValue( 'Captcha' ) )
            {
                 $name = GetPostValue( 'Name' );
                 $email = GetPostValue( 'Email' );
                 $message = GetPostValue( 'Message' );
                 $captcha = GetPostValue( 'Captcha' );

                require_once __DIR__ . '/' . 'CONTROLLER/add_contact_controller.php';
            }
            else
            {
                SetStatus( 404 );
            }
        }
    }
}

// -- STATEMENTS

ShowErrors();
Route( GetPath() );
