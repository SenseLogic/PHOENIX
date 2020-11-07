<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- STATEMENTS

 $comment = GetDatabaseCommentByUuid(  $comment_uuid );

SetStatus( 200 );
SetJsonResponse( $comment );
