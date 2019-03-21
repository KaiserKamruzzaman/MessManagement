@extends('layouts.user.index')
@section('content')
<br>

<?php
	$usr=session()->get('members');
	$count=1;
	
?>

	
<div class="row">
	<!-- for bazar -->
	<div class="col-md-1"></div>
    <div class="col-md-10">
    	<h2 class="text-center text-success"> List of Bazar</h2>
       <table class="table table-striped table-hover table-dark table-responsive-md table-bordered ">
			<!-- <tr>
				<th colspan="4" class="text-center text-primary"> List of Bazar</th>
			</tr> -->
			<tr>
				<th>#</th>
				<th>Date</th>
				<th>Items</th>
				<th>Taka</th>
				<th colspan="2">Modify</th>
			</tr>

			@foreach($bazar as $baz)
				
				<tr>
					<td>{{$count++}}</td>
					<td>{{$baz->date}}</td>
					<td>{{$baz->items}}</td>
					<td>{{$baz->cost}}</td>
					<td><a class="btn btn-warning btn-block " href="#" >Edit</a></td>
					<td><a class="btn btn-danger btn-block " href="#" >Delete</a></td>
				</tr>
			@endforeach
		
		</table>

		<a class="btn btn-success btn-block " href="{{route('bazar.create',[$usr->mem_id])}}" >Add New Bazar</a>
    </div>
    <!-- for add bazar -->
    <div class="col-md-1"></div>
     	
    
</div>
	


@endsection