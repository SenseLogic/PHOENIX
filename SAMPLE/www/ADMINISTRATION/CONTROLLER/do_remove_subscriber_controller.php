<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- TYPES

class DO_REMOVE_SUBSCRIBER_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $subscriber_id
        )
    {
        parent::__construct();

        RemoveDatabaseSubscriberById( $subscriber_id );

        Redirect( '/admin/subscriber' );
    }
}

// -- STATEMENTS

 $do_remove_subscriber_controller = new DO_REMOVE_SUBSCRIBER_CONTROLLER(  $subscriber_id );
