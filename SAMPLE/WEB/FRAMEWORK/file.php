<?php // -- FUNCTIONS

function GetValidFolderPath(
    string $folder_path
    )
{
    if ( $folder_path === ''
         && substr( $folder_path, -1 ) === '/' )
    {
        return $folder_path;
    }
    else
    {
        return $folder_path . '/';
    }
}

// ~~

function GetValidFileName(
    string $file_name
    )
{
    return
        str_replace(
            str_split( ' #%&$@:!?=+*|\'"`{}[]<>' ),
            '_',
            $file_name
            );
}

// ~~

function HasValidExtension(
    string $file_path,
    array $extension_array
    )
{
    return in_array( SplitFilePath( $file_path )[ 1 ], $extension_array );
}

// ~~

function GetRootFolderPath(
    )
{
    return $_SERVER[ 'DOCUMENT_ROOT' ] . '/';
}

// ~~

function SplitFilePath(
    string $file_path
    )
{
     $file_path_character_count = strlen( $file_path );
     $last_slash_character_index = strrpos( $file_path, '/' );

    if ( $last_slash_character_index === false )
    {
         $folder_path_character_count = 0;
         $last_dot_character_index = strrpos( $file_path, '.' );
    }
    else
    {
         $folder_path_character_count = $last_slash_character_index + 1;
         $last_dot_character_index = strrpos( $file_path, '.', $last_slash_character_index );
    }

    if ( $last_dot_character_index === false )
    {
         $file_extension_character_count = 0;
         $file_name_character_count = $file_path_character_count - $folder_path_character_count;
    }
    else
    {
         $file_extension_character_count = $file_path_character_count - $last_dot_character_index;
         $file_name_character_count = $file_path_character_count - $folder_path_character_count - $file_extension_character_count;
    }

    return
        array(
            substr( $file_path, 0, $folder_path_character_count ),
            substr( $file_path, $folder_path_character_count, $file_name_character_count ),
            substr( $file_path, $folder_path_character_count + $file_name_character_count, $file_extension_character_count )
            );
}

// ~~

function GetSuffixedFilePath(
    string $file_path,
    string $suffix
    )
{
     $part_array = SplitFilePath( $file_path );
    $part_array[ 1 ] .= $suffix;

    return implode( $part_array );
}

// ~~

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
