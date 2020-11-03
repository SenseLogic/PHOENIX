<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- TYPES

class VIEW_SECTIONS_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'View sections';
        $this->SectionArray = GetDatabaseSectionArray();

        SetSessionValue( 'PreviousPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_sections_view.php';
    }
}

// -- STATEMENTS

 $view_sections_controller = new VIEW_SECTIONS_CONTROLLER();
