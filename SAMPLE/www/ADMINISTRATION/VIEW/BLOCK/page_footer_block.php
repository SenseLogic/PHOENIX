                </div>
            </div>
        </div>
        <script>
            GetElements( ".form-textarea" )
                .SetContentHeight()
                .AddEventListener( "input", ( event ) => event.target.SetContentHeight() );
        </script>
    </body>
</html>
