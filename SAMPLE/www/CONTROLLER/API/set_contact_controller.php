<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
SetDatabaseContact(  $contact_uuid, $input->Name, $input->Email, $input->Message, $input->DateTime );

SetStatus( 200 );
