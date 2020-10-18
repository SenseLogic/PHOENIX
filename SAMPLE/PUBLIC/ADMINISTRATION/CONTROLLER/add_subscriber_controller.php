<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- TYPES

class ADD_SUBSCRIBER_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Add a subscriber';

        require_once __DIR__ . '/' . '../VIEW/add_subscriber_view.php';
    }
}

// -- STATEMENTS

 $add_subscriber_controller = new ADD_SUBSCRIBER_CONTROLLER();
