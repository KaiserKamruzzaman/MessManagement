@extends('layouts.admin.index')
@section('content')




<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<h3 class="text-center text-success">Register a new member!!!!!!</h3>
			<form class="form-container" method="post" enctype="multipart/form-data">
				{{ csrf_field()}}

				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" placeholder="Enter Name" name="mem_Name" value="{{old('mem_Name')}}">
					@if($errors->any())
						<label class="text-danger">{{$errors->first('mem_Name')}}</label>
					@endif					
				</div>
				<div class="form-group">
					<label>User Name</label>
					<input type="text" class="form-control" placeholder="Enter User Name" name="user_Name" value="{{old('user_Name')}}">
					@if($errors->any())
						<label class="text-danger">{{$errors->first('user_Name')}}</label>
					@endif					
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" placeholder="Enter Password" class="form-control" name="password" value="{{old('password')}}">
					@if($errors->any())
						<label class="text-danger">{{$errors->first('password')}}</label>
					@endif					
				</div>
				<div class="form-group">
					<label>Phone Number</label>
					<input type="text" class="form-control" placeholder="Enter Phone Number" name="phone_no" value="{{old('phone_no')}}">
					@if($errors->any())
						<label class="text-danger">{{$errors->first('phone_no')}}</label>
					@endif					
				</div>
				<div class="form-group">
					<label>Member Type</label>
					<select class="form-control" name="type_id">
						<option value="1">1</option>
						<option value="2">2</option>
					</select>							
				</div>
				<div class="form-group">
					<label>Choose Picture</label>
					<input type="file" class="form-control-file" name="pic" >
					@if($errors->any())
						<label class="text-danger">{{$errors->first('pic')}}</label>
					@endif					
				</div>
				<input type="submit" class="btn btn-success btn-block" value="Create">					
			</form>

		</div>
		<div class="col-md-4"></div>
		
	</div>
</div>




@endsection