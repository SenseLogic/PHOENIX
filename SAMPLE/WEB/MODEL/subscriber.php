<?php // -- FUNCTIONS

function GetDatabaseSubscriberArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Email from SUBSCRIBER order by Email asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseObjectArray( $statement );
}

// ~~

function GetDatabaseSubscriberById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select Id, Email from SUBSCRIBER where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseObject( $statement );
}

// ~~

function AddDatabaseSubscriber(
    string $email
    )
{
     $statement = GetDatabaseStatement( 'insert into SUBSCRIBER ( Email ) values ( ? )' );
    $statement->bindParam( 1, $email, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseSubscriber(
    int $id,
    string $email
    )
{
     $statement = GetDatabaseStatement( 'update SUBSCRIBER set Email = ? where Id = ?' );
    $statement->bindParam( 1, $email, PDO::PARAM_STR );
    $statement->bindParam( 2, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseSubscriberById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from SUBSCRIBER where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
