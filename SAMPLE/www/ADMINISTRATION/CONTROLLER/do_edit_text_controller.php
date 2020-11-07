<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class DO_EDIT_TEXT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $text_id
        )
    {
        parent::__construct();

         $slug = GetPostValue( 'Slug' );
         $text = GetPostValue( 'Text' );

        SetDatabaseText( $text_id, $slug, $text );

        Redirect( '/admin/text' );
    }
}

// -- STATEMENTS

 $do_edit_text_controller = new DO_EDIT_TEXT_CONTROLLER(  $text_id );
