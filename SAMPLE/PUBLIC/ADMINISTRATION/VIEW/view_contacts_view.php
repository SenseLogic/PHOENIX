<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div class="">
    <div class="page-section form-section">
        <div class="form-container table-container contact-table">
            <div class="form-column-name">
                Name
            </div>
            <div class="form-column-name">
                Email
            </div>
            <div class="form-column-name">
                Message
            </div>
            <div class="form-column-name">
                DateTime
            </div>
            <div class="form-column-name">
                Action
            </div>
            <?php foreach ( $this->ContactArray as  $contact ) { ?>
                <div>
                    <?php echo htmlspecialchars( $contact->Name ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $contact->Email ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $contact->Message ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $contact->DateTime ); ?>
                </div>
                <div class="form-centered">
                    <a class="form-button view-button" href="/admin/contact/view/<?php echo htmlspecialchars( $contact->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/contact/edit/<?php echo htmlspecialchars( $contact->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/contact/remove/<?php echo htmlspecialchars( $contact->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered">
                <a class="form-button form-button-large add-button" href="/admin/contact/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
