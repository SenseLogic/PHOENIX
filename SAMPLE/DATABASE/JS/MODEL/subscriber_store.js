// -- TYPES

class SUBSCRIBER_STORE extends VISTA_STORE
{
    // -- CONSTRUCTORS

    constructor(
        )
    {
        super(
            SUBSCRIBER,
            "Uuid",
            [ "Id", "Email", "IpAddress", "Browser", "Latitude", "Longitude", "CountryCode", "DateTime" ],
            "/api/subscriber",
            "Subscriber"
            );
    }
}
