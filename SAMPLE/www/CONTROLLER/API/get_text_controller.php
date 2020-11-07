<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- STATEMENTS

 $text = GetDatabaseTextByUuid(  $text_uuid );

SetStatus( 200 );
SetJsonResponse( $text );
