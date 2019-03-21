@extends('layouts.user.index')
@section('content')


<div class="container mt-5">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form class="form-container" method="post" enctype="multipart/form-data">
			{{ csrf_field()}}
			<!--	<input type="hidden" name="mem_id" value="{{$user->mem_id}}"> -->
				<table class="table table-striped table-hover table-light">
						<tr>
							<td>UserName</td>
							<td>
								<input type="text" class="form-control" name="user_Name" value="{{$user->user_Name}}">
								@if($errors->any())
								<span class="text-danger">{{$errors->first('user_Name')}}</span>
								@endif
							</td>
							
						</tr>
						<tr>
							<td>Name</td>
							<td>
								<input type="text" class="form-control" name="mem_Name" value="{{$user->mem_Name}}">
								@if($errors->any())
								<span class="text-danger">{{$errors->first('mem_Name')}}</span>
								@endif
							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>
								<input type="text" class="form-control" name="password" value="{{$user->password}}">
								@if($errors->any())
								<span class="text-danger">{{$errors->first('password')}}</span>
								@endif
							</td>
						</tr>
						
						<tr>
							<td>Phone No</td>
							<td>
								<input type="text" class="form-control" name="phone_no" value="{{$user->phone_no}}">
								@if($errors->any())
								<span class="text-danger">{{$errors->first('phone_no')}}</span>
								@endif
							</td>
						</tr>
						<tr>
							<td>Choose Picture</td>
							<td><input type="file" class="form-control-file"  name="pic" value="{{$user->imgPath}}"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" class="btn btn-success btn-block"  value="Update"></td>
						</tr>
				</table>
			</form>

		</div>
		<div class="col-md-2"></div>
	</div>
</div>




@endsection