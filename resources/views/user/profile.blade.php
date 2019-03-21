@extends('layouts.user.index')
@section('content')

<br>


<div class="container">
	<h2 class="text-success">Welcome to Mad House</h2><br>
	<div class="row">

		<div class="col-md-6">
			<div class="table-responsive-md">
				<table class="table table-bordered table-dark table-hover table-striped">
					<tr>
						<td>Name</td>
						<td>{{$usr->mem_Name}}</td>
					</tr>
					<tr>
						<td>User Name</td>
						<td>{{$usr->user_Name}}</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>{{$usr->password}}</td>
					</tr>
					<tr>
						<td>Phone Number</td>
						<td>{{$usr->phone_no}}</td>
					</tr>
				</table>
				
			</div>
			
			<a class="btn btn-primary btn-block" href="{{route('user.edit',[$usr->mem_id])}}">Edit</a>
		</div>
		<div class="col-md-5">

			<div class="card  w-80"  >
				<div class="card-header text-center bg-dark  text-light">Profile Picture</div>
				<div class="card-body bg-secondary">
					<img src="{{asset('uploads')}}/{{$usr->imgPath}}" class="rounded-circle mx-auto d-block" style="height:230px; width:250px " />
				</div>
			</div>

			
		</div>
		<div class="col-md-1"></div>					
	</div>
</div>



@endsection
