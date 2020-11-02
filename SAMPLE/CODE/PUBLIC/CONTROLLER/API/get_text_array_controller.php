<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/text_model.php';

// -- STATEMENTS

 $text_array = GetDatabaseTextArray();

SetStatus( 200 );
SetJsonResponse( $text_array );
