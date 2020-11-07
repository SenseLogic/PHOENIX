<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- STATEMENTS

 $contact = GetDatabaseContactByUuid(  $contact_uuid );

SetStatus( 200 );
SetJsonResponse( $contact );
