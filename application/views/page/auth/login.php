<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
	body {
		background: #007bff;
		background: linear-gradient(to right, #0062E6, #33AEFF);
	}

	.btn-login {
		font-size: 0.9rem;
		letter-spacing: 0.05rem;
		padding: 0.75rem 1rem;
	}

	.btn-google {
		color: white !important;
		background-color: #ea4335;
	}

	.btn-facebook {
		color: white !important;
		background-color: #3b5998;
	}
</style>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card border-0 shadow rounded-3 my-5">
					<div class="card-body p-4 p-sm-5">
						<h5 class="card-title text-center mb-5 fw-light fs-5">Log In</h5>
						<form action="<?= base_url($action); ?>" method="POST">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" name="username" >
								<label for="">Username</label>
							</div>
							<div class="form-floating mb-5">
								<input type="password" class="form-control" name="password" >
								<label for="">Password</label>
							</div>

							<div class="d-grid">
								<button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Log In</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
	</script>
</body>

</html>
