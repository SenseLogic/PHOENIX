<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- TYPES

class VIEW_COMMENTS_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'View comments';
        $this->CommentArray = GetDatabaseCommentArray();

        SetSessionValue( 'PreviousPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_comments_view.php';
    }
}

// -- STATEMENTS

 $view_comments_controller = new VIEW_COMMENTS_CONTROLLER();
