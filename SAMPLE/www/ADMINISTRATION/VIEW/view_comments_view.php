<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <div class="form-container table-container comment-table sortable-grid">
            <div class="form-column-name sortable-grid-column">
                Article Id
            </div>
            <div class="form-column-name sortable-grid-column">
                User Id
            </div>
            <div class="form-column-name sortable-grid-column">
                Text
            </div>
            <div class="form-column-name sortable-grid-column">
                Date Time
            </div>
            <div class="form-column-name sortable-grid-column">
                Action
            </div>
            <?php foreach ( $this->CommentArray as  $comment ) { ?>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $comment->ArticleId ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $comment->UserId ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $comment->Text ); ?>
                </div>
                <div class="sortable-grid-cell">
                    <?php echo htmlspecialchars( $comment->DateTime ); ?>
                </div>
                <div class="form-centered sortable-grid-cell">
                    <a class="form-button view-button" href="/admin/comment/view/<?php echo htmlspecialchars( $comment->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/comment/edit/<?php echo htmlspecialchars( $comment->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/comment/remove/<?php echo htmlspecialchars( $comment->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered sortable-grid-footer">
                <a class="form-button form-button-large add-button" href="/admin/comment/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/' . '../../FRAMEWORK/sortable_grid.php'; ?>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
