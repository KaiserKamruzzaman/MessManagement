@extends('layouts.admin.index')
@section('content')
<br>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h4 class="text-danger">Are you sure you!!<br>Once you delete it can not be undone.</h4>
			<table class="table table-bordered table-dark tbale-striped">
				<tr>
					<td>Name</td>
					<td>{{$member->mem_Name}}</td>
				</tr>
				<tr>
					<td>User Name</td>
					<td>{{$member->user_Name}}</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>{{$member->password}}</td>
				</tr>
				<tr>
					<td>Phone No</td>
					<td>{{$member->phone_no}}</td>
				</tr>
				
			</table>
			
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form class="form-container" method="post">
						{{csrf_field()}}
						
							
								<td><input type="hidden" name="mem_id" value="{{$member->id}}"></td>
								<td><input type="submit"  class="btn btn-danger btn-block" value="Delete"></td>
							
						

					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
			
		</div>
		<div class="col-md-3"></div>
	</div>
</div>



		
 @endsection