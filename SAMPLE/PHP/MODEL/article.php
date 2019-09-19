<?php // -- FUNCTIONS

function InflateArticle(
    $article
    )
{
    $article->Section = GetSectionById( $article->SectionId );
    $article->User = GetUserById( $article->UserId );
}

// ~~

function InflateArticleArray(
    array $article_array
    )
{
    foreach ( $article_array as  $article )
    {
        InflateArticle( $article );
    }
}

// ~~

function GetArticleArray(
    )
{
     $statement = GetDatabaseStatement( 'select * from ARTICLE order by Date DESC' );
    $statement->execute();

    return GetDatabaseObjectArray( $statement );
}

// ~~

function GetArticleById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select * from ARTICLE where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseObject( $statement );
}

// ~~

function GetArticleArrayBySectionId(
    int $section_id
    )
{
     $statement = GetDatabaseStatement( 'select * from ARTICLE where SectionId = ? order by Date DESC' );
    $statement->bindParam( 1, $section_id, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseObjectArray( $statement );
}

// ~~

function ChangeArticle(
    int $id,
    string $title,
    string $text,
    string $image,
    string $date,
    int $section_id,
    int $user_id
    )
{
     $statement = GetDatabaseStatement( 'update ARTICLE set Id = ?, Title = ?, Text = ?, Image = ?, Date = ?, SectionId = ?, UserId = ? where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->bindParam( 2, $title, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->bindParam( 5, $date, PDO::PARAM_STR );
    $statement->bindParam( 6, $section_id, PDO::PARAM_INT );
    $statement->bindParam( 7, $user_id, PDO::PARAM_INT );
    $statement->bindParam( 8, $id, PDO::PARAM_INT );
    $statement->execute();
}

// ~~

function AddArticle(
    string $title,
    string $text,
    string $image,
    int $section_id,
    int $user_id
    )
{
     $statement = GetDatabaseStatement( 'insert into ARTICLE ( Title, text, Image, Date, SectionId, UserId ) values ( ?, ?, ?, NOW(), ?, ? )' );
    $statement->bindParam( 1, $title, PDO::PARAM_STR );
    $statement->bindParam( 2, $text, PDO::PARAM_STR );
    $statement->bindParam( 3, $image, PDO::PARAM_STR );
    $statement->bindParam( 4, $section_id, PDO::PARAM_INT );
    $statement->bindParam( 5, $user_id, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseAddedId( $statement );
}

// ~~

function RemoveArticle(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from ARTICLE where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();
}
