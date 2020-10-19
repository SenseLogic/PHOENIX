<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
AddDatabaseUser( $input->Id, $input->Email, $input->Pseudonym, $input->Password, $input->IsAdministrator );

SetStatus( 201 );
