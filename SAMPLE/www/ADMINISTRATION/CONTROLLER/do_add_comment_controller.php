<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- TYPES

class DO_ADD_COMMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $article_id = GetPostValue( 'ArticleId' );
         $user_id = GetPostValue( 'UserId' );
         $text = GetPostValue( 'Text' );
         $date_time = GetPostValue( 'DateTime' );

        AddDatabaseComment( $article_id, $user_id, $text, $date_time );

        Redirect( '/admin/comment' );
    }
}

// -- STATEMENTS

 $do_add_comment_controller = new DO_ADD_COMMENT_CONTROLLER();
