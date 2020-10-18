<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                Name :
            </div>
            <div>
                <input class="form-input" name="Name" type="text" value="<?php echo htmlspecialchars( $this->Contact->Name ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Email :
            </div>
            <div>
                <input class="form-input" name="Email" type="text" value="<?php echo htmlspecialchars( $this->Contact->Email ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Message :
            </div>
            <div>
                <textarea class="form-textarea" name="Message" readonly><?php echo htmlspecialchars( $this->Contact->Message ); ?></textarea>
            </div>
            <div class="form-field-name">
                Date Time :
            </div>
            <div>
                <input class="form-input" name="DateTime" type="text" value="<?php echo htmlspecialchars( $this->Contact->DateTime ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->PreviousPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
