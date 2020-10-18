<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div class="">
    <div class="page-section form-section">
        <div class="form-container table-container text-table">
            <div class="form-column-name">
                Slug
            </div>
            <div class="form-column-name">
                Text
            </div>
            <div class="form-column-name">
                Action
            </div>
            <?php foreach ( $this->TextArray as  $text ) { ?>
                <div>
                    <?php echo htmlspecialchars( $text->Slug ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $text->Text ); ?>
                </div>
                <div class="form-centered">
                    <a class="form-button view-button" href="/admin/text/view/<?php echo htmlspecialchars( $text->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/text/edit/<?php echo htmlspecialchars( $text->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/text/remove/<?php echo htmlspecialchars( $text->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered">
                <a class="form-button form-button-large add-button" href="/admin/text/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
