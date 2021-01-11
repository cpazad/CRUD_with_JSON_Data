<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUDwithAjax</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				<div class="mess"></div>
				<form id="student_form">
					<div class="form-group">
						<label for="">Name</label>
						<input name ="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name ="email" class="form-control" type="email">
					</div>
					<div class="form-group">
						<label for="">photo</label>
						<input name ="photo" class="form-control" type="file">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" id="signUp" type="submit" value="Sign Up">
					</div>
					
				</form>
			</div>
		</div>
	</div>

	<div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Asraful Haque</td>
							<td>haq@gmail.com</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
						
						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<script>
		$("form#student_form").submit(function (e) {
			e.preventDefault(); 
		
			$.ajax({
				url : 'db.php',
				method : 'POST',
				data : new FormData(this),
				contentType: false,
				processData:false,
				success : function (output) {
					$('.mess').html(output);
					$('form#student_form')[0].reset();
				}

			});
			
		});

	</script>
</body>
</html>