@extends('layouts.user.index')
@section('content')

<h2 class="text-success text-center mt-5">Welcome <strong>{{$usr->mem_Name}}</strong> </h2>
<!--
	<br>
	<a href="{{route('logout.index')}}">Logout</a>||
	<a href="{{route('user.profile',[$usr->mem_id])}}">Profile</a>
	<br><br>
-->

@endsection