<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
AddDatabaseSection( $input->Id, $input->Number, $input->Name, $input->Text, $input->Image );

SetStatus( 201 );
