<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div class="">
    <div class="page-section form-section">
        <div class="form-container table-container subscriber-table">
            <div class="form-column-name">
                Email
            </div>
            <div class="form-column-name">
                IpAddress
            </div>
            <div class="form-column-name">
                Browser
            </div>
            <div class="form-column-name">
                Latitude
            </div>
            <div class="form-column-name">
                Longitude
            </div>
            <div class="form-column-name">
                CountryCode
            </div>
            <div class="form-column-name">
                DateTime
            </div>
            <div class="form-column-name">
                Action
            </div>
            <?php foreach ( $this->SubscriberArray as  $subscriber ) { ?>
                <div>
                    <?php echo htmlspecialchars( $subscriber->Email ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $subscriber->IpAddress ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $subscriber->Browser ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $subscriber->Latitude ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $subscriber->Longitude ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $subscriber->CountryCode ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $subscriber->DateTime ); ?>
                </div>
                <div class="form-centered">
                    <a class="form-button view-button" href="/admin/subscriber/view/<?php echo htmlspecialchars( $subscriber->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/subscriber/edit/<?php echo htmlspecialchars( $subscriber->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/subscriber/remove/<?php echo htmlspecialchars( $subscriber->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered">
                <a class="form-button form-button-large add-button" href="/admin/subscriber/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
