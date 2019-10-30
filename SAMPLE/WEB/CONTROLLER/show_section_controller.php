<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/article.php';
require_once __DIR__ . '/' . '../MODEL/section.php';
require_once __DIR__ . '/' . '../MODEL/user.php';

// -- TYPES

class SHOW_SECTION_CONTROLLER extends CONTROLLER
{
    function __construct(
        int $section_id
        )
    {
        parent::__construct();

        $this->Session->Path = GetPath();
        $this->Session->Store();

        $this->SectionArray = GetSectionArray();

        if ( $section_id <= 0 )
        {
            $section_id = $this->SectionArray[ 0 ]->Id;
        }

        $this->Section = GetSectionById( $section_id );
        $this->ArticleArray = GetArticleArrayBySectionId( $section_id );

        $this->Section->ImageIndex = $section_id % 20;
        InflateArticleArray( $this->ArticleArray );

        require_once __DIR__ . '/' . '../VIEW/show_section_view.php';
        require_once __DIR__ . '/' . '../VIEW/show_page_view.php';
    }
}

// -- STATEMENTS

 $show_section_controller = new SHOW_SECTION_CONTROLLER(  $section_id );
