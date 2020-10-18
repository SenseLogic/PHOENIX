// -- TYPES

class TEXT_STORE extends VISTA_STORE
{
    // -- CONSTRUCTORS

    constructor(
        )
    {
        super(
            TEXT,
            "Uuid",
            [ "Id", "Slug", "Text" ],
            "/api/text",
            "Text"
            );
    }
}
