$(document).ready(function() {
    var table = $('#Mytables').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 1 }
        ],
        "order": [[ 1, 'asc' ]],
        "displayLength": 5,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(3, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td>'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#Mytables tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 1 && currentOrder[1] === 'asc' ) {
            table.order( [ 1, 'desc' ] ).draw();
        }
        else {
            table.order( [ 1, 'asc' ] ).draw();
        }
    } );
} );