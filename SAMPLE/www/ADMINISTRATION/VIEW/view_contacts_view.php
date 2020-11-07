<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container contact-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                Name
            </div>
            <div class="form-column-name sortable-grid-column">
                Email
            </div>
            <div class="form-column-name sortable-grid-column">
                Message
            </div>
            <div class="form-column-name sortable-grid-column">
                Date Time
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->ContactArray as  $contact ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $contact->Name ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $contact->Email ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $contact->Message ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $contact->DateTime ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/contact/view/<?php echo htmlspecialchars( $contact->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/contact/edit/<?php echo htmlspecialchars( $contact->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/contact/remove/<?php echo htmlspecialchars( $contact->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/contact/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/' . '../../FRAMEWORK/sortable_grid.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
