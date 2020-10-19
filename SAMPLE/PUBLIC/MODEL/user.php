<?php // -- FUNCTIONS

function GetDatabaseUserArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Email, Pseudonym, Password, IsAdministrator from USER order by Id asc' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $user_array = [];

    while (  $user = $statement->fetchObject() )
    {
        $user->Id = ( int )( $user->Id );
        array_push( $user_array, $user );
    }

    return $user_array;
}

// ~~

function GetDatabaseUserByIdMap(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Email, Pseudonym, Password, IsAdministrator from USER' );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $user_map = [];

    while (  $user = $statement->fetchObject() )
    {
        $user->Id = ( int )( $user->Id );
        $user_map[ $user->Id ] = $user;
    }

    return $user_map;
}

// ~~

function GetDatabaseUserById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select Id, Email, Pseudonym, Password, IsAdministrator from USER where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

     $user = $statement->fetchObject();
    $user->Id = ( int )( $user->Id );

    return $user;
}

// ~~

function AddDatabaseUser(
    string $email,
    string $pseudonym,
    string $password,
    bool $is_administrator
    )
{
     $statement = GetDatabaseStatement( 'insert into USER ( Email, Pseudonym, Password, IsAdministrator ) values ( ?, ?, ?, ? )' );
    $statement->bindParam( 1, $email, PDO::PARAM_STR );
    $statement->bindParam( 2, $pseudonym, PDO::PARAM_STR );
    $statement->bindParam( 3, $password, PDO::PARAM_STR );
    $statement->bindParam( 4, $is_administrator, PDO::PARAM_BOOL );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseUser(
    int $id,
    string $email,
    string $pseudonym,
    string $password,
    bool $is_administrator
    )
{
     $statement = GetDatabaseStatement( 'update USER set Email = ?, Pseudonym = ?, Password = ?, IsAdministrator = ? where Id = ?' );
    $statement->bindParam( 1, $email, PDO::PARAM_STR );
    $statement->bindParam( 2, $pseudonym, PDO::PARAM_STR );
    $statement->bindParam( 3, $password, PDO::PARAM_STR );
    $statement->bindParam( 4, $is_administrator, PDO::PARAM_BOOL );
    $statement->bindParam( 5, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}

// ~~

function RemoveDatabaseUserById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from USER where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }
}
