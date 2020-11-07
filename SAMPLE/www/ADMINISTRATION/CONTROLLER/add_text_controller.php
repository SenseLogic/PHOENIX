<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class ADD_TEXT_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Add a text';

        require_once __DIR__ . '/' . '../VIEW/add_text_view.php';
    }
}

// -- STATEMENTS

 $add_text_controller = new ADD_TEXT_CONTROLLER();
