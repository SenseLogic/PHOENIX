<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/article.php';
require_once __DIR__ . '/' . '../MODEL/comment.php';
require_once __DIR__ . '/' . '../MODEL/model.php';
require_once __DIR__ . '/' . '../MODEL/section.php';
require_once __DIR__ . '/' . '../MODEL/session.php';
require_once __DIR__ . '/' . '../MODEL/user.php';

// -- TYPES

class SHOW_ARTICLE_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $article_id
        )
    {
        parent::__construct();

        $this->Session->Path = GetPath();
        $this->Session->Store();

        $this->SectionArray = GetDatabaseSectionArray();
        $this->Article = GetDatabaseArticleById( $article_id );
        $this->Section = GetDatabaseSectionById( $this->Article->SectionId );
        $this->CommentArray = GetDatabaseCommentArrayByArticleId( $article_id );

        $this->Article->ImageIndex = $this->Article->Id % 20;

        InflateDatabaseArticle( $this->Article );
        InflateDatabaseCommentArray( $this->CommentArray );

        require_once __DIR__ . '/' . '../VIEW/show_article_view.php';
        require_once __DIR__ . '/' . '../VIEW/show_page_view.php';
    }
}

// -- STATEMENTS

 $show_article_controller = new SHOW_ARTICLE_CONTROLLER(  $article_id );