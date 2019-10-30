<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/session.php';
require_once __DIR__ . '/' . '../MODEL/subscriber.php';

// -- TYPES

class ADD_SUBSCRIBER_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        if ( IsValidCaptcha( GetPostValue( 'Captcha' ), $this->Session->Captcha ) )
        {
            AddDatabaseSubscriber( GetPostValue( 'Email' ) );

            $this->Session->UserHasSubscribed = true;
            $this->Session->Message = 'Thanks for your subscription.';
            $this->Session->Store();
        }

        Redirect( $this->Session->Path );
    }
}

// -- STATEMENTS

 $add_subscriber_controller = new ADD_SUBSCRIBER_CONTROLLER(  $c);
