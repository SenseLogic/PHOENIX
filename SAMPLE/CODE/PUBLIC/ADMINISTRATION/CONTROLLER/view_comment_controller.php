<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- TYPES

class VIEW_COMMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $comment_id
        )
    {
        parent::__construct();

        $this->Title = 'View a comment';
        $this->Comment = GetDatabaseCommentById( $comment_id );
        $this->PreviousPage = GetSessionValue( 'PreviousPage' );

        require_once __DIR__ . '/' . '../VIEW/view_comment_view.php';
    }
}

// -- STATEMENTS

 $view_comment_controller = new VIEW_COMMENT_CONTROLLER(  $comment_id );
