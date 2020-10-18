// -- TYPES

class SECTION_STORE extends VISTA_STORE
{
    // -- CONSTRUCTORS

    constructor(
        )
    {
        super(
            SECTION,
            "Uuid",
            [ "Id", "Number", "Name", "Text", "Image" ],
            "/api/section",
            "Section"
            );
    }
}
