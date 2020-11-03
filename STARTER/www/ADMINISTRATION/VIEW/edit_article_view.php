<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<script>
    // -- FUNCTIONS

    function IsValidEditArticleForm()
    {
        var
            edit_article_form,
            it_is_valid_edit_article_form,
            title_field,
            slug_field,
            text_field,
            image_field,
            video_field,
            section_slug_field;

        it_is_valid_edit_article_form = true;

        edit_article_form = document.EditArticleForm;
        title_field = edit_article_form.Title;
        slug_field = edit_article_form.Slug;
        text_field = edit_article_form.Text;
        image_field = edit_article_form.Image;
        video_field = edit_article_form.Video;
        section_slug_field = edit_article_form.SectionSlug;

        if ( title_field.value !== "" )
        {
            title_field.classList.remove( "form-field-error" );
        }
        else
        {
            title_field.classList.add( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( slug_field.value !== "" )
        {
            slug_field.classList.remove( "form-field-error" );
        }
        else
        {
            slug_field.classList.add( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( text_field.value !== "" )
        {
            text_field.classList.remove( "form-field-error" );
        }
        else
        {
            text_field.classList.add( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( image_field.value !== "" )
        {
            image_field.classList.remove( "form-field-error" );
        }
        else
        {
            image_field.classList.add( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( video_field.value !== "" )
        {
            video_field.classList.remove( "form-field-error" );
        }
        else
        {
            video_field.classList.add( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( section_slug_field.value !== "" )
        {
            section_slug_field.classList.remove( "form-field-error" );
        }
        else
        {
            section_slug_field.classList.add( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        return it_is_valid_edit_article_form;
    }
</script>
<div>
    <div class="page-section form-section">
        <form class="form-centered" name="EditArticleForm" onsubmit="return IsValidEditArticleForm()" action="/admin/article/edit/<?php echo htmlspecialchars( $this->Article->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    Title :
                </div>
                <div>
                    <input class="form-input" name="Title" type="text" value="<?php echo htmlspecialchars( $this->Article->Title ); ?>"/>
                </div>
                <div class="form-field-name">
                    Slug :
                </div>
                <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( $this->Article->Slug ); ?>"/>
                </div>
                <div class="form-field-name">
                    Text :
                </div>
                <div>
                    <textarea class="form-textarea" name="Text"><?php echo htmlspecialchars( $this->Article->Text ); ?></textarea>
                </div>
                <div class="form-field-name">
                    Image :
                </div>
                <div>
                    <input class="form-input" name="Image" type="text" value="<?php echo htmlspecialchars( $this->Article->Image ); ?>" oninput="HandleImageNameInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <img class="form-upload-image" src="/upload/image/<?php echo htmlspecialchars( $this->Article->Image ); ?>" onerror="this.src='/upload/image/missing_image.svg'"/>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/icon/admin/upload_icon.svg"/><input id="file" class="form-upload-file" type="file" accept="image/jpeg, image/png, image/webp, image/gif, image/svg" onchange="HandleImageFileInputChangeEvent( this )"/>
                        </label>
                    </div>
                </div>
                <div class="form-field-name">
                    Video :
                </div>
                <div>
                    <input class="form-input" name="Video" type="text" value="<?php echo htmlspecialchars( $this->Article->Video ); ?>" oninput="HandleVideoNameInputChangeEvent( this )"/>
                    <div class="form-upload-container">
                        <video class="form-upload-video" src="/upload/video/<?php echo htmlspecialchars( $this->Article->Video ); ?>" type="video/mp4" onerror="this.src='/upload/video/missing_video.mp4'"></video>
                        <label class="form-upload-button">
                            <img class="form-upload-icon" src="/static/image/icon/admin/upload_icon.svg"/><input id="file" class="form-upload-file" type="file" accept="video/mp4" onchange="HandleVideoFileInputChangeEvent( this )"/>
                        </label>
                    </div>
                </div>
                <div class="form-field-name">
                    Section Slug :
                </div>
                <div>
                    <input class="form-input" name="SectionSlug" type="text" value="<?php echo htmlspecialchars( $this->Article->SectionSlug ); ?>"/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/article">
                </a>
                <button class="justify-self-end form-button form-button-large apply-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
