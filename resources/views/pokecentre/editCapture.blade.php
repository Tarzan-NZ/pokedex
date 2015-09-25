@extends('master')

@section('content')

<div class="row">
	<div class="columns">
		<h1>Edit: {{ $capture->pokemon->name }}</h1>
		<p>You submitted this capture {{ \Carbon\Carbon::now()->diffForHumans($capture->created_at, true) }} ago</p>

		<form action="/pokecentre/captures/{{ $capture->id }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}

			<label for="pokemon">Who's that Pokemon?</label>
			<select name="pokemon" id="pokemon">
				@foreach($allPokemon as $pokemon)
				
				<option value="{{ $pokemon->id }}" {{ $pokemon->id == $capture->pokemon_id ? 'selected' : '' }}>{{ $pokemon->name }}</option>

				@endforeach
			</select>
			{{ $errors->first('pokemon') }}
		

			<label for="photo">Photo: </label>
			<input type="file" name="photo" class="button">
			{{ $errors->first('photo') }}

			<input type="submit" value="Update your {{ $capture->pokemon->name }}" class="tiny button">
			
		</form>
	</div>
</div>


@endsection