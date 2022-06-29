<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>Avatar</th>
						<th>Email</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Action</th>
					</tr>
					<tbody id="load_table_data"></tbody>
				</table>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
    	$.ajax({
    		url : 'https://reqres.in/api/users',
    		type : 'GET',
    		success : function(response){
    			console.log(response);

    			if(response){
					$.each(response.data, function(key, value){

						$('#load_table_data').append("<tr>"
						                        + "<td>" + value.id  + "</td>" + 
						                        "<td><img src="+ value.avatar +" style='height:30px;'></td>" + 
						                        "<td>" + value.email  + "</td>" +
						                        "<td>" + value.first_name  + "</td>" +
						                        "<td>" + value.last_name  + "</td>" +
						                        "<td> <button class='btn btn-warning btn-sm mx-1'>Edit</button><button class='btn btn-danger btn-sm'>Delete</button></td>" +
						                        "</tr>");
						})
				}
    		}
    	});	
    </script>
</body>
</html>