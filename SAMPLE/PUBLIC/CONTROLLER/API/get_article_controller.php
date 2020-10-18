<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- STATEMENTS

 $article = GetDatabaseArticleByUuid(  $article_uuid );

SetStatus( 200 );
SetJsonResponse( $article );
