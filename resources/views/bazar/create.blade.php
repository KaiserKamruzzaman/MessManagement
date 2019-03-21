@extends('layouts.user.index')
@section('content')

<br>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form class="form-container" method="post">
			{{ csrf_field()}}

			<div class="form-group">
				<label >Select Date</label>
				<input type="date" class="form-control" name="date">
				@if($errors->any())
					<label class="text-danger">{{$errors->first('date')}}</label>
				@endif	
			</div>
			<div class="form-group">
				<label>Items</label>
				<textarea class="form-control" name="items" placeholder="Enter your bazar items here"></textarea>
				@if($errors->any())
					<label class="text-danger">{{$errors->first('items')}}</label>
				@endif
			</div>
			<div class="form-group">
				<label>Amount</label>
				<input type="text" class="form-control" placeholder="Enter amount in Taka" name="cost">
				@if($errors->any())
					<label class="text-danger">{{$errors->first('cost')}}</label>
				@endif
			</div>
			<input type="hidden" name="mem_id" value="{{$member->mem_id}}">
			<input type="submit" class="btn btn-success btn-block" value="Add Bazar">

		</form>
	</div>
	<div class="col-md-3"></div>
</div>


@endsection