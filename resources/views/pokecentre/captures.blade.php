@extends('master')

@section('content')

<div class="row">
	<div class="columns">

		@if ( Session::get('release') ) {
			<div data-alert class="alert-box success radius">
			  {{ Session::get('release')}}
			  <a href="#" class="close">&times;</a>
			</div>
		}
		@endif
		<h1>Your captures</h1>
		
		@forelse($captures as $capture)
		<div>
			<h2>{{ $capture->pokemon->name}}</h2>
			<img src="/img/captures/{{ $capture->photo }}" alt="">
			<a href="/pokecentre/captures/{{ $capture->id }}/edit">Edit this submission</a>
			<a href="/pokecentre/captures/{{ $capture->id }}/release">Release {{ $capture->pokemon }}</a>			
			<ul>
				<li>Found in {{ $capture->location }}</li>
				<li>Attack level {{ $capture->attack }}</li>
				<li>Defense level {{ $capture->defense }}</li>
			</ul>
		</div>
		@empty
		<p>You have not caught any Pokemon :(</p>
		@endforelse
	</div>
</div>

@endsection