<?php function InflateComment(
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
     $statement = GetStatement( 'select * from COMMENT order by DateTime DESC' );
    $statement->execute();

    return GetObjectArray( $statement );
}

// ~~

function GetCommentById(
    int $id
    )
{
     $statement = GetStatement( 'select * from COMMENT where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();

    return GetObject( $statement );
}

// ~~

function GetCommentArrayByArticleId(
    int $article_id
    )
{
     $statement = GetStatement( 'select * from COMMENT where ArticleId = ? order by DateTime DESC' );
    $statement->bindParam( 1, $article_id, PDO::PARAM_INT );
    $statement->execute();

    return GetObjectArray( $statement );
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
     $statement = GetStatement( 'update COMMENT set Id = ?, Text = ?, DateTime = ?, ArticleId = ?, UserId = ? where Id = ?' );
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
     $statement = GetStatement( 'insert into COMMENT ( Text, DateTime, ArticleId, UserId ) values ( ?, NOW(), ?, ? )' );
    $statement->bindParam( 1, $text, PDO::PARAM_STR );
    $statement->bindParam( 2, $article_id, PDO::PARAM_INT );
    $statement->bindParam( 3, $user_id, PDO::PARAM_INT );
    $statement->execute();

    return GetAddedId( $statement );
}

// ~~

function RemoveComment(
    int $id
    )
{
     $statement = GetStatement( 'delete from COMMENT where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();
}
