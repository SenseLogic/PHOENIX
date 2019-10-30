<?php // -- FUNCTIONS

function InflateComment(
    $comment
    )
{
    $comment->Article = GetArticleById( $comment->ArticleId );
    $comment->User = GetUserById( $comment->UserId );
}

// ~~

function InflateCommentArray(
    array $comment_array
    )
{
    foreach ( $comment_array as  $comment )
    {
        InflateComment( $comment );
    }
}

// ~~

function GetCommentArray(
    )
{
     $statement = GetDatabaseStatement( 'select * from COMMENT order by DateTime DESC' );
    $statement->execute();

    return GetDatabaseObjectArray( $statement );
}

// ~~

function GetCommentById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select * from COMMENT where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseObject( $statement );
}

// ~~

function GetCommentArrayByArticleId(
    int $article_id
    )
{
     $statement = GetDatabaseStatement( 'select * from COMMENT where ArticleId = ? order by DateTime DESC' );
    $statement->bindParam( 1, $article_id, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseObjectArray( $statement );
}

// ~~

function ChangeComment(
    int $id,
    string $text,
    string $date_time,
    int $article_id,
    int $user_id
    )
{
     $statement = GetDatabaseStatement( 'update COMMENT set Id = ?, Text = ?, DateTime = ?, ArticleId = ?, UserId = ? where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->bindParam( 2, $text, PDO::PARAM_STR );
    $statement->bindParam( 3, $date_time, PDO::PARAM_STR );
    $statement->bindParam( 4, $article_id, PDO::PARAM_INT );
    $statement->bindParam( 5, $user_id, PDO::PARAM_INT );
    $statement->bindParam( 6, $id, PDO::PARAM_INT );
    $statement->execute();
}

// ~~

function AddComment(
    string $text,
    int $article_id,
    int $user_id
    )
{
     $statement = GetDatabaseStatement( 'insert into COMMENT ( Text, DateTime, ArticleId, UserId ) values ( ?, NOW(), ?, ? )' );
    $statement->bindParam( 1, $text, PDO::PARAM_STR );
    $statement->bindParam( 2, $article_id, PDO::PARAM_INT );
    $statement->bindParam( 3, $user_id, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseAddedId( $statement );
}

// ~~

function RemoveComment(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from COMMENT where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();
}
