<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- TYPES

class DO_REMOVE_SECTION_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $section_id
        )
    {
        parent::__construct();

        RemoveDatabaseSectionById( $section_id );

        Redirect( '/admin/section' );
    }
}

// -- STATEMENTS

 $do_remove_section_controller = new DO_REMOVE_SECTION_CONTROLLER(  $section_id );
