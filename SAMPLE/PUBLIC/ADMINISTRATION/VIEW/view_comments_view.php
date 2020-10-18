<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div class="">
    <div class="page-section form-section">
        <div class="form-container table-container comment-table">
            <div class="form-column-name">
                ArticleId
            </div>
            <div class="form-column-name">
                UserId
            </div>
            <div class="form-column-name">
                Text
            </div>
            <div class="form-column-name">
                DateTime
            </div>
            <div class="form-column-name">
                Action
            </div>
            <?php foreach ( $this->CommentArray as  $comment ) { ?>
                <div>
                    <?php echo htmlspecialchars( $comment->ArticleId ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $comment->UserId ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $comment->Text ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $comment->DateTime ); ?>
                </div>
                <div class="form-centered">
                    <a class="form-button view-button" href="/admin/comment/view/<?php echo htmlspecialchars( $comment->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/comment/edit/<?php echo htmlspecialchars( $comment->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/comment/remove/<?php echo htmlspecialchars( $comment->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered">
                <a class="form-button form-button-large add-button" href="/admin/comment/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
