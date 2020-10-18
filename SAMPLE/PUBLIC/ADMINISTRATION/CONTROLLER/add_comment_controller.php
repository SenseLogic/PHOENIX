<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- TYPES

class ADD_COMMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Add a comment';

        require_once __DIR__ . '/' . '../VIEW/add_comment_view.php';
    }
}

// -- STATEMENTS

 $add_comment_controller = new ADD_COMMENT_CONTROLLER();
