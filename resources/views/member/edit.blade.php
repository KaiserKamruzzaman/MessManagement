@extends('layouts.admin.index')
@section('content')

<br>
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h2 class="text-center">Edited View of <strong class="text-info">{{$member->mem_Name}}</strong></h2><br>
			<form class="form-container" method="post">
				{{ csrf_field()}}
				<!--	<input type="hidden" name="mem_id" value="{{$member->mem_id}}"> -->
				<table class="table table-striped table-hover table-light">
					<tr>
						<td>User Name</td>
						<td>
							<input class="form-control" type="text" name="user_Name" value="{{$member->user_Name}}" readonly>
							@if($errors->any())
								<span class="text-danger">{{$errors->first('user_Name')}}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>
							<input class="form-control" type="text" name="mem_Name" value="{{$member->mem_Name}}">
							@if($errors->any())
								<span class="text-danger">{{$errors->first('mem_Name')}}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>
							<input class="form-control" type="text" name="password" value="{{$member->password}}" readonly>
							@if($errors->any())
								<span class="text-danger">{{$errors->first('password')}}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td>Phone Number</td>
						<td>
							<input class="form-control" type="text" name="phone_no" value="{{$member->phone_no}}"  readonly>
							@if($errors->any())
								<span class="text-danger">{{$errors->first('phone_no')}}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td>Member Type</td>
						<td>
							<input class="form-control" type="text" name="type_id" value="{{$member->type_id}}" >
							@if($errors->any())
								<span class="text-danger">{{$errors->first('type_id')}}</span>
							@endif
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td><input class="btn btn-success btn-block" type="submit"  value="Update"></td>
					</tr>
				</table>

			</form>

		</div>
		<div class="col-md-2"></div>
	</div>
</div>



@endsection