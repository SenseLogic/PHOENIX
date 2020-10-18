<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
AddDatabaseText( $input->Id, $input->Slug, $input->Text );

SetStatus( 201 );
