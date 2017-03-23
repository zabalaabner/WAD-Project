<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
	
<style type="text/css">

	body{
		background-color: black;

	}
	input,textarea{font-size: 14pt;}

	p{font-size: 10px;
		color:orange;
	}
	.one{font-size: 18px;}
	
	h1{font-size: 30px;
		color:orange;}

	hr{	display: block ;

		border: 16px solid #ff9900;}
</style>

	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
<body>
	@yield('header')
<div class="container">
	@include('partials.flash')

	@yield('content') 
</div>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$('div.alert').not('.alert-important').delay(5000).slideUp(300);
	</script>
	@yield('footer')
</body>
</html>