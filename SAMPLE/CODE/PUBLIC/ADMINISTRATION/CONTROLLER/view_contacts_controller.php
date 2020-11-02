<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class VIEW_CONTACTS_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'View contacts';
        $this->ContactArray = GetDatabaseContactArray();

        SetSessionValue( 'PreviousPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_contacts_view.php';
    }
}

// -- STATEMENTS

 $view_contacts_controller = new VIEW_CONTACTS_CONTROLLER();
