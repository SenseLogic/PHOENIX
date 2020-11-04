<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php'; ?>
<style>
    h1
    {
        font-weight: bold;
        margin-top: 2rem;
    }

    h2
    {
        margin-top: 1rem;
    }

    img,
    video
    {
        height: 10rem;
        width: auto;
    }

    div,
    input,
    button
    {
        border: 1px solid #CCCCCC;
        border-radius: 0.5rem;
        margin: 0.5rem;
        padding: 1rem;
    }

    input
    {
        width: calc( 50% - 1rem );
    }

    .invalid
    {
        outline: red solid 1px;
    }

    #captcha-image
    {
        height: 3rem;
    }

    .hidden
    {
        display: none;
    }
</style>
<div>
    <?php
        $this->Session->Captcha = GetCaptchaText( 6 );
        $this->Session->Store();
    ?>
    <div>
        <?php foreach ( $this->SectionArray as  $section ) { ?>
            <div>
                <h1><?php echo htmlspecialchars( $section->Name ); ?></h1>
            </div>
        <?php } ?>
    </div>
    <div>
        <?php foreach ( $this->ArticleArray as  $article ) { ?>
            <div>
                <h2><?php echo htmlspecialchars( $article->Title ); ?></h2>
                <p><?php echo htmlspecialchars( $article->Text ); ?></p>
                <div>
                    <img src="/upload/image/<?php echo $article->Image; ?>"/>
                </div>
                <div>
                    <video src="/upload/video/<?php echo $article->Video; ?>" autoplay loop/>
                    </video>
                </div>
            </div>
        <?php } ?>
    </div>
    <div>
        <form name="AddContactForm">
            <div>
                <input id="name" name="Name" type="text" placeholder="Name"/>
            </div>
            <div>
                <input id="email" name="Email" type="text" placeholder="Email"/>
            </div>
            <div>
                <input id="message" name="Message" type="text" placeholder="Message"/>
            </div>
            <div>
                <input name="Captcha" type="text" placeholder="Captcha"/>
                <img id="captcha-image" src="/captcha"/>
            </div>
            <button id="add-contact-button">
                Send
            </button>
            <div id="thanks-text" class="hidden">
                Thanks !
            </div>
        </form>
    </div>
    <script>
        // -- FUNCTIONS

        <?php echo GetCaptchaCode( $this->Session->Captcha ); ?>

        // ~~

        function IsValidAddContactForm()
        {
            var
                add_contact_form,
                captcha_field,
                email_field,
                it_is_valid_add_contact_form;

            it_is_valid_add_contact_form = true;

            add_contact_form = document.AddContactForm;
            email_field = add_contact_form.Email;
            captcha_field = add_contact_form.Captcha;

            if ( email_field.value !== ""
                 && /^[a-z-.]+@[a-z-.]+\.[a-z]+$/g.test( email_field.value.toLowerCase() ) )
            {
                email_field.classList.remove( "invalid" );
            }
            else
            {
                email_field.classList.add( "invalid" );

                it_is_valid_add_contact_form = false;
            }

            if ( captcha_field.value !== ""
                 && IsValidCaptcha( captcha_field.value ) )
            {
                captcha_field.classList.remove( "invalid" );
            }
            else
            {
                captcha_field.classList.add( "invalid" );

                it_is_valid_add_contact_form = false;
            }

            return it_is_valid_add_contact_form;
        }

        // ~~

        async function HandleAddContactButtonClickEvent(
            )
        {
            var
                add_contact_form,
                form_data,
                request;

            add_contact_form = document.AddContactForm;

            if ( IsValidAddContactForm( add_contact_form ) )
            {
                form_data = new FormData();
                form_data.append( "Name", add_contact_form.Name.value );
                form_data.append( "Email", add_contact_form.Email.value );
                form_data.append( "Message", add_contact_form.Message.value );
                form_data.append( "Captcha", add_contact_form.Captcha.value );

                request = await SendRequest(
                    "/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/contact",
                    "POST",
                    form_data
                    );

                console.dir( request );

                if ( request.status === 200 )
                {
                    GetElementById( "thanks-text" ).RemoveClass( "hidden" );
                }
            }
        }

        // -- STATEMENTS

        GetElementById( "add-contact-button" ).addEventListener(
            "click",
            function (
                event
                )
            {
                event.preventDefault();

                HandleAddContactButtonClickEvent();
            }
            );
    </script>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php'; ?>
