<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- TYPES

class VIEW_USERS_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'View users';
        $this->UserArray = GetDatabaseUserArray();

        SetSessionValue( 'PreviousPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_users_view.php';
    }
}

// -- STATEMENTS

 $view_users_controller = new VIEW_USERS_CONTROLLER();
