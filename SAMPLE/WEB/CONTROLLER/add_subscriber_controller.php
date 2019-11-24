<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/session.php';
require_once __DIR__ . '/' . '../MODEL/subscriber.php';

// -- TYPES

class ADD_SUBSCRIBER_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        if ( IsValidCaptcha( GetPostValue( 'Captcha' ), $this->Session->Captcha ) )
        {
             $ip_address = GetIpAddress();
             $browser = GetBrowser();
             $latitude = 0.0;
             $longitude = 0.0;
             $country_code = 0.0;
             $ip_address = '';

            GetLocation(  $latitude,  $longitude,  $country_code, $ip_address );

            AddDatabaseSubscriber(
                GetPostValue( 'Email' ),
                $ip_address,
                $browser,
                $latitude,
                $longitude,
                $country_code
                );

            $this->Session->UserHasSubscribed = true;
            $this->Session->Message = 'Thanks for your subscription.';
            $this->Session->Store();
        }

        Redirect( $this->Session->Path );
    }
}

// -- STATEMENTS

 $add_subscriber_controller = new ADD_SUBSCRIBER_CONTROLLER(  $language_code );
