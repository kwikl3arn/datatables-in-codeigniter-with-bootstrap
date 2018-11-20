<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
        <style>
            .dataTables_filter, .dataTables_info { display: none; }
        </style>	
                
<script src=" https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
</head>
<body>

<div id="container" class="container">
	<h1>Welcome Dilip</h1>
	<div class="table table-responsive">
		<table class="table" id="datatable">
		<thead>
			<tr>
				<td>ID</td>
				<td>tweet</td>
                                <td>email</td>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
	</div>
	
</div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#datatable').DataTable( {
        "processing": true,
        "serverSide": true,

        "ajax": {
            "url": "<?php base_url(); ?>index.php/Demo/get_tweets",
            "type": "POST"
        },
            "dom": 'Bfrtip',
        "buttons": [
             'excel', 'pdf', 'print'
        ],      
        "columns": [
            { "data": "user_name" },
            { "data": "user_password" }, { "data": "email" }
       
        ]
    } );
} );
</script>
</body>
</html>