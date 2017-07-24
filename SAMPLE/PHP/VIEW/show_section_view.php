<?php ob_start(); ?>
    <h2>
        <a href="/show_section/<?php echo $this->Section->Id; ?>">
            <?php echo $this->Section->Name; ?>
        </a>
    </h2>
    <img class="responsive-img" src="/static/img/<?php echo $this->Section->ImageIndex; ?>.jpg"/>
    <p>
        <?php echo $this->Section->Text; ?>
    </p>
    <hr/>
    <?php foreach ( $this->ArticleArray as  $article ) { ?>
        <h5>
            <a href="/show_article/<?php echo $article->Id; ?>">
                <?php echo $article->Title; ?>
            </a>
        </h5>
        <h6>
            <?php echo $article->User->Pseudonym; ?> - <?php echo $article->Date; ?>
        </h6>
    <?php } ?>
<?php $this->MainContent = ob_get_clean(); ?>
