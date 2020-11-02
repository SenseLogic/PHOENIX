<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- STATEMENTS

 $article_array = GetDatabaseArticleArray();

SetStatus( 200 );
SetJsonResponse( $article_array );
