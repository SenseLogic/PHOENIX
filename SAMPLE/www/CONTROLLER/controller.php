<?php // -- IMPORTS

require_once __DIR__ . '/' . '../MODEL/session.php';

// -- TYPES

class CONTROLLER
{
    // -- CONSTRUCTORS

    function __construct(
        string $language_code = "en"
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
