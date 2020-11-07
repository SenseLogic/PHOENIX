<?php // -- IMPORTS

require_once __DIR__ . '/' . '../../MODEL/session.php';

// -- TYPES

class CONTROLLER
{
    function __construct(
        )
    {
        $this->Session = new SESSION();
    }
}
