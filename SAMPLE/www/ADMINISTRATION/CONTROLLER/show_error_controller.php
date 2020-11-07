<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';

// -- STATEMENTS

class SHOW_ERROR_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        require_once __DIR__ . '/' . '../VIEW/show_error_view.php';
    }
}

// -- STATEMENTS

 $show_error_controller = new SHOW_ERROR_CONTROLLER();
