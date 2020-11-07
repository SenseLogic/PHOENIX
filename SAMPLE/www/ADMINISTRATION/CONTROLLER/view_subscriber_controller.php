<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- TYPES

class VIEW_SUBSCRIBER_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $subscriber_id
        )
    {
        parent::__construct();

        $this->Title = 'View a subscriber';
        $this->Subscriber = GetDatabaseSubscriberById( $subscriber_id );
        $this->PreviousPage = GetSessionValue( 'PreviousPage' );

        require_once __DIR__ . '/' . '../VIEW/view_subscriber_view.php';
    }
}

// -- STATEMENTS

 $view_subscriber_controller = new VIEW_SUBSCRIBER_CONTROLLER(  $subscriber_id );
