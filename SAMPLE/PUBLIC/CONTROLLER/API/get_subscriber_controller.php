<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- STATEMENTS

 $subscriber = GetDatabaseSubscriberByUuid(  $subscriber_uuid );

SetStatus( 200 );
SetJsonResponse( $subscriber );
