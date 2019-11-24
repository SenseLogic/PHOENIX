<?php ob_start(); ?>
    <h2>
        <a href="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/section/<?php echo htmlspecialchars( $this->Section->Id ); ?>">
            <?php echo htmlspecialchars( $this->Section->Name ); ?>
        </a>
    </h2>
    <img class="responsive-img" src="/static/img/<?php echo htmlspecialchars( $this->Section->ImageIndex ); ?>.jpg"/>
    <p>
        <?php echo htmlspecialchars( $this->Section->Text ); ?>
    </p>
    <hr/>
    <?php foreach ( $this->ArticleArray as  $article ) { ?>
        <h5>
            <a href="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/article/<?php echo htmlspecialchars( $article->Id ); ?>">
                <?php echo htmlspecialchars( $article->Title ); ?>
            </a>
        </h5>
        <h6>
            <?php echo htmlspecialchars( $article->User->Pseudonym ); ?> - <?php echo htmlspecialchars( $article->Date ); ?>
        </h6>
    <?php } ?>
<?php $this->MainContent = ob_get_clean(); ?>
