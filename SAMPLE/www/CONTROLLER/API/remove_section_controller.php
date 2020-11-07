<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/section_model.php';

// -- STATEMENTS

RemoveDatabaseSectionByUuid( section_uuid );

SetStatus( 204 );
