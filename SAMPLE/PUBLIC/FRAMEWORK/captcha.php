<?php // -- FUNCTIONS

function GetCaptchaText(
    int $character_count,
    string $alphabet = 'ABCDEFGHJKLMNPQRSUVWXY23456789'
    )
{
    return substr( str_shuffle( $alphabet ), 0, $character_count );
}

// ~~

function GetCaptchaHash(
    string $captcha,
    string $alphabet = 'ABCDEFGHJKLMNPQRSUVWXY23456789'
    )
{
     $hash = 0;
     $character_count = strlen( $captcha );

    for (  $character_index = 0;
          $character_index < $character_count;
          ++$character_index )
    {
        $hash = ( $hash * 31 + strpos( $alphabet, substr( $captcha, $character_index, 1 ) ) + 1 ) & 16777215;
    }

    return $hash;
}

// ~~

function GetCaptchaCode(
    string $captcha,
    string $alphabet = 'ABCDEFGHJKLMNPQRSUVWXY23456789'
    )
{
    return
        "function IsValidCaptcha(\n"
        . "    captcha\n"
        . "    )\n"
        . "{\n"
        . "    var hash = 0;\n"
        . "    \n"
        . "    for ( character of captcha )\n"
        . "    {\n"
        . "        hash = ( hash * 31 + \"" . $alphabet . "\".indexOf( character ) + 1 ) & 16777215;\n"
        . "    }\n"
        . "    \n"
        . "    return hash === " . GetCaptchaHash( $captcha, $alphabet ) . ";\n"
        . "}\n";
}

// ~~

function WriteCaptchaImage(
    string $captcha,
    int $slash_count = 15,
    int $background_red_component = 255,
    int $background_green_component = 255,
    int $background_blue_component = 255,
    int $slash_minimum_red_component = 128,
    int $slash_minimum_green_component = 128,
    int $slash_minimum_blue_component = 128,
    int $slash_maximum_red_component = 255,
    int $slash_maximum_green_component = 255,
    int $slash_maximum_blue_component = 255,
    int $text_minimum_red_component = 0,
    int $text_minimum_green_component = 0,
    int $text_minimum_blue_component = 0,
    int $text_maximum_red_component = 92,
    int $text_maximum_green_component = 92,
    int $text_maximum_blue_component = 92
    )
{
     $character_count = strlen( $captcha );
     $image_width = $character_count * 20 + 10;
     $image_height = 40;
     $image = imagecreatetruecolor( $image_width, $image_height );

    imagefilledrectangle(
        $image,
        0,
        0,
        $image_width,
        $image_height,
        imagecolorallocate(
            $image,
            $background_red_component,
            $background_green_component,
            $background_blue_component
            )
        );

    for (  $slash_index = 0;
          $slash_index < $slash_count;
          ++$slash_index )
    {
        imageline(
            $image,
            rand( 1, $image_width - 25 ),
            rand( 1, $image_height ),
            rand( 1, $image_width + 25 ),
            rand( 1, $image_height ),
            imagecolorallocate(
                $image,
                rand( $slash_minimum_red_component, $slash_maximum_red_component ),
                rand( $slash_minimum_green_component, $slash_maximum_green_component ),
                rand( $slash_minimum_blue_component, $slash_maximum_blue_component )
                )
            );
    }

    for (  $character_index = 0;
          $character_index < $character_count;
          ++$character_index )
    {
        imagechar(
            $image,
            5,
            $character_index * 20 + 10,
            rand( 5, 20 ),
            substr( $captcha, $character_index, 1 ),
            imagecolorallocate(
                $image,
                rand( $text_minimum_red_component, $text_maximum_red_component ),
                rand( $text_minimum_green_component, $text_maximum_green_component ),
                rand( $text_minimum_blue_component, $text_maximum_blue_component )
                )
            );
    }

    header( 'Content-Type: image/png' );
    imagepng( $image );
    imagedestroy( $image );
}

// ~~

function IsValidCaptcha(
    string $answer,
    string $captcha,
    int $maximum_error_count = 0
    )
{
    if ( $answer === $captcha )
    {
        return true;
    }
    else
    {
         $character_count = strlen( $captcha );

        if ( strlen( $answer ) === $character_count )
        {
             $error_count = 0;

            for (  $character_index = 0;
                  $character_index < $character_count;
                  ++$character_index )
            {
                if ( substr( $answer, $character_index, 1 )
                     !== substr( $captcha, $character_index, 1 ) )
                {
                    ++$error_count;
                }
            }

            return $error_count < $maximum_error_count;
        }
        else
        {
            return false;
        }
    }
}
