<?php class SESSION
{
    public
        $Path = "",
        $User = null,
        $UserIsConnected = false,
        $UserHasSubscribed = false;

    // ~~

    function __construct(
        )
    {
        if ( isset( $_SESSION[ 'Path' ] ) )
        {
            $this->Path = $_SESSION[ 'Path' ];
        }

        if ( isset( $_SESSION[ 'User' ] ) )
        {
            $this->User = $_SESSION[ 'User' ];
        }

        if ( isset( $_SESSION[ 'UserIsConnected' ] ) )
        {
            $this->UserIsConnected = $_SESSION[ 'UserIsConnected' ];
        }

        if ( isset( $_SESSION[ 'UserHasSubscribed' ] ) )
        {
            $this->UserHasSubscribed = $_SESSION[ 'UserHasSubscribed' ];
        }
    }

    // ~~

    function Update(
        )
    {
        $_SESSION[ 'Path' ] = $this->Path;
        $_SESSION[ 'User' ] = $this->User;
        $_SESSION[ 'UserIsConnected' ] = $this->UserIsConnected;
        $_SESSION[ 'UserHasSubscribed' ] = $this->UserHasSubscribed;
    }
}
