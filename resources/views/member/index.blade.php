@extends('layouts.admin.index')
@section('content')

<br>




<h2></h2>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2 class="text-center text-success">Welcome Admin</h2><br>
			<table  class="table table-hover table-striped table-boardered ">
				<thead class="text-center thead-dark">
					<tr>
						<th ><h3>List Of Members</h2></th>
					</tr>
				</thead>
			 	
			 	@foreach($members as $bro)
			 		<tr>
			 			<td ><a style="text-decoration: none" href="{{route('member.show',[$bro->mem_id])}}">{{$bro->mem_Name}}</a></td>
			 			
			 		</tr>	
			 	@endforeach
			 </table> 
			 <a class="btn btn-success btn-block " href="{{route('member.create')}}">Create Member</a>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

  


 @endsection
