<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- TYPES

class ADD_SECTION_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Add a section';

        require_once __DIR__ . '/' . '../VIEW/add_section_view.php';
    }
}

// -- STATEMENTS

 $add_section_controller = new ADD_SECTION_CONTROLLER();
