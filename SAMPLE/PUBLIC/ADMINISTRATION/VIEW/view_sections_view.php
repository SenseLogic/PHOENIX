<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container section-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                Number
            </div>
            <div class="form-column-name sortable-grid-column">
                Name
            </div>
            <div class="form-column-name sortable-grid-column">
                Text
            </div>
            <div class="form-column-name sortable-grid-column">
                Image
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->SectionArray as  $section ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $section->Number ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $section->Name ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $section->Text ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $section->Image ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/section/view/<?php echo htmlspecialchars( $section->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/section/edit/<?php echo htmlspecialchars( $section->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/section/remove/<?php echo htmlspecialchars( $section->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/section/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/' . '../../FRAMEWORK/sortable_grid.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
