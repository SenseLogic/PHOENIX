<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- STATEMENTS

RemoveDatabaseUserByUuid( user_uuid );

SetStatus( 204 );
