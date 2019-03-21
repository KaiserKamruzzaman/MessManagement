@extends('layouts.admin.index')
@section('content')
<br>
<?php
	$count=1;
	$total=0;
	foreach($bazar as $baz)
	{
		$total=$total+$baz->cost;
	}
	// print_r($total);
?>

<div class="row">
	<!-- for bazar -->
	
    <div class="col-md-12">
    	<h2 class="text-center text-success"> List of Bazar</h2>
       <table class="table table-striped table-hover table-dark table-responsive-md table-bordered ">
			<!-- <tr>
				<th colspan="4" class="text-center text-primary"> List of Bazar</th>
			</tr> -->
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Date</th>
				<th>Items</th>
				<th>Cost</th>
				<th colspan="2">Modify</th>
			</tr>

			@foreach($bazar as $baz)
				
				<tr>
					<td>{{$count++}}</td>
					<td>{{$baz->mem_Name}}</td>
					<td>{{$baz->date}}</td>
					<td>{{$baz->items}}</td>
					<td>{{$baz->cost}}</td>
					<td><a class="btn btn-warning btn-block " href="#" >Edit</a></td>
					<td><a class="btn btn-danger btn-block " href="#" >Delete</a></td>
				</tr>
				
			@endforeach
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td class="text-danger"><strong>Total={{$total}}</strong></td>
			</tr>
		
		</table>
		<div class="row">
	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<a href="{{route('member.summary')}}" class="btn btn-success btn-block">Summary</a>
	    	</div>
	    	<div class="col-md-4"></div>
	    </div>

		
    </div>
    
    <!-- for add bazar --> 	
    
</div>

 @endsection