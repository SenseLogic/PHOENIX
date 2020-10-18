// -- TYPES

class ARTICLE_STORE extends VISTA_STORE
{
    // -- CONSTRUCTORS

    constructor(
        )
    {
        super(
            ARTICLE,
            "Uuid",
            [ "Id", "SectionId", "UserId", "Title", "Text", "Image", "Date" ],
            "/api/article",
            "Article"
            );
    }
}
