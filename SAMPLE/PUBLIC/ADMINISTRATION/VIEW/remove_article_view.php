<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/article/remove/<?php echo htmlspecialchars( $this->Article->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    Section Id :
                </div>
                <div>
                    <input class="form-input" name="SectionId" type="text" value="<?php echo htmlspecialchars( $this->Article->SectionId ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    User Id :
                </div>
                <div>
                    <input class="form-input" name="UserId" type="text" value="<?php echo htmlspecialchars( $this->Article->UserId ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    Title :
                </div>
                <div>
                    <input class="form-input" name="Title" type="text" value="<?php echo htmlspecialchars( $this->Article->Title ); ?>" readonly/>
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
                        <img class="form-upload-image" src="/upload/image/<?php echo htmlspecialchars( $this->Article->Image ); ?>" onerror="this.src='/static/image/icon/admin/missing_icon.svg'"/>
                    </div>
                </div>
                <div class="form-field-name">
                    Date :
                </div>
                <div>
                    <input class="form-input" name="Date" type="text" value="<?php echo htmlspecialchars( $this->Article->Date ); ?>" readonly/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/article">
                </a>
                <button class="justify-self-end form-button-large form-button form-button-large remove-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
