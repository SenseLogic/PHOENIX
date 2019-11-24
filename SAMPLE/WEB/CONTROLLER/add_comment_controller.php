<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/article.php';
require_once __DIR__ . '/' . '../MODEL/comment.php';
require_once __DIR__ . '/' . '../MODEL/session.php';

// -- TYPES

class ADD_COMMENT_CONTROLLER extends CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        int $article_id
        )
    {
        parent::__construct( $language_code );

         $text = GetPostValue( 'Text' );
        $this->Article = GetDatabaseArticleById( $article_id );
        AddDatabaseComment( $article_id, $this->Session->User->Id, $text );

        $this->Session->Message = 'Your comment has been added.';
        $this->Session->Store();

        Redirect( $this->Session->Path );
    }
}

// -- STATEMENTS

 $add_comment_controller = new ADD_COMMENT_CONTROLLER(  $language_code,  $article_id );
