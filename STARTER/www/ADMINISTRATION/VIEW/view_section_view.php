<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container">
            <div class="form-field-name">
                Name :
            </div>
            <div>
                    <input class="form-input" name="Name" type="text" value="<?php echo htmlspecialchars( $this->Section->Name ); ?>" readonly/>
            </div>
            <div class="form-field-name">
                Slug :
            </div>
            <div>
                    <input class="form-input" name="Slug" type="text" value="<?php echo htmlspecialchars( $this->Section->Slug ); ?>" readonly/>
            </div>
            <a class="justify-self-start form-button form-button-large cancel-button" href="<?php echo htmlspecialchars( $this->PreviousPage ); ?>">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
