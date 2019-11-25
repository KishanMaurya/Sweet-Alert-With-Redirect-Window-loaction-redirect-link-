<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Second Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-secondary">
	<div class="container-fluid">
		<div class="row bg-dark">
			<div class="col-lg-8">
				<h3 class="text-white display-4 pt-4 pb-4">
				Sweet Alert With Code Login </h3>
			</div>
			<div class="col-lg-4 text-right ">
				<h3 class="pr-5 text-white display-4 pt-4 pb-4"><?php echo $_SESSION['user'];?></h3>
			</div>
		</div>
	</div>
</body>
</html>