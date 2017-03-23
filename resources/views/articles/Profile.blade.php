@extends('master')
@extends('layouts.app')
@section('content')
<style type="text/css">
	body{
		background-color: black;
	}

	h1{font-size: 50px;
		font-style: bold;
		color:orange;}

	.dot{font-size: 40px;
		color: #ffcc66;}

	h3{color:	white;}
	div{color: 	#ffb31a;}

	hr{border: 5px solid orange;
		border-radius: 2px;	}
	.edit{font-size: 13pt;}
		
	.delete{font-size: 14pt;
		color:red;}
	.bar{
		font-size: 15px;
	}
	.buttons{
		padding: 10px;
	}

</style>



<img src="/img/defaultcover.jpg" style="width: 100px; height: 100px; float: left; border-radius: 50%; margin-right:  25px; margin-top: -20px;" >
<h1> {{$user->name }}'s Profile</h1>
<br>
<h2> Email:{{$user->email}}</h2>

	
<br>
<hr>


<h2>Submitted Files</h2>
<table>


@foreach($user->articles as $article)
<tr></tr>
<td><h3>{{ $article->title }}</h3></td>
<td>
	<form class="buttons" action="{{route('articles.destroy',$article->id)}}" method="post">
					<input type="hidden" name="_method" value="delete">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<a href="{{route('articles.edit',$article->id)}}" class="btn btn-primary">Edit</a>
			<input type="submit" class="btn btn-danger" 
			onclick="return confirm('Are you sure?')" name="name" value="delete">

	</form>
</td>
@endforeach
</table>

@stop

