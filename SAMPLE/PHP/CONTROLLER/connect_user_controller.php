<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/session.php';
require_once __DIR__ . '/' . '../MODEL/user.php';

// -- TYPES

class CONNECT_USER_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $user = GetUserByPseudonymAndPassword( GetPostValue( 'pseudonym' ), GetPostValue( 'password' ) );

        if ( is_null( $user ) )
        {
            $this->Session->Message = 'Invalid pseudonym or password.';
        }
        else
        {
            $this->Session->User = $user;
            $this->Session->UserIsConnected = true;
        }

        $this->Session->Store();

        Redirect( $this->Session->Path );
    }
}

// -- STATEMENTS

 $connect_user_controller = new CONNECT_USER_CONTROLLER();
