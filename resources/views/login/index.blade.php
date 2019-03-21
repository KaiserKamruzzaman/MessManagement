<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>



	<div class="container-fluid">
		<div class="row">
			<div class=" col-md-4 "></div>
			<div class=" col-md-4 ">
				<form class="form-container" method="post">
					{{ csrf_field()}}
					<h1>Mad House!!</h1>
					<div class="form-group">
						<label for="user_Name">User Name:</label>
						<input type="text" name="user_Name" class="form-control" placeholder="Enter User Name">
						@if($errors->any())
						<label class="text-danger">{{$errors->first('user_Name')}}</label>
						@endif
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" name="password" class="form-control" placeholder="Enter Password">
						@if($errors->any())
						<label class="text-danger">{{$errors->first('password')}}</label>
						@endif
					</div>
					
					<input type="submit" class="btn btn-success btn-block" value="Login">
					<br>
					<label class="text-danger">{{session('message')}}</label>
				</form>
				 
			</div>
			<div class=" col-md-4 "></div>
		</div>
	</div>










	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>