@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>FormateurCr</title>
</head>

<body>

	<h1>Cours</h1>
	<div>
		@foreach($name as $data){
					<tr>
						<th>titre : {{ $data -> titre}}</th>
						<th>description : {{ $data -> description}}</th> 
						<th>session : {{ $data -> session}}</th> 
						<th>Annee : {{ $data -> annee}}</th> 
						<a href="{{ $data -> lien}}{{ $data -> annee}}/{{ $data -> id}}.html">Visualiser</a>
						<a href="{{ $data -> lien}}{{ $data -> annee}}/{{ $data -> id}}.pdf">Telecharger</a>
						<a href="{{url('/formateurcr')}}">Supprimer</a>
					</tr>
					}
		@endforeach	
	</div>

	<div>
		<a href="{{url('/ajouter')}}">Ajouter Cours</a>
	
	</div>
</body>
</html>

@endsection
