<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<script>
    // -- FUNCTIONS

    function IsValidAddContactForm()
    {
        var
            add_contact_form,
            it_is_valid_add_contact_form,
            name_field,
            email_field,
            message_field,
            date_time_field;

        it_is_valid_add_contact_form = true;

        add_contact_form = document.AddContactForm;
        name_field = add_contact_form.Name;
        email_field = add_contact_form.Email;
        message_field = add_contact_form.Message;
        date_time_field = add_contact_form.DateTime;

        if ( name_field.value !== "" )
        {
            name_field.classList.remove( "form-field-error" );
        }
        else
        {
            name_field.classList.add( "form-field-error" );

            it_is_valid_add_contact_form = false;
        }

        if ( email_field.value !== "" )
        {
            email_field.classList.remove( "form-field-error" );
        }
        else
        {
            email_field.classList.add( "form-field-error" );

            it_is_valid_add_contact_form = false;
        }

        if ( message_field.value !== "" )
        {
            message_field.classList.remove( "form-field-error" );
        }
        else
        {
            message_field.classList.add( "form-field-error" );

            it_is_valid_add_contact_form = false;
        }

        if ( date_time_field.value !== "" )
        {
            date_time_field.classList.remove( "form-field-error" );
        }
        else
        {
            date_time_field.classList.add( "form-field-error" );

            it_is_valid_add_contact_form = false;
        }

        return it_is_valid_add_contact_form;
    }
</script>
<div>
    <div class="page-section form-section">
        <form class="form-centered" name="AddContactForm" onsubmit="return IsValidAddContactForm()" action="/admin/contact/add" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    Name :
                </div>
                <div>
                    <input class="form-input" name="Name" type="text"/>
                </div>
                <div class="form-field-name">
                    Email :
                </div>
                <div>
                    <input class="form-input" name="Email" type="text"/>
                </div>
                <div class="form-field-name">
                    Message :
                </div>
                <div>
                    <textarea class="form-textarea" name="Message"></textarea>
                </div>
                <div class="form-field-name">
                    Date Time :
                </div>
                <div>
                    <input class="form-input" name="DateTime" type="text"/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/contact">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
