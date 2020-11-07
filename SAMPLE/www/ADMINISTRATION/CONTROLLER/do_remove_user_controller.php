<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class DO_REMOVE_USER_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $user_id
        )
    {
        parent::__construct();

        RemoveDatabaseUserById( $user_id );

        Redirect( '/admin/user' );
    }
}

// -- STATEMENTS

 $do_remove_user_controller = new DO_REMOVE_USER_CONTROLLER(  $user_id );
