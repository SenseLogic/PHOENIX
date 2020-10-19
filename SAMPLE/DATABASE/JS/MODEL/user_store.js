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
            [ "Id", "Email", "Pseudonym", "Password", "IsAdministrator" ],
            "/api/user",
            "User"
            );
    }
}
