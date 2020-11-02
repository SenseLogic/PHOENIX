<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class DO_CONNECT_USER_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $pseudonym = GetPostValue( 'Pseudonym' );
         $password = GetPostValue( 'Password' );
         $user = GetDatabaseUserByPseudonymAndPassword( $pseudonym, $password );

        if ( $user === null )
        {
            $this->Title = 'LOG IN';

            require_once __DIR__ . '/' . '../VIEW/connect_user_view.php';
        }
        else
        {
            $this->Session->UserIsConnected = true;
            $this->Session->Store();

            Redirect( '/admin/text' );
        }
    }
}

// -- STATEMENTS

 $do_connect_user_controller = new DO_CONNECT_USER_CONTROLLER();
