<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- TYPES

class DO_EDIT_SECTION_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $section_id
        )
    {
        parent::__construct();

         $number = GetPostValue( 'Number' );
         $name = GetPostValue( 'Name' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );

        SetDatabaseSection( $section_id, $number, $name, $text, $image );

        Redirect( '/admin/section' );
    }
}

// -- STATEMENTS

 $do_edit_section_controller = new DO_EDIT_SECTION_CONTROLLER(  $section_id );
