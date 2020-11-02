<?php // -- TYPES

class SESSION
{
    function __construct(
        )
    {
        $this->Path = FindSessionValue( 'Path', '' );
        $this->Message = FindSessionValue( 'Message', '' );
        $this->User = FindSessionValue( 'User', null );
        $this->UserIsConnected = FindSessionValue( 'UserIsConnected', false );
        $this->UserHasSubscribed = FindSessionValue( 'UserHasSubscribed', false );
        $this->Captcha = FindSessionValue( 'Captcha', '' );
    }

    // ~~

    function Store(
        )
    {
        SetSessionValue( 'Path', $this->Path );
        SetSessionValue( 'Message', $this->Message );
        SetSessionValue( 'User', $this->User );
        SetSessionValue( 'UserIsConnected', $this->UserIsConnected );
        SetSessionValue( 'UserHasSubscribed', $this->UserHasSubscribed );
        SetSessionValue( 'Captcha', $this->Captcha );
    }
}
