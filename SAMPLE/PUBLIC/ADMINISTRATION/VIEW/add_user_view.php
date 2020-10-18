<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<script>
    // -- FUNCTIONS

    function IsValidAddUserForm()
    {
        var
            add_user_form,
            it_is_valid_add_user_form,
            email_field,
            password_field,
            is_administrator_field;

        it_is_valid_add_user_form = true;

        add_user_form = document.AddUserForm;
        email_field = add_user_form.Email;
        password_field = add_user_form.Password;
        is_administrator_field = add_user_form.IsAdministrator;

        if ( email_field.value !== "" )
        {
            email_field.classList.remove( "form-field-error" );
        }
        else
        {
            email_field.classList.add( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        if ( password_field.value !== "" )
        {
            password_field.classList.remove( "form-field-error" );
        }
        else
        {
            password_field.classList.add( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        if ( is_administrator_field.value !== "" )
        {
            is_administrator_field.classList.remove( "form-field-error" );
        }
        else
        {
            is_administrator_field.classList.add( "form-field-error" );

            it_is_valid_add_user_form = false;
        }

        return it_is_valid_add_user_form;
    }
</script>
<div>
    <div class="page-section form-section">
        <form class="form-centered" name="AddUserForm" onsubmit="return IsValidAddUserForm()" action="/admin/user/add" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    Email :
                </div>
                <div>
                    <input class="form-input" name="Email" type="text"/>
                </div>
                <div class="form-field-name">
                    Password :
                </div>
                <div>
                    <input class="form-input" name="Password" type="text"/>
                </div>
                <div class="form-field-name">
                    Is Administrator :
                </div>
                <div>
                    <input class="form-input" name="IsAdministrator" type="text"/>
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
