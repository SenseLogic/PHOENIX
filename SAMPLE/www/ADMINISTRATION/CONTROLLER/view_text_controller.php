<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class VIEW_TEXT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $text_id
        )
    {
        parent::__construct();

        $this->Title = 'View a text';
        $this->Text = GetDatabaseTextById( $text_id );
        $this->PreviousPage = GetSessionValue( 'PreviousPage' );

        require_once __DIR__ . '/' . '../VIEW/view_text_view.php';
    }
}

// -- STATEMENTS

 $view_text_controller = new VIEW_TEXT_CONTROLLER(  $text_id );
