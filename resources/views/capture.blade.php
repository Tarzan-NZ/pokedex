@section('master')

@section('content')
	

	<div class="rows">
		<div class="columns">
			<form action="/pokecentre/capture" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}


				<div>
					<label for="pokemon">Who's that Pokemon ?</label>
					<select name="pokemon" id="pokemon">
						@foreach ($allPokemon as $pokemon) {
							
							<option value="{{ $pokemon->id }}">{{ $pokemon->name}}</option>
						}
					</select>

					<label></label>
					<input type="file" name="photo" id="photo">

					<input type="submit" value="Submit capture" class="tiny button">
			</form>		
		</div>
	</div>
	


@endsection