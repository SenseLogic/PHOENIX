<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- TYPES

class REMOVE_COMMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $comment_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a comment';
        $this->Comment = GetDatabaseCommentById( $comment_id );

        require_once __DIR__ . '/' . '../VIEW/remove_comment_view.php';
    }
}

// -- STATEMENTS

 $remove_comment_controller = new REMOVE_COMMENT_CONTROLLER(  $comment_id );
