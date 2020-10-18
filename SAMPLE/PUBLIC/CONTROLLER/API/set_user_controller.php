<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
SetDatabaseUser(  $user_uuid, $input->Email, $input->Password, $input->IsAdministrator );

SetStatus( 200 );
