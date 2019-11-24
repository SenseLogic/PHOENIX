<style>
    .sortable-table th
    {
        cursor: pointer;
    }
</style>
<script>
    $( ".sortable-column" ).click(
        function()
        {
            function GetCellValue( row, cell_index )
            {
                return $( row ).children( "td" ).eq( cell_index ).text();
            }

            function GetCellComparison( cell_index, order_is_ascending )
            {
                return (
                    function( first_row, second_row )
                    {
                        var cell_comparison = 0;
                        var first_cell_value = GetCellValue( first_row, cell_index ).trim();
                        var second_cell_value = GetCellValue( second_row, cell_index ).trim();

                        if ( $.isNumeric( first_cell_value )
                             && $.isNumeric( second_cell_value ) )
                        {
                            cell_comparison = first_cell_value - second_cell_value;
                        }
                        else if ( first_cell_value < second_cell_value )
                        {
                            cell_comparison = -1;
                        }
                        else if ( first_cell_value > second_cell_value )
                        {
                            cell_comparison = 1;
                        }

                        if ( !order_is_ascending )
                        {
                            cell_comparison = -cell_comparison;
                        }
                    }
                    );
            }

            this.OrderIsAscending = !this.OrderIsAscending;

            var order_is_ascending = ( this.OrderIsAscending == ( this.classList.contains( "order-is-descending" ) < 0 ) );
            var sortable_table = $( this ).parents( ".sortable-table" ).eq( 0 );
            var row_array = sortable_table.find( "tr:gt(0)" ).toArray();
            var sorted_row_array = row_array.sort( GetCellComparison( $( this ).index(), order_is_ascending ) );

            for ( var sorted_row_index = 0;
                  sorted_row_index < sorted_row_array.length;
                  ++sorted_row_index )
            {
                sortable_table.append( sorted_row_array[ sorted_row_index ] );
            }
        }
        );
</script>
