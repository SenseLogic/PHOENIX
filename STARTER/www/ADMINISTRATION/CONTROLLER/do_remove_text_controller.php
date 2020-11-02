<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class DO_REMOVE_TEXT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $text_id
        )
    {
        parent::__construct();

        RemoveDatabaseTextById( $text_id );

        Redirect( '/admin/text' );
    }
}

// -- STATEMENTS

 $do_remove_text_controller = new DO_REMOVE_TEXT_CONTROLLER(  $text_id );
