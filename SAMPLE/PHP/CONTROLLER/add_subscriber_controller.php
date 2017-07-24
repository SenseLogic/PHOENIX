<?php require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/session.php';
require_once __DIR__ . '/' . '../MODEL/subscriber.php';

// ~~

class ADD_SUBSCRIBER_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        AddSubscriber( GetPostValue( 'email' ) );

        $this->Session->UserHasSubscribed = true;
        $this->Session->Update();

        Reload( $this->Session->Path . '?message=1' );
    }
}

// ~~

 $add_subscriber_controller = new ADD_SUBSCRIBER_CONTROLLER();
