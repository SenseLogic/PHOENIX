<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div class="">
    <div class="page-section form-section">
        <div class="form-container table-container user-table">
            <div class="form-column-name">
                Email
            </div>
            <div class="form-column-name">
                Password
            </div>
            <div class="form-column-name">
                IsAdministrator
            </div>
            <div class="form-column-name">
                Action
            </div>
            <?php foreach ( $this->UserArray as  $user ) { ?>
                <div>
                    <?php echo htmlspecialchars( $user->Email ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $user->Password ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $user->IsAdministrator ); ?>
                </div>
                <div class="form-centered">
                    <a class="form-button view-button" href="/admin/user/view/<?php echo htmlspecialchars( $user->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/user/edit/<?php echo htmlspecialchars( $user->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/user/remove/<?php echo htmlspecialchars( $user->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered">
                <a class="form-button form-button-large add-button" href="/admin/user/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
