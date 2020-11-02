<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
AddDatabaseContact( $input->Id, $input->Name, $input->Email, $input->Message, $input->DateTime );

SetStatus( 201 );
