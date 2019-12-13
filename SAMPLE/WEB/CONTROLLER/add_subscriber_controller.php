<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/subscriber_model.php';

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
             $location = GetLocation( $ip_address );

            AddDatabaseSubscriber(
                GetPostValue( 'Email' ),
                $ip_address,
                $browser,
                $location->Latitude,
                $location->Longitude,
                $location->CountryCode
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
