@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">
      <div class="container">
        <h1> {{ $structs[1]->title}} </h1>
		<p> {!!$structs[1]->text!!}</p>

		@foreach($tableourstores as $tableourstore)
			@if ($tableourstore->city != $last)
				<br><strong>Город {{$last = $tableourstore->city}} :</strong>
			@endif
			<p>{{$tableourstore->id}}) {{$tableourstore->city}}, улица {{$tableourstore->street}}. Тел. {{$tableourstore->number}} .</p>
		@endforeach
		
      </div>
    </div>
	
@endsection
