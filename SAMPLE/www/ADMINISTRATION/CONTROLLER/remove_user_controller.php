<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class REMOVE_USER_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $user_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a user';
        $this->User = GetDatabaseUserById( $user_id );

        require_once __DIR__ . '/' . '../VIEW/remove_user_view.php';
    }
}

// -- STATEMENTS

 $remove_user_controller = new REMOVE_USER_CONTROLLER(  $user_id );
