<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- TYPES

class EDIT_COMMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $comment_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a comment';
        $this->Comment = GetDatabaseCommentById( $comment_id );

        require_once __DIR__ . '/' . '../VIEW/edit_comment_view.php';
    }
}

// -- STATEMENTS

 $edit_comment_controller = new EDIT_COMMENT_CONTROLLER(  $comment_id );
