<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- TYPES

class DO_ADD_SUBSCRIBER_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $email = GetPostValue( 'Email' );
         $ip_address = GetPostValue( 'IpAddress' );
         $browser = GetPostValue( 'Browser' );
         $latitude = GetPostValue( 'Latitude' );
         $longitude = GetPostValue( 'Longitude' );
         $country_code = GetPostValue( 'CountryCode' );
         $date_time = GetPostValue( 'DateTime' );

        AddDatabaseSubscriber( $email, $ip_address, $browser, $latitude, $longitude, $country_code, $date_time );

        Redirect( '/admin/subscriber' );
    }
}

// -- STATEMENTS

 $do_add_subscriber_controller = new DO_ADD_SUBSCRIBER_CONTROLLER();
