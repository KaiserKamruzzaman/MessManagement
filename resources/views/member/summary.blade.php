@extends('layouts.admin.index')
@section('content')
<br>
<?php
	$baz_total=0;
	$ml_total=0;
	foreach($bazar as $bz)
	{
		$baz_total+=$bz->total;
	}
	foreach($meal as $ml)
	{
		$ml_total+=$ml->khana;
	}

	$meal_rate=$baz_total/$ml_total ;
	$meal_rate=number_format((float)$meal_rate, 2, '.', ''); 
	$sum=0;
	number_format((float)$meal_rate, 2, '.', ''); 
	
?>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h3 class="text-success">Bazar Summary of Month....</h3><br>
		<table class="table table-bordered table-dark table-hover table-striped">
			<thead>
				<th class="text-success">Name</th>
				<th class="text-success">Total Bazar</th>
				<th class="text-success">Total Meal</th>
				<th class="text-success">Bill</th>
			</thead>
			@foreach($bazar as $bz)
				<tr>
					<td>{{$bz->mem_Name}}</td>
					<td>{{$bz->total}}</td>
					@foreach($meal as $ml)
						@if($ml->mem_Name==$bz->mem_Name)
							<td>{{$ml->khana}}</td>
							<td>{{$ml->khana*$meal_rate}}</td>
							@php
								$sum+=$ml->khana*$meal_rate;								
							@endphp
						@endif
					@endforeach
				</tr>
			@endforeach
			<tr>
				<td class="text-danger">Total</td>
				<td class="text-warning">={{$baz_total}}</td>
				<td class="text-warning">={{$ml_total}}</td>
				<td class="text-warning">={{$sum}}</td>
			</tr>
			<tr>
				<td  colspan="4" class="text-success text-center"><h4>Meal Rate=<span class="text-danger">{{$meal_rate}}</span></h4></td>
				<!-- <td colspan="2" class="text-warning">{{$meal_rate}}</td> -->
				
			</tr>
		</table>
	</div>
	<div class="col-md-3"></div>
</div>


@endsection