<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class EDIT_CONTACT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $contact_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a contact';
        $this->Contact = GetDatabaseContactById( $contact_id );

        require_once __DIR__ . '/' . '../VIEW/edit_contact_view.php';
    }
}

// -- STATEMENTS

 $edit_contact_controller = new EDIT_CONTACT_CONTROLLER(  $contact_id );
