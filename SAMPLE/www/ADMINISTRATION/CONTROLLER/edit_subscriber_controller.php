<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- TYPES

class EDIT_SUBSCRIBER_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $subscriber_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a subscriber';
        $this->Subscriber = GetDatabaseSubscriberById( $subscriber_id );

        require_once __DIR__ . '/' . '../VIEW/edit_subscriber_view.php';
    }
}

// -- STATEMENTS

 $edit_subscriber_controller = new EDIT_SUBSCRIBER_CONTROLLER(  $subscriber_id );
