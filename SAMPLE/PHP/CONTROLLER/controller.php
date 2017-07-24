<?php require_once __DIR__ . '/' . '../MODEL/session.php';

// ~~

class CONTROLLER
{
    function __construct(
        )
    {
        $this->Session = new SESSION();
    }
}
