<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<script>
    // -- FUNCTIONS

    function IsValidEditSectionForm()
    {
        var
            edit_section_form,
            it_is_valid_edit_section_form,
            name_field,
            slug_field;

        it_is_valid_edit_section_form = true;

        edit_section_form = document.EditSectionForm;
        name_field = edit_section_form.Name;
        slug_field = edit_section_form.Slug;

        if ( name_field.value !== "" )
        {
            name_field.classList.remove( "form-field-error" );
        }
        else
        {
            name_field.classList.add( "form-field-error" );

            it_is_valid_edit_section_form = false;
        }

        if ( slug_field.value !== "" )
        {
            slug_field.classList.remove( "form-field-error" );
        }
        else
        {
            slug_field.classList.add( "form-field-error" );

            it_is_valid_edit_section_form = false;
        }

        return it_is_valid_edit_section_form;
    }
</script>
<div>
    <div class="page-section form-section">
        <form class="form-centered" name="EditSectionForm" onsubmit="return IsValidEditSectionForm()" action="/admin/section/edit/<?php echo htmlspecialchars( $this->Section->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    Name :
                </div>
                <div>
                    <input class="form-input" name="Name" type="text" value="<?php echo htmlspecialchars( $this->Section->Name ); ?>"/>
                </div>
                <div class="form-field-name">
                    Slug :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( $this->Section->Slug ); ?>"/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/section">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
