<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- STATEMENTS

RemoveDatabaseArticleByUuid( article_uuid );

SetStatus( 204 );
