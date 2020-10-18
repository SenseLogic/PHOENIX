<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class DO_ADD_USER_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $email = GetPostValue( 'Email' );
         $password = GetPostValue( 'Password' );
         $is_administrator = GetPostValue( 'IsAdministrator' );

        AddDatabaseUser( $email, $password, $is_administrator );

        Redirect( '/admin/user' );
    }
}

// -- STATEMENTS

 $do_add_user_controller = new DO_ADD_USER_CONTROLLER();
