<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
AddDatabaseArticle( $input->Id, $input->SectionId, $input->UserId, $input->Title, $input->Text, $input->Image, $input->Date );

SetStatus( 201 );
