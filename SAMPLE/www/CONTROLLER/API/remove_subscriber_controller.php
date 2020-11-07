<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/subscriber_model.php';

// -- STATEMENTS

RemoveDatabaseSubscriberByUuid( subscriber_uuid );

SetStatus( 204 );
