<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class DO_REMOVE_ARTICLE_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $article_id
        )
    {
        parent::__construct();

        RemoveDatabaseArticleById( $article_id );

        Redirect( '/admin/article' );
    }
}

// -- STATEMENTS

 $do_remove_article_controller = new DO_REMOVE_ARTICLE_CONTROLLER(  $article_id );
