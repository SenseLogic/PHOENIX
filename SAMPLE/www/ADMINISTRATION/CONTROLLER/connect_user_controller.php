<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';

// -- TYPES

class CONNECT_USER_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Sign In';

        require_once __DIR__ . '/' . '../VIEW/connect_user_view.php';
    }
}

// -- STATEMENTS

 $connect_user_controller = new CONNECT_USER_CONTROLLER();
