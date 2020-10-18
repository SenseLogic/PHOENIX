<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';

// -- TYPES

class GET_CAPTCHA_IMAGE_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        WriteCaptchaImage( $this->Session->Captcha );
    }
}

// -- STATEMENTS

 $get_captcha_image_controller = new GET_CAPTCHA_IMAGE_CONTROLLER(  $language_code );
