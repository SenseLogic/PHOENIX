<?php class SESSION
{
    function __construct(
        )
    {
        $this->Path = GetSessionValue( 'Path', '' );
        $this->Message = GetSessionValue( 'Message', '' );
        $this->User = GetSessionValue( 'User', null );
        $this->UserIsConnected = GetSessionValue( 'UserIsConnected', false );
        $this->UserHasSubscribed = GetSessionValue( 'UserHasSubscribed', false );
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
    }
}
