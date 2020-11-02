<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- TYPES

class DO_EDIT_COMMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $comment_id
        )
    {
        parent::__construct();

         $article_id = GetPostValue( 'ArticleId' );
         $user_id = GetPostValue( 'UserId' );
         $text = GetPostValue( 'Text' );
         $date_time = GetPostValue( 'DateTime' );

        SetDatabaseComment( $comment_id, $article_id, $user_id, $text, $date_time );

        Redirect( '/admin/comment' );
    }
}

// -- STATEMENTS

 $do_edit_comment_controller = new DO_EDIT_COMMENT_CONTROLLER(  $comment_id );
