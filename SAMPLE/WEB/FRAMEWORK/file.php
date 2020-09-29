<?php // -- FUNCTIONS

function GetBaseFolderPath(
    )
{
    return $_SERVER[ 'DOCUMENT_ROOT' ] . '/';
}

// ~~

function GetValidFolderPath(
    string $folder_path
    )
{
    $folder_path = str_replace( '\\', '/', $folder_path );

    if ( $folder_path === ''
         || substr( $folder_path, -1 ) === '/' )
    {
        return $folder_path;
    }
    else
    {
        return $folder_path . '/';
    }
}

// ~~

function GetValidFilePath(
    $file_path
    )
{
    return str_replace( '\\', '/', $file_path );
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

function GetRelativeFolderPath(
    $folder_path,
    $base_folder_path
    )
{
    $base_folder_path = GetValidFolderPath( $base_folder_path );
    $folder_path = GetValidFolderPath( $folder_path );

    return RemovePrefix( $folder_path, $base_folder_path );
}

// ~~

function GetRelativeFilePath(
    $file_path,
    $base_folder_path
    )
{
    $base_folder_path = GetValidFolderPath( $base_folder_path );
    $file_path = GetValidFilePath( $file_path );

    return RemovePrefix( $file_path, $base_folder_path );
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

function IsFolderPath(
    $path
    )
{
    return is_dir( $path );
}

// ~~

function IsMatchingFilePath(
    $file_path,
    $file_filter
    )
{
    return fnmatch( $file_filter, $file_path );
}

// ~~

function GetMatchingFilePathArray(
    string $file_filter
    )
{
    return glob( $file_filter );
}

// ~~

function AddFolderPathArray(
    array & $folder_path_array,
    string $folder_path,
    bool $is_recursive = false
    )
{
    foreach ( scandir( $folder_path, SCANDIR_SORT_NONE ) as  $file_path )
    {
        if ( $file_path !== '.'
             && $file_path !== '..' )
        {
            if ( is_dir( $file_path ) )
            {
                array_push( $folder_path_array, GetValidFolderPath( $file_path ) );

                if ( $is_recursive )
                {
                    AddFolderPathArray( $folder_path_array, $file_path, true );
                }
            }
        }
    }
}

// ~~

function GetFolderPathArray(
    array & $folder_path_array,
    string $folder_path,
    bool $is_recursive = false
    )
{
    $folder_path_array = array();

    AddFolderPathArray( $folder_path_array, $folder_path, $is_recursive );
}

// ~~

function AddFilePathArray(
    array & $file_path_array,
    string $folder_path,
    bool $is_recursive = false
    )
{
    foreach ( scandir( $folder_path, SCANDIR_SORT_NONE ) as  $file_path )
    {
        if ( $file_path !== '.'
             && $file_path !== '..' )
        {
            if ( is_dir( $file_path ) )
            {
                if ( $is_recursive )
                {
                    AddFilePathArray( $file_path_array, $file_path, true );
                }
            }
            else
            {
                array_push( $file_path_array, GetValidFilePath( $file_path ) );
            }
        }
    }
}

// ~~

function GetFilePathArray(
    array & $file_path_array,
    string $folder_path,
    bool $is_recursive = false
    )
{
    $file_path_array = array();

    AddFilePathArray( $file_path_array, $folder_path, $is_recursive );
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
