<?php function InflateArticle(
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
     $statement = GetStatement( 'select * from ARTICLE order by date DESC' );
    $statement->execute();

    return GetObjectArray( $statement );
}

// ~~

function GetArticleById(
    int $id
    )
{
     $statement = GetStatement( 'select * from ARTICLE where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();

    return GetObject( $statement );
}

// ~~

function GetArticleArrayBySectionId(
    int $section_id
    )
{
     $statement = GetStatement( 'select * from ARTICLE where SectionId = ? order by date DESC' );
    $statement->bindParam( 1, $section_id, PDO::PARAM_INT );
    $statement->execute();

    return GetObjectArray( $statement );
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
     $statement = GetStatement( 'update ARTICLE set Id = ?, Title = ?, Text = ?, Image = ?, Date = ?, SectionId = ?, UserId = ? where Id = ?' );
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
     $statement = GetStatement( 'insert into ARTICLE ( Title, text, Image, Date, SectionId, UserId ) values ( ?, ?, ?, NOW(), ?, ? )' );
    $statement->bindParam( 1, $title, PDO::PARAM_STR );
    $statement->bindParam( 2, $text, PDO::PARAM_STR );
    $statement->bindParam( 3, $image, PDO::PARAM_STR );
    $statement->bindParam( 4, $section_id, PDO::PARAM_INT );
    $statement->bindParam( 5, $user_id, PDO::PARAM_INT );
    $statement->execute();

    return GetAddedId( $statement );
}

// ~~

function RemoveArticle(
    int $id
    )
{
     $statement = GetStatement( 'delete from ARTICLE where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();
}
