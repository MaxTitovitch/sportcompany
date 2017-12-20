@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">
		<div class="container">
	  
			@if($sporttables)
				<h1>{{$sporttables->shorttext}}</h1>
				<p>{{ $sporttables->text}}</p>
				<hr>
				<p align = "center"> <img src="{{ $sporttables->image}}" width = "1100" height = "200"> </p>
			@endif
		
		</div>	
    </div>
	
     <div class="container">
		<div class="row">
			<div class="col-md-4">
			
				<p><a class="btn btn-primary btn-lg" href="/" role="button"><<Назад</a></p>
			</div>
		</div>
	</div>
	
	
	
@endsection