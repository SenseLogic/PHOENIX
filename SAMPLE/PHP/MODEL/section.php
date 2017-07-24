<?php function GetSectionArray(
    )
{
     $statement = GetStatement( 'select * from SECTION order by Number asc' );
    $statement->execute();

    return GetObjectArray( $statement );
}

// ~~

function GetSectionById(
    int $id
    )
{
     $statement = GetStatement( 'select * from SECTION where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();

    return GetObject( $statement );
}

// ~~

function ChangeSection(
    int $id,
    int $number,
    string $name,
    string $text,
    string $image
    )
{
     $statement = GetStatement( 'update SECTION set Id = ?, Number = ?, Name = ?, Text = ?, Image = ? where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->bindParam( 2, $number, PDO::PARAM_INT );
    $statement->bindParam( 3, $name, PDO::PARAM_STR );
    $statement->bindParam( 4, $text, PDO::PARAM_STR );
    $statement->bindParam( 5, $image, PDO::PARAM_STR );
    $statement->bindParam( 6, $id, PDO::PARAM_INT );
    $statement->execute();
}

// ~~

function AddSection(
    int $number,
    string $name,
    string $text,
    string $image
    )
{
     $statement = GetStatement( 'insert into SECTION ( Number, Name, Text, Image ) values ( ?, ?, ?, ? )' );
    $statement->bindParam( 1, $number, PDO::PARAM_INT );
    $statement->bindParam( 2, $name, PDO::PARAM_STR );
    $statement->bindParam( 3, $text, PDO::PARAM_STR );
    $statement->bindParam( 4, $image, PDO::PARAM_STR );
    $statement->execute();

    return GetAddedId( $statement );
}

// ~~

function RemoveSection(
    int $id
    )
{
     $statement = GetStatement( 'delete from SECTION where Id = ?' );
    $statement->bindParam( 1, $id, PDO::PARAM_INT );
    $statement->execute();
}
