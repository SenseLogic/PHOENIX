// -- TYPES

class COMMENT_STORE extends VISTA_STORE
{
    // -- CONSTRUCTORS

    constructor(
        )
    {
        super(
            COMMENT,
            "Uuid",
            [ "Id", "ArticleId", "UserId", "Text", "DateTime" ],
            "/api/comment",
            "Comment"
            );
    }
}
