<?php // -- FUNCTIONS

function GetDatabaseSubscriberArray(
    )
{
     $statement = GetDatabaseStatement( 'select Id, Email, IpAddress, Browser, Latitude, Longitude, CountryCode, DateTime from SUBSCRIBER order by DateTime desc' );

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
     $statement = GetDatabaseStatement( 'select Id, Email, IpAddress, Browser, Latitude, Longitude, CountryCode, DateTime from SUBSCRIBER where Id = ? limit 1' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return $statement->fetchObject();
}

// ~~

function AddDatabaseSubscriber(
    string $email,
    string $ip_address,
    string $browser,
    float $latitude,
    float $longitude,
    string $country_code
    )
{
     $statement = GetDatabaseStatement( 'insert into SUBSCRIBER ( Email, IpAddress, Browser, Latitude, Longitude, CountryCode, DateTime ) values ( ?, ?, ?, ?, ?, ?, now() )' );
    $statement->bindParam( 1, $email, PDO::PARAM_STR );
    $statement->bindParam( 2, $ip_address, PDO::PARAM_STR );
    $statement->bindParam( 3, $browser, PDO::PARAM_STR );
    $statement->bindParam( 4, $latitude, PDO::PARAM_STR );
    $statement->bindParam( 5, $longitude, PDO::PARAM_STR );
    $statement->bindParam( 6, $country_code, PDO::PARAM_STR );

    if ( !$statement->execute() )
    {
        var_dump( $statement->errorInfo() );
    }

    return GetDatabaseAddedId( $statement );
}

// ~~

function SetDatabaseSubscriber(
    int $id,
    string $email,
    string $ip_address,
    string $browser,
    float $latitude,
    float $longitude,
    string $country_code,
    string $date_time
    )
{
     $statement = GetDatabaseStatement( 'update SUBSCRIBER set Email = ?, IpAddress = ?, Browser = ?, Latitude = ?, Longitude = ?, CountryCode = ?, DateTime = ? where Id = ?' );
    $statement->bindParam( 1, $email, PDO::PARAM_STR );
    $statement->bindParam( 2, $ip_address, PDO::PARAM_STR );
    $statement->bindParam( 3, $browser, PDO::PARAM_STR );
    $statement->bindParam( 4, $latitude, PDO::PARAM_STR );
    $statement->bindParam( 5, $longitude, PDO::PARAM_STR );
    $statement->bindParam( 6, $country_code, PDO::PARAM_STR );
    $statement->bindParam( 7, $date_time, PDO::PARAM_STR );
    $statement->bindParam( 8, $id, PDO::PARAM_INT );

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
