            </div>
            <div class="col m3">
                <?php if ( $this->Session->UserIsConnected ) { ?>
                    <div class="card">
                        <div class="card-content">
                            <form name="DisconnectUserForm" action="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/user/disconnect" method="post">
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
                            <form name="ConnectUserForm" action="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/user/connect" method="post">
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
                                         && /^[a-z-.]+@[a-z-.]+\.[a-z]+$/g.test( email_field.value.toLowerCase() ) )
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
                            <form name="AddSubscriberForm" onsubmit="return IsValidAddSubscriberForm()" action="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/subscriber" method="post"/>
                                <label for="email">
                                    Email :
                                    <input id="email" name="Email" type="text"/>
                                </label>
                                <div>
                                    <img id="captcha_image" src="/captcha" style="width:100%;height:auto"/>
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
        <script>
            $( document ).ready(
                function()
                {
                    <?php
                    if ( $this->Session->Message != '' )
                    {
                        echo 'M.toast( { html : "' . $this->Session->Message . '", displayLength : 3000 } );';

                        $this->Session->Message = '';
                        $this->Session->Store();
                    }
                    ?>
                }
                );
        </script>
    </body>
</html>
