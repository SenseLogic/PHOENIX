<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- STATEMENTS

 $user = GetDatabaseUserByUuid(  $user_uuid );

SetStatus( 200 );
SetJsonResponse( $user );
