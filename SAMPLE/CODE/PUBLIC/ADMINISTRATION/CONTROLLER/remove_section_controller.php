<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- TYPES

class REMOVE_SECTION_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $section_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a section';
        $this->Section = GetDatabaseSectionById( $section_id );

        require_once __DIR__ . '/' . '../VIEW/remove_section_view.php';
    }
}

// -- STATEMENTS

 $remove_section_controller = new REMOVE_SECTION_CONTROLLER(  $section_id );
