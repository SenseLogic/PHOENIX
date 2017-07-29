<?php function GetSubscriberArray(
    )
{
     $statement = GetStatement( 'select * from SUBSCRIBER order by Email asc' );
    $statement->execute();

    return GetObjectArray( $statement );
}

// ~~

function GetSubscriberById(
    int $id
    )
{
     $statement = GetStatement( 'select * from SUBSCRIBER where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();

    return GetObject( $statement );
}

// ~~

function ChangeSubscriber(
    int $id,
    string $email
    )
{
     $statement = GetStatement( 'update SUBSCRIBER set Id = ?, Email = ? where Id = ?' );
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
     $statement = GetStatement( 'insert into SUBSCRIBER ( Email ) values ( ? )' );
    $statement->bindParam( 1, $email, PDO::PARAM_STR );
    $statement->execute();

    return GetAddedId( $statement );
}


// ~~

function RemoveSubscriber(
    int $id
    )
{
     $statement = GetStatement( 'delete from SUBSCRIBER where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();
}
