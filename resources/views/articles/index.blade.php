@extends('master')
@extends('layouts.app')

@section('content')
<style type="text/css">
	body{
		background-color: black;
	}

	h1{font-size: 50px;
		font-style: bold;
		color:#ffcc66;}
	.delete{
		font-size: 14pt;
		color:red;
	}

	.dot{font-size: 40px;
		color: #ffcc66;}

	h3{position: relative;
		color:	white;}
	div{color: 	#ffb31a;}

	hr{border: 5px solid orange;
		border-radius: 2px;	}
	.tag{float:right;
		font-size: 15pt;
		
		margin-top: -70px;
		color: white;}
	.edit{font-size: 13pt;}
</style>
	<h1>Articles</h1>
	<hr>
	@foreach($articles as $article)
		<article>
			<h2>
			<a  class="dot" href="{{url('/articles', $article->id) }}"> {{ $article->title }}</a></h2>
		
			<h3 >{{str_limit($article->excerpt, $limit = 50, $end = '...') }}</h3> 

			<div class="body"><h4>{{str_limit($article->body, $limit = 120, $end = '.....read more') }}</h4></div>

		<span><h5>submitted by:{{$article->user->name}}  </h5>
			<p>{{$article->created_at}}</p>  

			<a class="edit" href="{{ action('Articlecontroller@edit', [$article->id]) }}"> <strong>Edit </strong> </a>
		

		</span>
		</article>
		<hr/>
	@endforeach
@stop