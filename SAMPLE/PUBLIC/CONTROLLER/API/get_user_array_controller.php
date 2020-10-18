<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/user_model.php';

// -- STATEMENTS

 $user_array = GetDatabaseUserArray();

SetStatus( 200 );
SetJsonResponse( $user_array );
