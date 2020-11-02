<?php // -- FUNCTIONS

function GetDatabaseContactArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Name, Email, Message, DateTime from CONTACT order by DateTime desc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $contact_array = [];

    while (  $contact = $statement->fetchObject() )
    {
        $contact->Id = ( int )( $contact->Id );
        array_push( $contact_array, $contact );
    }

    return $contact_array;
}

// ~~

function GetDatabaseContactById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select Id, Name, Email, Message, DateTime from CONTACT where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $contact = $statement->fetchObject();
    $contact->Id = ( int )( $contact->Id );

    return $contact;
}

// ~~

function AddDatabaseContact(
    string $name,
    string $email,
    string $message
    )
{
     $statement = GetDatabaseStatement( 'insert into CONTACT ( Name, Email, Message, DateTime ) values ( ?, ?, ?, now() )' );
    $statement->bindParam( 1, $name, PDO::PARAM_STR );
    $statement->bindParam( 2, $email, PDO::PARAM_STR );
    $statement->bindParam( 3, $message, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseContact(
    int $id,
    string $name,
    string $email,
    string $message,
    string $date_time
    )
{
     $statement = GetDatabaseStatement( 'update CONTACT set Name = ?, Email = ?, Message = ?, DateTime = ? where Id = ?' );
    $statement->bindParam( 1, $name, PDO::PARAM_STR );
    $statement->bindParam( 2, $email, PDO::PARAM_STR );
    $statement->bindParam( 3, $message, PDO::PARAM_STR );
    $statement->bindParam( 4, $date_time, PDO::PARAM_STR );
    $statement->bindParam( 5, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseContactById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from CONTACT where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
