<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                Title :
            </div>
            <div>
                    <input class="form-input" name="Title" type="text" value="<?php echo htmlspecialchars( $this->Article->Title ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Slug :
            </div>
            <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( $this->Article->Slug ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Text :
            </div>
            <div>
                    <textarea class="form-textarea" name="Text" readonly><?php echo htmlspecialchars( $this->Article->Text ); ?></textarea>
            </div>
            <div class="form-field-name">
                Image :
            </div>
            <div>
                <input class="form-input" name="Image" type="text" value="<?php echo htmlspecialchars( $this->Article->Image ); ?>" readonly/>
                <div class="form-upload-container">
                    <img class="form-upload-image" src="/upload/image/<?php echo htmlspecialchars( $this->Article->Image ); ?>" onerror="this.src='/upload/image/missing_image.svg'"/>
                </div>
            </div>
            <div class="form-field-name">
                Video :
            </div>
            <div>
                <input class="form-input" name="Video" type="text" value="<?php echo htmlspecialchars( $this->Article->Video ); ?>" readonly/>
                <div class="form-upload-container">
                    <video class="form-upload-video" src="/upload/video/<?php echo htmlspecialchars( $this->Article->Video ); ?>" type="video/mp4" onerror="this.src='/upload/video/missing_video.mp4'"></video>
                </div>
            </div>
            <div class="form-field-name">
                Section Slug :
            </div>
            <div>
                    <input class="form-input" name="SectionSlug" type="text" value="<?php echo htmlspecialchars( $this->Article->SectionSlug ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->PreviousPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
