<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/section_model.php';
require_once __DIR__ . '/' . '../MODEL/subscriber_model.php';

// -- TYPES

class SHOW_SUBSCRIBERS_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        parent::__construct( $language_code );

        $this->SectionArray = GetDatabaseSectionArray();
        $this->SubscriberArray = GetDatabaseSubscriberArray();

        require_once __DIR__ . '/' . '../VIEW/show_subscribers_view.php';
        require_once __DIR__ . '/' . '../VIEW/show_page_view.php';
    }
}

// -- STATEMENTS

 $show_subscribers_controller = new SHOW_SUBSCRIBERS_CONTROLLER(  $language_code );
