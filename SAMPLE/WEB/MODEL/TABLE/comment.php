<?php // -- FUNCTIONS

function GetDatabaseCommentArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, ArticleId, UserId, Text, DateTime from COMMENT order by DateTime desc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseObjectArray( $statement );
}

// ~~

function GetDatabaseCommentById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select Id, ArticleId, UserId, Text, DateTime from COMMENT where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return $statement->fetchObject();
}

// ~~

function AddDatabaseComment(
    int $article_id,
    int $user_id,
    string $text
    )
{
     $statement = GetDatabaseStatement( 'insert into COMMENT ( ArticleId, UserId, Text, DateTime ) values ( ?, ?, ?, now() )' );
    $statement->bindParam( 1, $article_id, PDO::PARAM_INT );
    $statement->bindParam( 2, $user_id, PDO::PARAM_INT );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseComment(
    int $id,
    int $article_id,
    int $user_id,
    string $text,
    string $date_time
    )
{
     $statement = GetDatabaseStatement( 'update COMMENT set ArticleId = ?, UserId = ?, Text = ?, DateTime = ? where Id = ?' );
    $statement->bindParam( 1, $article_id, PDO::PARAM_INT );
    $statement->bindParam( 2, $user_id, PDO::PARAM_INT );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $date_time, PDO::PARAM_STR );
    $statement->bindParam( 5, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseCommentById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from COMMENT where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
