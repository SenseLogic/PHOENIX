<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="/static/css/materialize.min.css"/>
        <title>
            Blog
        </title>
    </head>
    <body class="container">
        <div class="row">
            <nav class="col m12">
                <ul>
                    <?php if ( $this->Session->UserIsConnected && $this->Session->User->ItIsAdministrator ) { ?>
                        <li>
                            <a href="/administration">
                                Administration
                            </a>
                        </li>
                    <?php } ?>
                    <?php foreach ( $this->SectionArray as  $section ) { ?>
                        <li>
                            <a href="/show_section/<?php echo htmlspecialchars( $section->Id ); ?>">
                                <?php echo htmlspecialchars( $section->Name ); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col m9">
                <h1>
                    Blog
                </h1>
                <?php echo $this->MainContent; ?>
            </div>
            <div class="col m3">
                <?php if ( $this->Session->UserIsConnected ) { ?>
                    <div class="card">
                        <div class="card-content">
                            <form action="/disconnect_user" method="post">
                                <input id="path" name="path" type="hidden" value="<?php echo htmlspecialchars( GetPath() ); ?>"/>
                                <input class="btn" type="submit" value="Log Out"/>
                            </form>
                        </div>
                    </div>
                <?php } else  { ?>
                    <div class="card">
                        <div class="card-content">
                            <h5>
                                Connection
                            </h5>
                            <form action="/connect_user" method="post">
                                <label for="pseudonym">
                                    Pseudonym :
                                    <input id="pseudonym" name="pseudonym" type="text"/>
                                </label>
                                <label for="password">
                                    Password :
                                    <input id="password" name="password" type="password"/>
                                </label>
                                <input class="btn" type="submit" value="Log In"/>
                            </form>
                        </div>
                    </div>
                <?php } ?>
                <?php if ( !$this->Session->UserHasSubscribed ) { ?>
                    <div class="card">
                        <div class="card-content">
                            <h5>
                                Newsletter
                            </h5>
                            <form action="/add_subscriber" method="post"/>
                                <label for="email">
                                    Email :
                                    <input id="email" name="email" type="text"/>
                                </label>
                                <input class="btn" type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <script type="text/javascript" src="/static/js/jquery.min.js"></script>
        <script type="text/javascript" src="/static/js/materialize.min.js"></script>
        <script>
            $( document ).ready(
                function()
                {
                    $( 'select' ).material_select();
                    <?php
                    if ( $this->Session->Message != '' )
                    {
                        echo 'Materialize.toast( "' . $this->Session->Message . '", 3000 );';

                        $this->Session->Message = '';
                        $this->Session->Store();
                    }
                    ?>
                }
                );
        </script>
    </body>
</html>

