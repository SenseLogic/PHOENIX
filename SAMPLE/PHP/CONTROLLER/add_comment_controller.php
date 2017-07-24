<?php require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/article.php';
require_once __DIR__ . '/' . '../MODEL/comment.php';
require_once __DIR__ . '/' . '../MODEL/session.php';

// ~~

class ADD_COMMENT_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $article_id
        )
    {
        parent::__construct();

         $text = GetPostValue( 'text' );
        $this->Article = GetArticleById( $article_id );
        AddComment( $text, $article_id, $this->Session->User->Id );

        $this->Session->Message = 'Your comment has been added.';
        $this->Session->Store();

        Reload( $this->Session->Path );
    }
}

// ~~

 $add_comment_controller = new ADD_COMMENT_CONTROLLER(  $article_id );
