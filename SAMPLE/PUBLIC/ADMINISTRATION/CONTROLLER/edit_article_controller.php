<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class EDIT_ARTICLE_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $article_id
        )
    {
        parent::__construct();

        $this->Title = 'Edit a article';
        $this->Article = GetDatabaseArticleById( $article_id );

        require_once __DIR__ . '/' . '../VIEW/edit_article_view.php';
    }
}

// -- STATEMENTS

 $edit_article_controller = new EDIT_ARTICLE_CONTROLLER(  $article_id );
