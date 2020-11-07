<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- TYPES

class REMOVE_SUBSCRIBER_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $subscriber_id
        )
    {
        parent::__construct();

        $this->Title = 'Remove a subscriber';
        $this->Subscriber = GetDatabaseSubscriberById( $subscriber_id );

        require_once __DIR__ . '/' . '../VIEW/remove_subscriber_view.php';
    }
}

// -- STATEMENTS

 $remove_subscriber_controller = new REMOVE_SUBSCRIBER_CONTROLLER(  $subscriber_id );
