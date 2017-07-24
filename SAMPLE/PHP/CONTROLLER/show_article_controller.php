<?php require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/article.php';
require_once __DIR__ . '/' . '../MODEL/comment.php';
require_once __DIR__ . '/' . '../MODEL/section.php';
require_once __DIR__ . '/' . '../MODEL/session.php';
require_once __DIR__ . '/' . '../MODEL/user.php';

// ~~

class SHOW_ARTICLE_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $article_id
        )
    {
        parent::__construct();

        $this->Session->Path = GetPath();
        $this->Session->Store();

        $this->SectionArray = GetSectionArray();
        $this->Article = GetArticleById( $article_id );
        $this->Section = GetSectionById( $this->Article->SectionId );
        $this->CommentArray = GetCommentArrayByArticleId( $article_id );

        $this->Article->ImageIndex = $this->Article->Id % 20;
        InflateArticle( $this->Article );
        InflateCommentArray( $this->CommentArray );

        require_once __DIR__ . '/' . '../VIEW/show_article_view.php';
        require_once __DIR__ . '/' . '../VIEW/show_page_view.php';
    }
}

// ~~

 $show_article_controller = new SHOW_ARTICLE_CONTROLLER(  $article_id );
