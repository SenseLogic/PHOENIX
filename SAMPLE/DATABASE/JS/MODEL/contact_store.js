// -- TYPES

class CONTACT_STORE extends VISTA_STORE
{
    // -- CONSTRUCTORS

    constructor(
        )
    {
        super(
            CONTACT,
            "Uuid",
            [ "Id", "Name", "Email", "Message", "DateTime" ],
            "/api/contact",
            "Contact"
            );
    }
}
