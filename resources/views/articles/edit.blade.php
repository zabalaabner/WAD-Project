@extends('master')
@extends('layouts.app')


@section('content')
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
		position: absolute;
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
	margin-left:50px;
	
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



<h1>Edit: </h1>

	<form  class="formative" action="{{route('articles.update' ,$articles->id) }}" method="post">
	<input name="_method" type="hidden" value="PATCH">
	{{csrf_field()}}
		<p><strong>Title</strong></p> 	
	


		<input type="text" name="title" placeholder="Title" size="120" value="{{$articles->title}}">   
		
		<hr/>
		
		<p><strong>Excerpt </strong></p>
		<textarea  name="excerpt" rows="5" cols="120"  placeholder="Excerpt">@if(!old('excerpt')){{$articles->excerpt}} @endif {{old('excerpt')}}</textarea>
		<hr/>
		<p><strong>Body </strong></p> 
		<textarea  name="body"  rows="20" cols="120" placeholder="Body" >
			@if(!old('body')){{$articles->body}} @endif {{old('body')}}
		</textarea>
		<hr/>
		<input type="submit" name="submit"  >
	@if ($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
	@endif
		</ul>
	</form>

@stop