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
             $browser_address = GetBrowserAddress();
             $browser_name = GetBrowserName();
             $browser_location = GetBrowserLocation( $browser_address );

            AddDatabaseSubscriber(
                GetPostValue( 'Email' ),
                $browser_address,
                $browser_name,
                $browser_location->Latitude,
                $browser_location->Longitude,
                $browser_location->CountryCode
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
