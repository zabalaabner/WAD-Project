@extends('master')
@extends('layouts.app')

@section('content') 
<style type="text/css">
	html,body{
		background-color: black;
		font-family: 'Raleway', sans-serif;
	}
	.fone{font-size: 15px;

		border: 2px solid orange;
		background-color: white;
		text-align: justify;
		padding: 15px;}
	
	hr{
		border: 1px solid #1a1a1a;
	}

	h1{
		font-size: 50px;
		color: black;
		}

	article{text-align: left;
			font-size:16px;

	}
</style>
<body>
<div class="fone">
<h1>{{ $article->title }}</h1>
<hr/>

<article>{{$article->body}}</article>
</div>
</body>
@stop