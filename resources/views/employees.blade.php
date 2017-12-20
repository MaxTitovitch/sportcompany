@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">
      <div class="container">
	  
        <h1> {{ $structs[2]->title}} </h1>
		<p> {!!$structs[2]->text!!}</p>
		
		@foreach($tableemployees as $tableemployee)
			@if ($tableemployee->status != $last)
				<br><strong>{{$last = $tableemployee->status}} :</strong>
			@endif
			<p>{{$tableemployee->id}}) {{$tableemployee->name}} - {{$tableemployee->position}}. {{$tableemployee->number}} .</p>
		@endforeach
		
      </div>
    </div>

@endsection
