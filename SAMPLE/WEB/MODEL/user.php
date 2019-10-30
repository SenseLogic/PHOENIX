<?php // -- FUNCTIONS

function GetUserArray(
    )
{
     $statement = GetDatabaseStatement( 'select * from USER order by Email asc' );
    $statement->execute();

    return GetDatabaseObjectArray( $statement );
}

// ~~

function GetUserById(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'select * from USER where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseObject( $statement );
}

// ~~

function GetUserByPseudonymAndPassword(
    string $pseudonym,
    string $password
    )
{
     $statement = GetDatabaseStatement( 'select * from USER where Pseudonym = ? and Password = ?' );
    $statement->bindParam( 1, $pseudonym, PDO::PARAM_STR );
    $statement->bindParam( 2, $password, PDO::PARAM_STR );
    $statement->execute();

    if ( $statement->rowCount() == 0 )
    {
        return null;
    }
    else
    {
        return GetDatabaseObject( $statement );
    }
}

// ~~

function ChangeUser(
    int $id,
    string $email,
    string $pseudonym,
    string $password,
    int $it_is_administrator
    )
{
     $statement = GetDatabaseStatement( 'update USER set Id = ?, Email = ?, Pseudonym = ?, Password = ?, ItIsAdministrator = ? where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->bindParam( 2, $email, PDO::PARAM_STR );
    $statement->bindParam( 3, $pseudonym, PDO::PARAM_STR );
    $statement->bindParam( 4, $password, PDO::PARAM_STR );
    $statement->bindParam( 5, $it_is_administrator, PDO::PARAM_INT );
    $statement->bindParam( 6, $id, PDO::PARAM_INT );
    $statement->execute();
}

// ~~

function AddUser(
    string $email,
    string $pseudonym,
    string $password,
    int $it_is_administrator
    )
{
     $statement = GetDatabaseStatement( 'insert into USER ( Email, Pseudonym, Password, ItIsAdministrator ) values ( ?, ?, ?, ? )' );
    $statement->bindParam( 1, $email, PDO::PARAM_STR );
    $statement->bindParam( 2, $pseudonym, PDO::PARAM_STR );
    $statement->bindParam( 3, $password, PDO::PARAM_STR );
    $statement->bindParam( 4, $it_is_administrator, PDO::PARAM_INT );
    $statement->execute();

    return GetDatabaseAddedId( $statement );
}

// ~~

function RemoveUser(
    int $id
    )
{
     $statement = GetDatabaseStatement( 'delete from USER where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();
}
