// -- TYPES

class USER_STORE extends VISTA_STORE
{
    // -- CONSTRUCTORS

    constructor(
        )
    {
        super(
            USER,
            "Uuid",
            [ "Id", "Email", "Password", "IsAdministrator" ],
            "/api/user",
            "User"
            );
    }
}
