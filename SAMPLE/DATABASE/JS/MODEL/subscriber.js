// -- TYPES

class SUBSCRIBER extends VISTA_DATA
{
    // -- CONSTRUCTORS

    constructor(
        )
    {
        super();
        
        this.Id = 0;
        this.Email = "";
        this.IpAddress = "";
        this.Browser = "";
        this.Latitude = 0.0;
        this.Longitude = 0.0;
        this.CountryCode = "";
        this.DateTime = "1970-01-01 00:00:00";
    }
}
