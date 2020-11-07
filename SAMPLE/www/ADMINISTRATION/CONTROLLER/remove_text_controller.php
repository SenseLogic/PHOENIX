<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class REMOVE_TEXT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $text_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a text';
        $this->Text = GetDatabaseTextById( $text_id );

        require_once __DIR__ . '/' . '../VIEW/remove_text_view.php';
    }
}

// -- STATEMENTS

 $remove_text_controller = new REMOVE_TEXT_CONTROLLER(  $text_id );
