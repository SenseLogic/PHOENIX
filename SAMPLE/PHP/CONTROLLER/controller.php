<?php require_once __DIR__ . '/' . '../MODEL/session.php';

// ~~

class CONTROLLER
{
    function __construct(
        )
    {
        $this->Session = new SESSION();
    }

    // ~~

    function GetMessage(
        int $message_index
        )
    {
        if ( $message_index == -1 )
        {
            return 'Invalid pseudonym or password.';
        }
        else if ( $message_index == 1 )
        {
            return 'Thanks for your subscription.';
        }
        else if ( $message_index == 2 )
        {
            return 'Your comment has been added.';
        }
    }
}
