<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/contact_model.php';

// -- STATEMENTS

RemoveDatabaseContactByUuid( contact_uuid );

SetStatus( 204 );
