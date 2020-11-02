<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/comment_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
AddDatabaseComment( $input->Id, $input->ArticleId, $input->UserId, $input->Text, $input->DateTime );

SetStatus( 201 );
