<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- STATEMENTS

 $section_array = GetDatabaseSectionArray();

SetStatus( 200 );
SetJsonResponse( $section_array );
