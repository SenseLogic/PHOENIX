<?php // -- IMPORTS

require_once __DIR__ . '/' . 'user.php';

// -- FUNCTIONS

function GetDatabaseUserByEmailAndPassword(
    string $email,
    string $password
    )
{
     $statement = GetDatabaseStatement( 'select * from USER where Email = ? and Password = ?' );
    $statement->bindParam( 1, $email, PDO::PARAM_STR );
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
