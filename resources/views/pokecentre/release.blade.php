@section('master')

@section('content')

<div class="rows">	
	<div class="columns">
		<h2>Release your{{ $capture->pokemon->name }}?</h2>
		<a href="/pokecentre/captures/{{$capture->id}}/release" class="tiny button"></a>
	</div>
</div>


@endsection