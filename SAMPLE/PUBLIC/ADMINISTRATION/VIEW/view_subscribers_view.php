<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container subscriber-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                Email
            </div>
            <div class="form-column-name sortable-grid-column">
                Ip Address
            </div>
            <div class="form-column-name sortable-grid-column">
                Browser
            </div>
            <div class="form-column-name sortable-grid-column">
                Latitude
            </div>
            <div class="form-column-name sortable-grid-column">
                Longitude
            </div>
            <div class="form-column-name sortable-grid-column">
                Country Code
            </div>
            <div class="form-column-name sortable-grid-column">
                Date Time
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->SubscriberArray as  $subscriber ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $subscriber->Email ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $subscriber->IpAddress ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $subscriber->Browser ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $subscriber->Latitude ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $subscriber->Longitude ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $subscriber->CountryCode ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $subscriber->DateTime ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/subscriber/view/<?php echo htmlspecialchars( $subscriber->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/subscriber/edit/<?php echo htmlspecialchars( $subscriber->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/subscriber/remove/<?php echo htmlspecialchars( $subscriber->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/subscriber/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/' . '../../FRAMEWORK/sortable_grid.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
