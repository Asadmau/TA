<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
    
	<title>Hello, world!</title>
  </head>
  <body>
	  <div class="container">
		  <div class="row">
			  <div class="col-10">
				  <nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="{{url('/')}}">Navbar</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-item nav-link active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
							<a class="nav-item nav-link" href="/produk">Produk</a>
							<a class="nav-item nav-link" href="/satuan">Satuan</a>
							<a class="nav-item nav-link " href="/speck" >Speck</a>
							<a class="nav-item nav-link " href="/dbl" >dbl</a>
							<a class="nav-item nav-link " href="/dbr" >dbr</a>
						</div>
					</div>
				</nav>
			  </div>
		  </div>
	  </div>
	@yield('container')

	
	
	<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	  {{-- datatable --}}
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js|https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js" 
	  type="text/javascript" ></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript" ></script>

	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" type="text/javascript" ></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" type="text/javascript" ></script>
	<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js" type="text/javascript" ></script>
	<script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js" type="text/javascript" ></script>
	
 <script>
//     $(document).ready(function() {
//     $('#data_table_subkategori')
// 	.DataTable({
//     	responsive: true
// 	});
// } );
$(document).ready(function() {
    $('#data_table_subkategori').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
} );
</script>
</body>
	</html>