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

         $title = GetPostValue( 'Title' );
         $slug = GetPostValue( 'Slug' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $video = GetPostValue( 'Video' );
         $section_slug = GetPostValue( 'SectionSlug' );

        AddDatabaseArticle( $title, $slug, $text, $image, $video, $section_slug );

        Redirect( '/admin/article' );
    }
}

// -- STATEMENTS

 $do_add_article_controller = new DO_ADD_ARTICLE_CONTROLLER();
