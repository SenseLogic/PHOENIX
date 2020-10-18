<?php // -- IMPORTS

require_once __DIR__ . '/' . 'article.php';

// -- FUNCTIONS

function InflateDatabaseArticle(
    $article
    )
{
    $article->Section = GetDatabaseSectionById( $article->SectionId );
    $article->User = GetDatabaseUserById( $article->UserId );
}

// ~~

function InflateDatabaseArticleArray(
    array $article_array
    )
{
    foreach ( $article_array as  $article )
    {
        InflateDatabaseArticle( $article );
    }
}

// ~~

function GetDatabaseArticleArrayBySectionId(
    int $section_id
    )
{
     $statement = GetDatabaseStatement( 'select * from ARTICLE where SectionId = ? order by Date DESC' );
    $statement->bindParam( 1, $section_id, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseObjectArray( $statement );
}
