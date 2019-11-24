<?php // -- IMPORTS

require_once __DIR__ . '/' . '../MODEL/session.php';

// -- TYPES

class VIEW_CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code
        )
    {
        $this->Session = new SESSION();

        $this->LanguageCode = $language_code;
    }

    // -- INQUIRIES

    function GetTranslatedText(
        string $text
        )
    {
        return GetTranslatedText( $text, $this->LanguageCode );
    }
}
