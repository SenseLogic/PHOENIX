<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- STATEMENTS

 $input = GetJsonInput();
SetDatabaseSubscriber(  $subscriber_uuid, $input->Email, $input->IpAddress, $input->Browser, $input->Latitude, $input->Longitude, $input->CountryCode, $input->DateTime );

SetStatus( 200 );
