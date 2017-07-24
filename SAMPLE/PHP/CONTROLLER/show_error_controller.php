<?php require_once __DIR__ . '/' . 'controller.php';

// ~~

class SHOW_ERROR_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        Route( "" );
    }
}

// ~~

 $show_error_controller = new SHOW_ERROR_CONTROLLER();
