<?php
	$usr=session()->get('members');
	
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('css/adminLayout.css')}}">
</head>
<body>


	<!--Navigation-->
	<nav class="navbar navbar-expand-md navbar-dark bg-danger ">
		<div class="container pt-2 pb-2">
			<a href="#" class="navbar-brand">MAD HOUSE</a>
			<button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navbarNav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto ">
					<li class="nav-item  ">
						<a class="nav-link " href="{{route('member.index')}}">Dashboard</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="{{route('member.showBazar')}}">Bazar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('meal.showMeal')}}">Meal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link"href="{{route('member.calculate')}}">Summary</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('logout.index')}}">LogOut</a>
					</li>
				</ul>
			</div>
			
		</div>
	</nav>
	<!--body part-->
	<div class="container ">
		@yield('content')
		
	</div>









	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
</body>
</html>