<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container user-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                Email
            </div>
            <div class="form-column-name sortable-grid-column">
                Pseudonym
            </div>
            <div class="form-column-name sortable-grid-column">
                Password
            </div>
            <div class="form-column-name sortable-grid-column">
                Is Administrator
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->UserArray as  $user ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $user->Email ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $user->Pseudonym ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $user->Password ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $user->IsAdministrator ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/user/view/<?php echo htmlspecialchars( $user->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/user/edit/<?php echo htmlspecialchars( $user->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/user/remove/<?php echo htmlspecialchars( $user->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/user/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/' . '../../FRAMEWORK/sortable_grid.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
