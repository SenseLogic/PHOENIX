<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<script>
    // -- FUNCTIONS

    function IsValidEditArticleForm()
    {
        var
            edit_article_form,
            it_is_valid_edit_article_form,
            section_id_field,
            user_id_field,
            title_field,
            text_field,
            image_field,
            video_field,
            date_field;

        it_is_valid_edit_article_form = true;

        edit_article_form = document.EditArticleForm;
        section_id_field = edit_article_form.SectionId;
        user_id_field = edit_article_form.UserId;
        title_field = edit_article_form.Title;
        text_field = edit_article_form.Text;
        image_field = edit_article_form.Image;
        video_field = edit_article_form.Video;
        date_field = edit_article_form.Date;

        if ( section_id_field.value !== "" )
        {
            section_id_field.classList.remove( "form-field-error" );
        }
        else
        {
            section_id_field.classList.add( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( user_id_field.value !== "" )
        {
            user_id_field.classList.remove( "form-field-error" );
        }
        else
        {
            user_id_field.classList.add( "form-field-error" );

            it_is_valid_edit_article_form = false;
        }

        if ( title_field.value !== "" )
        {
            title_field.classList.remove( "form-field-error" );
        }
        else
        {
            title_field.classList.add( "form-field-error" );

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

        if ( date_field.value !== "" )
        {
            date_field.classList.remove( "form-field-error" );
        }
        else
        {
            date_field.classList.add( "form-field-error" );

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
                    Section Id :
                </div>
                <div>
                    <input class="form-input" name="SectionId" type="text" value="<?php echo htmlspecialchars( $this->Article->SectionId ); ?>"/>
                </div>
                <div class="form-field-name">
                    User Id :
                </div>
                <div>
                    <input class="form-input" name="UserId" type="text" value="<?php echo htmlspecialchars( $this->Article->UserId ); ?>"/>
                </div>
                <div class="form-field-name">
                    Title :
                </div>
                <div>
                    <input class="form-input" name="Title" type="text" value="<?php echo htmlspecialchars( $this->Article->Title ); ?>"/>
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
                    Date :
                </div>
                <div>
                    <input class="form-input" name="Date" type="text" value="<?php echo htmlspecialchars( $this->Article->Date ); ?>"/>
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