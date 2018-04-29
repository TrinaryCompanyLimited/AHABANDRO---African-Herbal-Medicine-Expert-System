<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doctor Login Page</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<div id="wrapper">
		<div id="table">
			<a class="active">Sign in</a>
			
		</div>
		<div id="signin">
			<form action="">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" id="username" autofocus>
				</div>
				<div class="form-group">
					<label for="pass">Password</label>
					<input type="password" id="pass">
					<span id="showpwd" class="fa fa-eye-slash"></span>
				</div>
				<div class="form-group">
					<label id="checkbox">
						<input type="checkbox" checked><span class="text">Keep me signed in </span>
					</label>
				</div>
				<div class="form-group">
					<input type="submit" value="Sign in">
				</div>
			</form>
		<div class="hr"></div>
		<a href="http://localhost/ahabandro/" id="froget-pass">Go to Homepage </a>
		
    </div>
		
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script >
  $(document).ready(function () {
	$("#showpwd").on("click", function () {
		$(this).toggleClass("fa-eye fa-eye-slash");
		$($(this).siblings()[1]).attr("type", function (index, attr) {
			return attr == "password" ? "text" : "password"
		});
	});
})

  </script>
</body>

</html>
