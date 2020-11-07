<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- STATEMENTS

 $contact_array = GetDatabaseContactArray();

SetStatus( 200 );
SetJsonResponse( $contact_array );
