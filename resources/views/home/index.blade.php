<?php
	$mem=session()->get('members');
	$demo_mem=session()->get('demo');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	 <h2 style="">Hello {{$mem->mem_Name}}</h2>
	 
	<a href="{{route('member.index')}}">MemberList</a> || 
	<a href="{{route('logout.index')}}">Logout</a> 
	

</body>
</html>