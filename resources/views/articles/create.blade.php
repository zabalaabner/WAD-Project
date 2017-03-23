@extends('master')
@extends('layouts.app')
@section('content')

<h1><strong>Create</strong></h1>
<hr/>
<style type="text/css">
	form{background-color: black;
		border-style: solid orange;}

	.formative{background-color: black;
		border:solid orange;
		padding: 12px;}
	.Genre{
		position: absolute;
		margin-left: 500px;

	}

	.tag{
		position: relative;
		margin-left:1000px;
		margin-top: -60px;
	}

	.time{
		position: absolute;
		margin-left:500px;
		margin-top:-60px;
	}

	.datetime{
	position: absolute;
	margin-left:60px;
	
	}
	body{
		background-color: black;
	}
	input,textarea{
		padding: 5px;
		color:orange;
		font-size: 14pt;
		background-color: black;}

	p{font-size: 30px;
		color:orange;
	}
	.one{font-size: 18px;}
	
	h1{font-size: 30px;
		color:orange;}

	hr{	display: block ;
		border-color: #ff9900;}
</style>
<!-- unknown !-->
	
	<form  method="POST" class="formative" action="/articles">
	{{csrf_field()}}
	
		<p><strong>Title</strong></p> 	
		
		<input type="text" name="title" placeholder="Title" size="120">                  
		
		<hr />

		<p><strong>Excerpt </strong></p>
		<textarea  name="excerpt" rows="5" cols="120"  placeholder="Excerpt"></textarea>
		<hr/>
		<p><strong>Body </strong></p> 
		<textarea  name="body"  rows="20" cols="120" placeholder="Body"></textarea>
		<hr/>
		<input type="submit" name="submit" >

	@if ($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
	@endif
		</ul>
	</form>
@stop


