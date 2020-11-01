<?php require_once __DIR__ . '/' . 'BLOCK/page_header_block.php'; ?>
<h2>
    <a href="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/section/<?php echo htmlspecialchars( $this->Section->Id ); ?>">
        <?php echo htmlspecialchars( $this->Section->Name ); ?>
    </a>
</h2>
<h4>
    <a href="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/article/<?php echo htmlspecialchars( $this->Article->Id ); ?>">
        <?php echo htmlspecialchars( $this->Article->Title ); ?>
    </a>
</h4>
<h5>
    <?php echo htmlspecialchars( $this->Article->User->Pseudonym ); ?> - <?php echo htmlspecialchars( $this->Article->Date ); ?>
</h5>
<img class="full-width responsive-img" src="/upload/image/<?php echo htmlspecialchars( $this->Article->Image ); ?>"/>
<p>
    <?php echo htmlspecialchars( $this->Article->Text ); ?>
</p>
<video class="full-width responsive-video" autoplay muted loop><source src="/upload/video/<?php echo htmlspecialchars( $this->Article->Video ); ?>"/></video>
<hr/>
<?php if ( $this->Session->UserIsConnected ) { ?>
    <h4>
        Comment
    </h4>
    <form name="AddComment" action="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/comment/<?php echo htmlspecialchars( $this->Article->Id ); ?>/" method="post">
        <label for="text">
            Text :
        </label>
        <textarea id="text" name="Text"/></textarea>
        <input type="submit" value="Send">
    </form>
<?php } ?>
<br/>
<?php foreach ( $this->CommentArray as  $comment ) { ?>
    <h5>
        <?php echo htmlspecialchars( $comment->User->Pseudonym ); ?> - <?php echo htmlspecialchars( $comment->DateTime ); ?>
    </h5>
    <p>
        <?php echo htmlspecialchars( $comment->Text ); ?>
    </p>
<?php } ?>
<?php require_once __DIR__ . '/' . 'BLOCK/page_footer_block.php'; ?>
