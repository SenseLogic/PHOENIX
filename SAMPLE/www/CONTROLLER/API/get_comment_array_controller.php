<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- STATEMENTS

 $comment_array = GetDatabaseCommentArray();

SetStatus( 200 );
SetJsonResponse( $comment_array );
