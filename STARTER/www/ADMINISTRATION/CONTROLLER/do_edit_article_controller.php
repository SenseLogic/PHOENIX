<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../../MODEL/article_model.php';

// -- TYPES

class DO_EDIT_ARTICLE_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $article_id
        )
    {
        parent::__construct();

         $title = GetPostValue( 'Title' );
         $slug = GetPostValue( 'Slug' );
         $text = GetPostValue( 'Text' );
         $image = GetPostValue( 'Image' );
         $video = GetPostValue( 'Video' );
         $section_slug = GetPostValue( 'SectionSlug' );

        SetDatabaseArticle( $article_id, $title, $slug, $text, $image, $video, $section_slug );

        Redirect( '/admin/article' );
    }
}

// -- STATEMENTS

 $do_edit_article_controller = new DO_EDIT_ARTICLE_CONTROLLER(  $article_id );
