<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- TYPES

class DO_ADD_TEXT_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $slug = GetPostValue( 'Slug' );
         $text = GetPostValue( 'Text' );

        AddDatabaseText( $slug, $text );

        Redirect( '/admin/text' );
    }
}

// -- STATEMENTS

 $do_add_text_controller = new DO_ADD_TEXT_CONTROLLER();
