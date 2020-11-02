<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class ADD_ARTICLE_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

        $this->Title = 'Add a article';

        require_once __DIR__ . '/' . '../VIEW/add_article_view.php';
    }
}

// -- STATEMENTS

 $add_article_controller = new ADD_ARTICLE_CONTROLLER();
