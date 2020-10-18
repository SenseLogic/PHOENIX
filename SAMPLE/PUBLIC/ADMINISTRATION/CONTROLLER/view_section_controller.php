<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- TYPES

class VIEW_SECTION_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $section_id
        )
    {
        parent::__construct();

        $this->Title = 'View a section';
        $this->Section = GetDatabaseSectionById( $section_id );
        $this->PreviousPage = GetSessionValue( 'PreviousPage' );

        require_once __DIR__ . '/' . '../VIEW/view_section_view.php';
    }
}

// -- STATEMENTS

 $view_section_controller = new VIEW_SECTION_CONTROLLER(  $section_id );
