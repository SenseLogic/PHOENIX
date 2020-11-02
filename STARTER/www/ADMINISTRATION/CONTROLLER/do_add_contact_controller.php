<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- TYPES

class DO_ADD_CONTACT_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $name = GetPostValue( 'Name' );
         $email = GetPostValue( 'Email' );
         $message = GetPostValue( 'Message' );
         $date_time = GetPostValue( 'DateTime' );

        AddDatabaseContact( $name, $email, $message, $date_time );

        Redirect( '/admin/contact' );
    }
}

// -- STATEMENTS

 $do_add_contact_controller = new DO_ADD_CONTACT_CONTROLLER();
