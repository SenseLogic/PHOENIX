<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';

// -- TYPES

class DISCONNECT_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->Session->UserIsConnected = false;
        $this->Session->Store();

        Redirect( $this->Session->Path );
    }
}

// -- STATEMENTS

 $disconnect_user_controller = new DISCONNECT_USER_CONTROLLER(  $language_code );
