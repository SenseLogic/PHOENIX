<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class REMOVE_CONTACT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $contact_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a contact';
        $this->Contact = GetDatabaseContactById( $contact_id );

        require_once __DIR__ . '/' . '../VIEW/remove_contact_view.php';
    }
}

// -- STATEMENTS

 $remove_contact_controller = new REMOVE_CONTACT_CONTROLLER(  $contact_id );
