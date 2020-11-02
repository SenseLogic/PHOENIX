<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- TYPES

class DO_REMOVE_COMMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $comment_id
        )
    {
        parent::__construct();

        RemoveDatabaseCommentById( $comment_id );

        Redirect( '/admin/comment' );
    }
}

// -- STATEMENTS

 $do_remove_comment_controller = new DO_REMOVE_COMMENT_CONTROLLER(  $comment_id );
