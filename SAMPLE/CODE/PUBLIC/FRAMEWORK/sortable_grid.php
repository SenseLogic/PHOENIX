<style>
    .sortable-grid-column
    {
        cursor: pointer;
    }

    .sortable-grid-column.order-is-ascending:after
    {
        position: absolute;
        content: "\00a0\25B2";
    }

    .sortable-grid-column.order-is-descending:after
    {
        position: absolute;
        content: "\00a0\25BC";
    }
</style>
<script>
    $( document ).ready(
        function ()
        {
            var column_array = $( ".sortable-grid-column" );

            column_array.each(
                function ( index )
                {
                    this.OrderIsDescending = ( this.classList.contains( "order-is-descending" ) >= 0 );
                }
                );

            column_array.click(
                function()
                {
                    function GetCellValue( row, cell_index )
                    {
                        return row[ cell_index ].textContent;
                    }

                    function GetCellComparison( cell_index, order_is_descending )
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

                                if ( order_is_descending )
                                {
                                    cell_comparison = -cell_comparison;
                                }

                                return cell_comparison;
                            }
                            );
                    }

                    this.OrderIsDescending = !this.OrderIsDescending;
                    var order_is_descending = this.OrderIsDescending;
                    var table = $( this ).parents( ".sortable-grid" ).eq( 0 );
                    var column_array = table.find( ".sortable-grid-column" );
                    var column_count = column_array.length;
                    var sorted_column = this;
                    var sorted_column_index = $( this ).index();
                    var cell_array = table.find( ".sortable-grid-cell" ).toArray();
                    var footer_array = table.find( ".sortable-grid-footer" ).toArray();

                    column_array.each(
                        function ( index )
                        {
                            $( this ).removeClass( "order-is-ascending" ).removeClass( "order-is-descending" );

                            if ( this === sorted_column )
                            {
                                if ( order_is_descending )
                                {
                                    $( this ).addClass( "order-is-descending" );
                                }
                                else
                                {
                                    $( this ).addClass( "order-is-ascending" );
                                }
                            }
                        }
                        );

                    var row_array = [];
                    var row_index = 0;

                    for ( var cell_index = 0;
                          cell_index < cell_array.length;
                          ++cell_index )
                    {
                        if ( cell_index % column_count === 0 )
                        {
                            row_index = cell_index / column_count;
                            row_array[ row_index ] = [];
                        }

                        row_array[ row_index ].push( cell_array[ cell_index ] );
                    }

                    var sorted_row_array = row_array.sort( GetCellComparison( sorted_column_index, order_is_descending ) );

                    for ( var sorted_row of sorted_row_array )
                    {
                        for ( var sorted_cell of sorted_row )
                        {
                            table.append( sorted_cell );
                        }
                    }

                    for ( var footer of footer_array )
                    {
                        table.append( footer );
                    }
                }
                );
            }
        );
</script>
