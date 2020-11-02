<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- STATEMENTS

 $section = GetDatabaseSectionByUuid(  $section_uuid );

SetStatus( 200 );
SetJsonResponse( $section );
