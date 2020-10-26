<script src="/static/script/jquery-3.2.1.min.js"></script>
<script src="/static/script/vista_base.js"></script>
<script src="/static/script/vista_element.js"></script>
<script src="/static/script/vista_animation.js"></script>
<script src="/static/script/vista_request.js"></script>
<script>
    function HandleImageNameInputChangeEvent(
        path_element
        )
    {
        path_element.nextElementSibling.firstElementChild.src = "/upload/image/" + path_element.value;
    }

    // ~~

    async function HandleImageFileInputChangeEvent(
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
            request = await SendRequest( "/admin/upload/image", "POST", form_data );

            if ( request.status === 201 )
            {
                file_path = GetJsonObject( request.response );
                file_element.parentElement.previousElementSibling.src = "/upload/image/" + file_path;
                file_element.parentElement.parentElement.previousElementSibling.value = file_path;
            }
        }
    }
</script>
