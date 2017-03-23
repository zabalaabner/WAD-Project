@extends('master')
@extends('layouts.app')
@section('content')
<style type="text/css">
	h1{color: orange;\
		font-size: 15px;
	}
	h2{color: orange;\
		font-size: 14px;
	}
	body{
		background-color: black;
	}
	.division{
		padding: 20px;
		text-align: justify;
		border: 5px solid orange;
		border-radius: 20px;
	}
	p{
		text-align: justify;
		padding: 10px;
	}

	hr{	display: block ;
		border-color: #ff9900;}
</style>




<body>
<div class="division">
<h1>About us</h1>

<hr>
<h2>This website is a non profit with an aim to collect different forms of literature.</h2>

<h2>
This website with a purpose of allowing users to find, share and read different forms of literature, be it Research papers, Light Novels, Academic papers and etc.</h2>

<h2>
Currently there are some parts that appear to not work due to things beyond my control.
Please understant
</h2>

<h2>
So dont be shy and take a gander and always remember </h2>
<br>
<h1>
	<strong>To God be the Glory! </strong>
</h1>

@stop
</div>
@section('footer')

@stop
</body>
</html>