@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">
      <div class="container">
        <h1> {{ $structs[3]->title}} </h1>
		<p> {!!$structs[3]->text!!} </p>
		<p align = "center"> <img src="dir.png" width = "300"></p>
      </div>
    </div>

@endsection
