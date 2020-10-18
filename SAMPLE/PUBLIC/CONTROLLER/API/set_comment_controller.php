<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
SetDatabaseComment(  $comment_uuid, $input->ArticleId, $input->UserId, $input->Text, $input->DateTime );

SetStatus( 200 );
