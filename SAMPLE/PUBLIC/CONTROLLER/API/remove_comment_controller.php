<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- STATEMENTS

RemoveDatabaseCommentByUuid( comment_uuid );

SetStatus( 204 );
