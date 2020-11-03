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

         $name = GetPostValue( 'Name' );
         $slug = GetPostValue( 'Slug' );

        AddDatabaseSection( $name, $slug );

        Redirect( '/admin/section' );
    }
}

// -- STATEMENTS

 $do_add_section_controller = new DO_ADD_SECTION_CONTROLLER();
