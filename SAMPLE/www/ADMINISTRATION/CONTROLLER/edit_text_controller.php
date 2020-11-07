<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class EDIT_TEXT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $text_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a text';
        $this->Text = GetDatabaseTextById( $text_id );

        require_once __DIR__ . '/' . '../VIEW/edit_text_view.php';
    }
}

// -- STATEMENTS

 $edit_text_controller = new EDIT_TEXT_CONTROLLER(  $text_id );
