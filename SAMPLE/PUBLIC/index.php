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

    if ( $path_value_count >= 2
         && $path_value_array[ 0 ] === 'api' )
    {
        if ( !$user_is_connected )
        {
            require_once __DIR__ . '/' . 'CONTROLLER/API/report_unauthorized_request_controller.php';
        }
        else if ( $path_value_array[ 1 ] === 'text' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/get_text_array_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $text_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/get_text_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/add_text_controller.php';
            }
            else if ( $it_is_put_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $text_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/set_text_controller.php';
            }
            else if ( $it_is_delete_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $text_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/remove_text_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/report_bad_request_controller.php';
            }
        }
        else if ( $path_value_array[ 1 ] === 'section' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/get_section_array_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $section_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/get_section_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/add_section_controller.php';
            }
            else if ( $it_is_put_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $section_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/set_section_controller.php';
            }
            else if ( $it_is_delete_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $section_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/remove_section_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/report_bad_request_controller.php';
            }
        }
        else if ( $path_value_array[ 1 ] === 'article' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/get_article_array_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $article_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/get_article_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/add_article_controller.php';
            }
            else if ( $it_is_put_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $article_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/set_article_controller.php';
            }
            else if ( $it_is_delete_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $article_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/remove_article_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/report_bad_request_controller.php';
            }
        }
        else if ( $path_value_array[ 1 ] === 'comment' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/get_comment_array_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $comment_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/get_comment_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/add_comment_controller.php';
            }
            else if ( $it_is_put_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $comment_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/set_comment_controller.php';
            }
            else if ( $it_is_delete_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $comment_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/remove_comment_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/report_bad_request_controller.php';
            }
        }
        else if ( $path_value_array[ 1 ] === 'subscriber' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/get_subscriber_array_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $subscriber_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/get_subscriber_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/add_subscriber_controller.php';
            }
            else if ( $it_is_put_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $subscriber_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/set_subscriber_controller.php';
            }
            else if ( $it_is_delete_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $subscriber_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/remove_subscriber_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/report_bad_request_controller.php';
            }
        }
        else if ( $path_value_array[ 1 ] === 'contact' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/get_contact_array_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $contact_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/get_contact_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/add_contact_controller.php';
            }
            else if ( $it_is_put_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $contact_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/set_contact_controller.php';
            }
            else if ( $it_is_delete_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $contact_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/remove_contact_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/report_bad_request_controller.php';
            }
        }
        else if ( $path_value_array[ 1 ] === 'user' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/get_user_array_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $user_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/get_user_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/add_user_controller.php';
            }
            else if ( $it_is_put_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $user_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/set_user_controller.php';
            }
            else if ( $it_is_delete_request
                      && $path_value_count === 3
                      && IsUuid( $path_value_array[ 2 ] ) )
            {
                 $user_uuid = $path_value_array[ 2 ];

                require_once __DIR__ . '/' . 'CONTROLLER/API/remove_user_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'CONTROLLER/API/report_bad_request_controller.php';
            }
        }
        else
        {
            require_once __DIR__ . '/' . 'CONTROLLER/API/report_bad_request_controller.php';
        }
    }
    else if ( $path_value_count >= 1
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
                  && $path_value_array[ 1 ] === 'section' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_sections_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_section_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'Number' )
                      && HasPostValue( 'Name' )
                      && HasPostValue( 'Text' )
                      && HasPostValue( 'Image' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_section_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $section_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_section_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $section_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_section_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] )
                      && HasPostValue( 'Number' )
                      && HasPostValue( 'Name' )
                      && HasPostValue( 'Text' )
                      && HasPostValue( 'Image' ) )
            {
                 $section_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_section_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $section_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_section_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $section_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_section_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'article' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_articles_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_article_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'SectionId' )
                      && HasPostValue( 'UserId' )
                      && HasPostValue( 'Title' )
                      && HasPostValue( 'Text' )
                      && HasPostValue( 'Image' )
                      && HasPostValue( 'Date' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_article_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $article_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_article_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $article_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_article_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] )
                      && HasPostValue( 'SectionId' )
                      && HasPostValue( 'UserId' )
                      && HasPostValue( 'Title' )
                      && HasPostValue( 'Text' )
                      && HasPostValue( 'Image' )
                      && HasPostValue( 'Date' ) )
            {
                 $article_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_article_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $article_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_article_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $article_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_article_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'comment' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_comments_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_comment_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'ArticleId' )
                      && HasPostValue( 'UserId' )
                      && HasPostValue( 'Text' )
                      && HasPostValue( 'DateTime' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_comment_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $comment_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_comment_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $comment_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_comment_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] )
                      && HasPostValue( 'ArticleId' )
                      && HasPostValue( 'UserId' )
                      && HasPostValue( 'Text' )
                      && HasPostValue( 'DateTime' ) )
            {
                 $comment_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_comment_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $comment_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_comment_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $comment_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_comment_controller.php';
            }
            else
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/show_error_controller.php';
            }
        }
        else if ( $path_value_count >= 2
                  && $path_value_array[ 1 ] === 'subscriber' )
        {
            if ( $it_is_get_request
                 && $path_value_count === 2 )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_subscribers_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add' )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/add_subscriber_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 3
                      && $path_value_array[ 2 ] === 'add'
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'IpAddress' )
                      && HasPostValue( 'Browser' )
                      && HasPostValue( 'Latitude' )
                      && HasPostValue( 'Longitude' )
                      && HasPostValue( 'CountryCode' )
                      && HasPostValue( 'DateTime' ) )
            {
                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_add_subscriber_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'view'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $subscriber_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/view_subscriber_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $subscriber_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/edit_subscriber_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'edit'
                      && IsId( $path_value_array[ 3 ] )
                      && HasPostValue( 'Email' )
                      && HasPostValue( 'IpAddress' )
                      && HasPostValue( 'Browser' )
                      && HasPostValue( 'Latitude' )
                      && HasPostValue( 'Longitude' )
                      && HasPostValue( 'CountryCode' )
                      && HasPostValue( 'DateTime' ) )
            {
                 $subscriber_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_edit_subscriber_controller.php';
            }
            else if ( $it_is_get_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $subscriber_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/remove_subscriber_controller.php';
            }
            else if ( $it_is_post_request
                      && $path_value_count === 4
                      && $path_value_array[ 2 ] === 'remove'
                      && IsId( $path_value_array[ 3 ] ) )
            {
                 $subscriber_id = $path_value_array[ 3 ];

                require_once __DIR__ . '/' . 'ADMINISTRATION/CONTROLLER/do_remove_subscriber_controller.php';
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
            else if ( $path_value_count === 2
                      && $path_value_array[ 0 ] === 'section'
                      && IsId( $path_value_array[ 1 ] ) )
            {
                 $section_id = $path_value_array[ 1 ];
                require_once __DIR__ . '/' . 'CONTROLLER/show_section_controller.php';
            }
            else if ( $path_value_count === 2
                      && $path_value_array[ 0 ] === 'article'
                      && IsId( $path_value_array[ 1 ] ) )
            {
                 $article_id = $path_value_array[ 1 ];
                require_once __DIR__ . '/' . 'CONTROLLER/show_article_controller.php';
            }
            else if ( $path_value_count === 1
                      && $path_value_array[ 0 ] === 'subscribers' )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/show_subscribers_controller.php';
            }
            else if ( $path_value_count == 0 )
            {
                 $section_id = 0;
                require_once __DIR__ . '/' . 'CONTROLLER/show_section_controller.php';
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
            else if ( $path_value_count === 2
                      && $path_value_array[ 0 ] === 'comment'
                      && IsId( $path_value_array[ 1 ] )
                      && IsSessionValue( "UserIsConnected", true ) )
            {
                 $article_id = $path_value_array[ 1 ];
                require_once __DIR__ . '/' . 'CONTROLLER/add_comment_controller.php';
            }
            else if ( $path_value_count === 1
                      && $path_value_array[ 0 ] === 'subscriber' )
            {
                require_once __DIR__ . '/' . 'CONTROLLER/add_subscriber_controller.php';
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
