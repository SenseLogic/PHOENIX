<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/user_model.php';

// -- TYPES

class CONNECT_USER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

         $user = GetDatabaseUserByPseudonymAndPassword( GetPostValue( 'Pseudonym' ), GetPostValue( 'Password' ) );

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

 $connect_user_controller = new CONNECT_USER_CONTROLLER(  $language_code );
