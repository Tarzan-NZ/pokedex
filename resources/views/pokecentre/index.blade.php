@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Welcome {{ Auth::user()->name }}</h1>

		<h2>Trainer Stats</h2>
		<ul>
			<li>Your trainer ID is: {{ Auth::user()->id }}</li>
			<li>Your E-Mail is: {{ Auth::user()->email }}</li>
		</ul>

		<h2>Global Stats</h2>
		<ul>
			<li>Total Registered Trainers: {{ $totalTrainers }}</li>
			<li>Total Captures: {{ $totalGlobalCaptures }}</li>
		</ul>

		<a href="/pokecentre/capture" class="tiny button">Add your capture</a>
		<a href="/pokecentre/captures" class="tiny button">See your captures ({{ $totalTrainerCaptures }})</a>
		
	</div>
</div>

@endsection