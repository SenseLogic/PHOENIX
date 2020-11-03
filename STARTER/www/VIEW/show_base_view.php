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
    }

    form
    {
        margin-top: 1rem;
    }

    input
    {
        display: block;
    }

    .invalid
    {
        outline: red solid 1px;
    }
</style>
<div>
    <?php foreach ( $this->SectionArray as  $section ) { ?>
        <h1><?php echo htmlspecialchars( $section->Name ); ?></h1>
        <?php foreach ( $this->ArticleArray as  $article ) { ?>
            <?php if ( $article->SectionSlug === $section->Slug ) { ?>
                <h2><?php echo htmlspecialchars( $article->Title ); ?></h2>
                <p><?php echo htmlspecialchars( $article->Text ); ?></p>
                <div>
                    <img src="/upload/image/<?php echo $article->Image; ?>"/>
                </div>
                <div>
                    <video src="/upload/video/<?php echo $article->Video; ?>" autoplay loop/>
                    </video>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    <?php
        $this->Session->Captcha = GetCaptchaText( 6 );
        $this->Session->Store();
    ?>
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
    </script>
    <form name="AddContactForm" onsubmit="return IsValidAddContactForm()" action="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/contact" method="post"/>
        <input id="name" name="Name" type="text" placeholder="Name"/>
        <input id="email" name="Email" type="text" placeholder="Email"/>
        <input id="message" name="Message" type="text" placeholder="Message"/>
        <div>
            <img id="captcha_image" src="/captcha"/><?php echo $this->Session->Captcha; ?>
        </div>
        <input name="Captcha" type="text" placeholder="Captcha"/>
        <input type="submit" value="Send">
    </form>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php'; ?>
