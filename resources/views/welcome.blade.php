@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">
      <div class="container">
        <h1> {{ $structs[0]->title}}</h1>
        <p> {!!$structs[0]->text!!} </p>
      </div>
    </div>

    <div class="container">
		<div class="row">
		
			@foreach($sporttables as $Sporttable)
				<div class="col-md-4">
					<h3>Интересный факт {{ $Sporttable->id}}</h3>
					<p>{{$Sporttable->shorttext}}</p>
					<p><a class="btn btn-primary btn-lg" href=" {{ route('showFacts', ['id' => $Sporttable->id]) }} " role="button">Посмотреть...</a></p>
				</div>
			@endforeach
			
		</div>

	</div>
	
@endsection