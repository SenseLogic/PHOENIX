<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/session.php';

// -- TYPES

class DISCONNECT_USER_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Session->UserIsConnected = false;
        $this->Session->Store();

        Redirect( $this->Session->Path );
    }
}

// -- STATEMENTS

 $disconnect_user_controller = new DISCONNECT_USER_CONTROLLER();
