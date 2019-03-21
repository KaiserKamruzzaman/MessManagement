@extends('layouts.admin.index')
@section('content')
<?php
	$flag=1;
?>

<br>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h3 class="text-success text-center">Summary of month.....</h3><br>
		<table class="table table-dark table-striped table-hover table-bordered">
			<thead>
				<th>##</th>
				<th>Name</th>
				<th>Total Cost</th>
			</thead>
			<tbody>
				@foreach($bazar as $baz)
					<tr>
						<td>{{$flag++}}</td>
						<td>{{$baz->mem_Name}}</td>
						<td> {{$baz->total}}</td>
					</tr>
					
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td>Total={{$total}} Taka</td>
				</tr>
			</tbody>
			
		</table>	
	</div>
	<div class="col-md-2"></div>
</div>




 @endsection