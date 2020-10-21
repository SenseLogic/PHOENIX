<?php // -- FUNCTIONS

function HasUploadedFile(
    string $name
    )
{
    return
        count( $_FILES ) > 0
        && isset( $_FILES[ $name ] );
}

// ~~

function GetUploadedFilePath(
    string $name
    )
{
    return $_FILES[ $name ][ 'tmp_name' ];
}

// ~~

function GetUploadedFileName(
    string $name
    )
{
    return $_FILES[ $name ][ 'name' ];
}

// ~~

function GetUploadedFileByteCount(
    string $name
    )
{
    return $_FILES[ $name ][ 'size' ];
}

// ~~

function MoveUploadedFile(
    string $source_file_path,
    string $target_file_path
    )
{
    return move_uploaded_file( $source_file_path, $target_file_path);
}