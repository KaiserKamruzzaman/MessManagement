@extends('layouts.user.index')
@section('content')
<br>
	
	<h3 class="text-center">Enter Mad-House Daily Meal Here</h3>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<br>
			<form method="post">
				{{ csrf_field() }}

			 	<div class="form-group">
			     	<input name = "date" type="text" class = "form-control datepicker valid_to"  data-date-start-date="d" value = "{{date('Y-m-d', strtotime('now'))}}">
			    </div>

			    <div class="form-group">
			    	<input class = "form-control" type="text" name="quantity" placeholder="Enter your meal quantity">
			    </div>
			 	
			    <input  type="submit" class="btn btn-success" value="Submit">
			</form>
			<h3 style="color: green">{{session('message')}}</h3>
		</div>
		<div class="col-md-4"></div>
	</div>

@endsection