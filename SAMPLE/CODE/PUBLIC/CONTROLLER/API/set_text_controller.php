<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
SetDatabaseText(  $text_uuid, $input->Slug, $input->Text );

SetStatus( 200 );
