<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- TYPES

class EDIT_SECTION_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $section_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a section';
        $this->Section = GetDatabaseSectionById( $section_id );

        require_once __DIR__ . '/' . '../VIEW/edit_section_view.php';
    }
}

// -- STATEMENTS

 $edit_section_controller = new EDIT_SECTION_CONTROLLER(  $section_id );
