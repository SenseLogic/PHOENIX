<script src="/static/js/jquery-3.2.1.min.js"></script>
<script src="/static/js/vista_base.js"></script>
<script src="/static/js/vista_element.js"></script>
<script src="/static/js/vista_animation.js"></script>
<script src="/static/js/vista_request.js"></script>
<script>
    async function HandleFileChangeEvent(
        file_element
        )
    {
        var
            file_element,
            request,
            form_data;

        if ( file_element.files.length > 0 )
        {
            form_data = new FormData();
            form_data.append( "file", file_element.files[ 0 ] );
            request = await SendRequest( "/admin/upload", "POST", form_data );

            if ( request.status === 201 )
            {
                file_path = GetJsonObject( request.response );
                file_element.parentElement.previousElementSibling.src = "/upload/image/" + file_path;
                file_element.parentElement.parentElement.previousElementSibling.value = file_path;
            }
        }
    }
</script>
