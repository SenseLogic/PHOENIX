<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class DO_ADD_ARTICLE_CONTROLLER extends CONTROLLER
{
    function __construct(
        )
    {
        parent::__construct();

         $section_id = GetPostValue( 'SectionId' );
         $user_id = GetPostValue( 'UserId' );
         $title = GetPostValue( 'Title' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $video = GetPostValue( 'Video' );
         $date = GetPostValue( 'Date' );

        AddDatabaseArticle( $section_id, $user_id, $title, $text, $image, $video, $date );

        Redirect( '/admin/article' );
    }
}

// -- STATEMENTS

 $do_add_article_controller = new DO_ADD_ARTICLE_CONTROLLER();
