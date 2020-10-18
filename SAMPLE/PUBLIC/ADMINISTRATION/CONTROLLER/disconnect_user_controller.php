<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';

// -- TYPES

class DISCONNECT_USER_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Session->UserIsConnected = false;
        $this->Session->Store();

        Redirect( '/admin' );
    }
}

// -- STATEMENTS

 $disconnect_user_controller = new DISCONNECT_USER_CONTROLLER();
