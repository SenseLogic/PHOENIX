<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- TYPES

class DO_ADD_SECTION_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $number = GetPostValue( 'Number' );
         $name = GetPostValue( 'Name' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );

        AddDatabaseSection( $number, $name, $text, $image );

        Redirect( '/admin/section' );
    }
}

// -- STATEMENTS

 $do_add_section_controller = new DO_ADD_SECTION_CONTROLLER();
