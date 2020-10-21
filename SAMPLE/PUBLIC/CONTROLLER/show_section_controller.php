<?php // -- IMPORTS

require_once __DIR__ . '/' . 'view_controller.php';
require_once __DIR__ . '/' . '../MODEL/article_model.php';
require_once __DIR__ . '/' . '../MODEL/section_model.php';
require_once __DIR__ . '/' . '../MODEL/user_model.php';

// -- TYPES

class SHOW_SECTION_CONTROLLER extends VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code,
        int $section_id
        )
    {
        parent::__construct( $language_code );

        $this->Session->Path = GetPath();
        $this->Session->Store();

        $this->SectionArray = GetDatabaseSectionArray();

        if ( $section_id <= 0 )
        {
            $section_id = $this->SectionArray[ 0 ]->Id;
        }

        $this->Section = GetDatabaseSectionById( $section_id );
        $this->ArticleArray = GetDatabaseArticleArrayBySectionId( $section_id );

        $this->Section->ImageIndex = $section_id % 20;
        InflateDatabaseArticleArray( $this->ArticleArray );

        require_once __DIR__ . '/' . '../VIEW/show_section_view.php';
    }
}

// -- STATEMENTS

 $show_section_controller = new SHOW_SECTION_CONTROLLER(  $language_code,  $section_id );