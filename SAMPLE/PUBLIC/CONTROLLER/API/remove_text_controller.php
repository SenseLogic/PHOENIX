<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- STATEMENTS

RemoveDatabaseTextByUuid( text_uuid );

SetStatus( 204 );
