<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../MODEL/article_model.php';
require_once __DIR__ . '/' . '../MODEL/comment_model.php';
require_once __DIR__ . '/' . '../MODEL/section_model.php';
require_once __DIR__ . '/' . '../MODEL/user_model.php';

// -- TYPES

class SHOW_ARTICLE_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        int $article_id
        )
    {
        parent::__construct( $language_code );

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
    }
}

// -- STATEMENTS

 $show_article_controller = new SHOW_ARTICLE_CONTROLLER(  $language_code,  $article_id );
