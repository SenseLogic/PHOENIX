<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';

// -- TYPES

class GET_CAPTCHA_IMAGE_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        WriteCaptchaImage( $this->Session->Captcha );
    }
}

// -- STATEMENTS

 $get_captcha_image_controller = new GET_CAPTCHA_IMAGE_CONTROLLER();
