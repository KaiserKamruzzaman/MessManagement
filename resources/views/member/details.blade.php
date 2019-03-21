@extends('layouts.admin.index')
@section('content')


<br>


<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2>Details of <strong class="text-info">{{$member->mem_Name}}</strong></h2><br>
			<div class="table-responsive-md">
				<table class="table table-bordered table-dark table-hover table-striped" >
					<tr>
						<td>Name</td>
						<td>{{$member->mem_Name}}</td>
					</tr>
					<tr>
						<td>UserName</td>
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
					<tr>
						<td>Member Type</td>
						
						@if($member->type_id==1)
							<td>Admin</td>
						@else
							<td>User</td>
						@endif
					</tr>
					
				</table>
			</div>
			<div class="row">
				
				<div class="col-md-5">
					<a class="btn btn-warning  d-inline-block btn-block  "  href="{{route('member.edit',[$member->mem_id])}}">Edit</a>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-5">
					<a class="btn btn-danger d-inline-block btn-block  " href="{{route('member.delete',[$member->mem_id])}}">Delete</a>
				</div>				
				
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>





 @endsection