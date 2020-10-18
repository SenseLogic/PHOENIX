<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- STATEMENTS

 $subscriber_array = GetDatabaseSubscriberArray();

SetStatus( 200 );
SetJsonResponse( $subscriber_array );
