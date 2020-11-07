<?php // -- IMPORTS

require_once __DIR__ . '/' . 'comment.php';

// -- FUNCTIONS

function InflateDatabaseComment(
    $comment
    )
{
    $comment->Article = GetDatabaseArticleById( $comment->ArticleId );
    $comment->User = GetDatabaseUserById( $comment->UserId );
}

// ~~

function InflateDatabaseCommentArray(
    array $comment_array
    )
{
    foreach ( $comment_array as  $comment )
    {
        InflateDatabaseComment( $comment );
    }
}

// ~~

function GetDatabaseCommentArrayByArticleId(
    int $article_id
    )
{
     $statement = GetDatabaseStatement( 'select * from COMMENT where ArticleId = ? order by DateTime DESC' );
    $statement->bindParam( 1, $article_id, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseObjectArray( $statement );
}
