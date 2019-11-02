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
                            <form name="DisconnectUserForm" action="/disconnect_user" method="post">
                                <input id="path" name="Path" type="hidden" value="<?php echo htmlspecialchars( GetPath() ); ?>"/>
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
                            <form name="ConnectUserForm" action="/connect_user" method="post">
                                <label for="pseudonym">
                                    Pseudonym :
                                    <input id="pseudonym" name="Pseudonym" type="text"/>
                                </label>
                                <label for="password">
                                    Password :
                                    <input id="password" name="Password" type="password"/>
                                </label>
                                <input class="btn" type="submit" value="Log In"/>
                            </form>
                        </div>
                    </div>
                <?php } ?>
                <?php if ( !$this->Session->UserHasSubscribed ) { ?>
                    <?php
                        $this->Captcha = GetCaptchaText( 6 );

                        $this->Session->Captcha = $this->Captcha;
                        $this->Session->Store();
                    ?>
                    <div class="card">
                        <div class="card-content">
                            <h5>
                                Newsletter
                            </h5>
                            <script>
                                // -- FUNCTIONS

                                <?php echo GetCaptchaCode( $this->Captcha ); ?>

                                // ~~

                                function IsValidAddSubscriberForm()
                                {
                                    var
                                        add_subscriber_form,
                                        captcha_field,
                                        email_field,
                                        it_is_valid_add_subscriber_form;

                                    it_is_valid_add_subscriber_form = true;

                                    add_subscriber_form = document.AddSubscriberForm;
                                    email_field = add_subscriber_form.Email;
                                    captcha_field = add_subscriber_form.Captcha;

                                    if ( email_field.value !== ""
                                         && /[a-z-.]+@[a-z-]+\.[a-z]+/g.test( email_field.value.toLowerCase() ) )
                                    {
                                        email_field.classList.remove( "red" );
                                        email_field.classList.remove( "lighten-4" );
                                    }
                                    else
                                    {
                                        email_field.classList.add( "red" );
                                        email_field.classList.add( "lighten-4" );

                                        it_is_valid_add_subscriber_form = false;
                                    }

                                    if ( captcha_field.value !== ""
                                         && IsValidCaptcha( captcha_field.value ) )
                                    {
                                        captcha_field.classList.remove( "red" );
                                        captcha_field.classList.remove( "lighten-4" );
                                    }
                                    else
                                    {
                                        captcha_field.classList.add( "red" );
                                        captcha_field.classList.add( "lighten-4" );

                                        it_is_valid_add_subscriber_form = false;
                                    }

                                    return it_is_valid_add_subscriber_form;
                                }
                            </script>
                            <form name="AddSubscriberForm" onsubmit="return IsValidAddSubscriberForm()" action="/add_subscriber" method="post"/>
                                <label for="email">
                                    Email :
                                    <input id="email" name="Email" type="text"/>
                                </label>
                                <div>
                                    <img id="captcha_image" src="/get_captcha_image" style="width:100%;height:auto"/>
                                </div>
                                <label for="captcha">
                                    Security Code :
                                    <input name="Captcha" type="text"/>
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