<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container text-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                Slug
            </div>
            <div class="form-column-name sortable-grid-column">
                Text
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->TextArray as  $text ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $text->Slug ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $text->Text ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/text/view/<?php echo htmlspecialchars( $text->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/text/edit/<?php echo htmlspecialchars( $text->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/text/remove/<?php echo htmlspecialchars( $text->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/text/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/' . '../../FRAMEWORK/sortable_grid.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
