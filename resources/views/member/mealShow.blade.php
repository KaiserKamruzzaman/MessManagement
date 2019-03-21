@extends('layouts.admin.index')
@section('content')
<br>
<?php
	$flag=0;
	foreach ($meal as $ml) {
		$flag+=$ml->total;
	}
	// print_r($flag);
?>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h2>Meal Summary Of Month...</h2><br>
		<table class="table table-bordered table-dark table-striped table-hover">
			<thead >
				<th>Date</th>
				<th>Name</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				@foreach($meal as $ml)
					<tr>
						<td>{{$ml->date}}</td>
						<td>{{$ml->mem_Name}}</td>
						<td>{{$ml->total}}</td>
					</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td class="text-warning">Total={{$flag}}</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-3"></div>
</div>

@endsection