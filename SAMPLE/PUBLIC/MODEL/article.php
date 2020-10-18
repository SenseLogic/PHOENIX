<?php // -- FUNCTIONS

function GetDatabaseArticleArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, SectionId, UserId, Title, Text, Image, Date from ARTICLE order by Date desc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $article_array = [];

    while (  $article = $statement->fetchObject() )
    {
        $article->Id = ( int )( $article->Id );
        array_push( $article_array, $article );
    }

    return $article_array;
}

// ~~

function GetDatabaseArticleById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select Id, SectionId, UserId, Title, Text, Image, Date from ARTICLE where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $article = $statement->fetchObject();
    $article->Id = ( int )( $article->Id );

    return $article;
}

// ~~

function AddDatabaseArticle(
    int $section_id,
    int $user_id,
    string $title,
    string $text,
    string $image
    )
{
     $statement = GetDatabaseStatement( 'insert into ARTICLE ( SectionId, UserId, Title, Text, Image, Date ) values ( ?, ?, ?, ?, ?, date( now() ) )' );
    $statement->bindParam( 1, $section_id, PDO::PARAM_INT );
    $statement->bindParam( 2, $user_id, PDO::PARAM_INT );
    $statement->bindParam( 3, $title, PDO::PARAM_STR );
    $statement->bindParam( 4, $text, PDO::PARAM_STR );
    $statement->bindParam( 5, $image, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseArticle(
    int $id,
    int $section_id,
    int $user_id,
    string $title,
    string $text,
    string $image,
    string $date
    )
{
     $statement = GetDatabaseStatement( 'update ARTICLE set SectionId = ?, UserId = ?, Title = ?, Text = ?, Image = ?, Date = ? where Id = ?' );
    $statement->bindParam( 1, $section_id, PDO::PARAM_INT );
    $statement->bindParam( 2, $user_id, PDO::PARAM_INT );
    $statement->bindParam( 3, $title, PDO::PARAM_STR );
    $statement->bindParam( 4, $text, PDO::PARAM_STR );
    $statement->bindParam( 5, $image, PDO::PARAM_STR );
    $statement->bindParam( 6, $date, PDO::PARAM_STR );
    $statement->bindParam( 7, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseArticleById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from ARTICLE where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
