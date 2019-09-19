<?php // -- FUNCTIONS

function GetSubscriberArray(
    )
{
     $statement = GetDatabaseStatement( 'select * from SUBSCRIBER order by Email asc' );
    $statement->execute();

    return GetDatabaseObjectArray( $statement );
}

// ~~

function GetSubscriberById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select * from SUBSCRIBER where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseObject( $statement );
}

// ~~

function ChangeSubscriber(
    int $id,
    string $email
    )
{
     $statement = GetDatabaseStatement( 'update SUBSCRIBER set Id = ?, Email = ? where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->bindParam( 2, $email, PDO::PARAM_STR );
    $statement->bindParam( 3, $id, PDO::PARAM_INT );
    $statement->execute();
}

// ~~

function AddSubscriber(
    string $email
    )
{
     $statement = GetDatabaseStatement( 'insert into SUBSCRIBER ( Email ) values ( ? )' );
    $statement->bindParam( 1, $email, PDO::PARAM_STR );
    $statement->execute();

    return GetDatabaseAddedId( $statement );
}


// ~~

function RemoveSubscriber(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from SUBSCRIBER where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();
}
