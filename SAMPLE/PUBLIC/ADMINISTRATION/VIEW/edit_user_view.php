<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<script>
    // -- FUNCTIONS

    function IsValidEditUserForm()
    {
        var
            edit_user_form,
            it_is_valid_edit_user_form,
            email_field,
            pseudonym_field,
            password_field,
            is_administrator_field;

        it_is_valid_edit_user_form = true;

        edit_user_form = document.EditUserForm;
        email_field = edit_user_form.Email;
        pseudonym_field = edit_user_form.Pseudonym;
        password_field = edit_user_form.Password;
        is_administrator_field = edit_user_form.IsAdministrator;

        if ( email_field.value !== "" )
        {
            email_field.classList.remove( "form-field-error" );
        }
        else
        {
            email_field.classList.add( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        if ( pseudonym_field.value !== "" )
        {
            pseudonym_field.classList.remove( "form-field-error" );
        }
        else
        {
            pseudonym_field.classList.add( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        if ( password_field.value !== "" )
        {
            password_field.classList.remove( "form-field-error" );
        }
        else
        {
            password_field.classList.add( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        if ( is_administrator_field.value !== "" )
        {
            is_administrator_field.classList.remove( "form-field-error" );
        }
        else
        {
            is_administrator_field.classList.add( "form-field-error" );

            it_is_valid_edit_user_form = false;
        }

        return it_is_valid_edit_user_form;
    }
</script>
<div>
    <div class="page-section form-section">
        <form class="form-centered" name="EditUserForm" onsubmit="return IsValidEditUserForm()" action="/admin/user/edit/<?php echo htmlspecialchars( $this->User->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    Email :
                </div>
                <div>
                    <input class="form-input" name="Email" type="text" value="<?php echo htmlspecialchars( $this->User->Email ); ?>"/>
                </div>
                <div class="form-field-name">
                    Pseudonym :
                </div>
                <div>
                    <input class="form-input" name="Pseudonym" type="text" value="<?php echo htmlspecialchars( $this->User->Pseudonym ); ?>"/>
                </div>
                <div class="form-field-name">
                    Password :
                </div>
                <div>
                    <input class="form-input" name="Password" type="text" value="<?php echo htmlspecialchars( $this->User->Password ); ?>"/>
                </div>
                <div class="form-field-name">
                    Is Administrator :
                </div>
                <div>
                    <input class="form-input" name="IsAdministrator" type="text" value="<?php echo htmlspecialchars( $this->User->IsAdministrator ); ?>"/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/user">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
