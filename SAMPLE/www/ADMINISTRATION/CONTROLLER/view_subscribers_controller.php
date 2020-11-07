<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- TYPES

class VIEW_SUBSCRIBERS_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'View subscribers';
        $this->SubscriberArray = GetDatabaseSubscriberArray();

        SetSessionValue( 'PreviousPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_subscribers_view.php';
    }
}

// -- STATEMENTS

 $view_subscribers_controller = new VIEW_SUBSCRIBERS_CONTROLLER();
