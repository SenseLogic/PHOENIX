<?php // -- FUNCTIONS

function GetDatabaseSectionArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Number, Name, Text, Image from SECTION order by Number asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseObjectArray( $statement );
}

// ~~

function GetDatabaseSectionById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select Id, Number, Name, Text, Image from SECTION where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseObject( $statement );
}

// ~~

function AddDatabaseSection(
    int $number,
    string $name,
    string $text,
    string $image
    )
{
     $statement = GetDatabaseStatement( 'insert into SECTION ( Number, Name, Text, Image ) values ( ?, ?, ?, ? )' );
    $statement->bindParam( 1, $number, PDO::PARAM_INT );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseSection(
    int $id,
    int $number,
    string $name,
    string $text,
    string $image
    )
{
     $statement = GetDatabaseStatement( 'update SECTION set Number = ?, Name = ?, Text = ?, Image = ? where Id = ?' );
    $statement->bindParam( 1, $number, PDO::PARAM_INT );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->bindParam( 5, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseSectionById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from SECTION where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
