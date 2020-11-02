<?php // -- FUNCTIONS

function GetDatabaseTextArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Slug, Text from TEXT' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $text_array = [];

    while (  $text = $statement->fetchObject() )
    {
        $text->Id = ( int )( $text->Id );
        array_push( $text_array, $text );
    }

    return $text_array;
}

// ~~

function GetDatabaseTextById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select Id, Slug, Text from TEXT where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $text = $statement->fetchObject();
    $text->Id = ( int )( $text->Id );

    return $text;
}

// ~~

function AddDatabaseText(
    string $slug,
    string $text
    )
{
     $statement = GetDatabaseStatement( 'insert into TEXT ( Slug, Text ) values ( ?, ? )' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $text, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseText(
    int $id,
    string $slug,
    string $text
    )
{
     $statement = GetDatabaseStatement( 'update TEXT set Slug = ?, Text = ? where Id = ?' );
    $statement->bindParam( 1, $slug, PDO::PARAM_STR );
    $statement->bindParam( 2, $text, PDO::PARAM_STR );
    $statement->bindParam( 3, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseTextById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from TEXT where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
