<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sweet alert</title>
	<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row justify-content-md-center mt-5">
			<div class="col-lg-6">
				<div class="card border-0 shadow-lg">
					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Enter the Number..">
							</div>
							<div class="form-group">
								<input type="text" name="password" class="form-control" placeholder="Enter passwrd">
							</div>
							<div class="form-group text-center">
								<button type="submit" name="submit" class="btn btn-success btn-sm col-4 font-weight-bold">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<?php 
session_start();
 if (isset($_POST['submit'])) {
 	$name=$_POST['name'];
 	$password=$_POST['password'];
 	//$hash=md5($password);
 	if ($name == 'kishan' && $password=='Kishan') {
 		$_SESSION['user']=$name;
 		?>
			<script>
				sweetAlert(
					{
					    title: "Welcome to Login!",
					    text: "Just wait for the email!",
					    type: "success"
					},

					function () {
					    window.location.href = 'second.php';
					});
			</script>
 		<?php
 		//header('location:rectangle.php');
 	}else{ 
 		?>
			<script>
				swal("Incorrect Code", "You clicked the button!", "error");
			</script>
 		<?php
 	}
 }
?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>