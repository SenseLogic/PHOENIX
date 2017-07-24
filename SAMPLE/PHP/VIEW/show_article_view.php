<?php ob_start(); ?>
    <h2>
        <a href="/show_section/<?php echo $this->Section->Id; ?>">
            <?php echo $this->Section->Name; ?>
        </a>
    </h2>
    <h4>
        <a href="/show_article/<?php echo $this->Article->Id; ?>">
            <?php echo $this->Article->Title; ?>
        </a>
    </h4>
    <h5>
        <?php echo $this->Article->User->Pseudonym; ?> - <?php echo $this->Article->Date; ?>
    </h5>
    <img class="responsive-img" src="/static/img/<?php echo $this->Article->ImageIndex; ?>.jpg"/>
    <p>
        <?php echo $this->Article->Text; ?>
    </p>
    <hr/>
    <?php if ( $this->Session->UserIsConnected ) { ?>
        <h4>
            Comment
        </h4>
        <form action="/add_comment/<?php echo $this->Article->Id; ?>/" method="post">
            <label for="text">
                Text :
            </label>
            <textarea id="text" name="text"/></textarea>
            <input type="submit" value="Send">
        </form>
    <?php } ?>
    <br/>
    <?php foreach ( $this->CommentArray as  $comment ) { ?>
        <h5>
            <?php echo $comment->User->Pseudonym; ?> - <?php echo $comment->Date; ?>
        </h5>
        <p>
            <?php echo $comment->Text; ?>
        </p>
    <?php } ?>
<?php $this->MainContent = ob_get_clean(); ?>
