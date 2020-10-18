<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
SetDatabaseArticle(  $article_uuid, $input->SectionId, $input->UserId, $input->Title, $input->Text, $input->Image, $input->Date );

SetStatus( 200 );
