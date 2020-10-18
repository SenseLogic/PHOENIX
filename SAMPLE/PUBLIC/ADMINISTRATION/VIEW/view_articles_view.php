<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div class="">
    <div class="page-section form-section">
        <div class="form-container table-container article-table">
            <div class="form-column-name">
                SectionId
            </div>
            <div class="form-column-name">
                UserId
            </div>
            <div class="form-column-name">
                Title
            </div>
            <div class="form-column-name">
                Text
            </div>
            <div class="form-column-name">
                Image
            </div>
            <div class="form-column-name">
                Date
            </div>
            <div class="form-column-name">
                Action
            </div>
            <?php foreach ( $this->ArticleArray as  $article ) { ?>
                <div>
                    <?php echo htmlspecialchars( $article->SectionId ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $article->UserId ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $article->Title ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $article->Text ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $article->Image ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $article->Date ); ?>
                </div>
                <div class="form-centered">
                    <a class="form-button view-button" href="/admin/article/view/<?php echo htmlspecialchars( $article->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/article/edit/<?php echo htmlspecialchars( $article->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/article/remove/<?php echo htmlspecialchars( $article->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered">
                <a class="form-button form-button-large add-button" href="/admin/article/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
