<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class VIEW_ARTICLES_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'View articles';
        $this->ArticleArray = GetDatabaseArticleArray();

        SetSessionValue( 'PreviousPage', GetRequest() );

        require_once __DIR__ . '/' . '../VIEW/view_articles_view.php';
    }
}

// -- STATEMENTS

 $view_articles_controller = new VIEW_ARTICLES_CONTROLLER();
