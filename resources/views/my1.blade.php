@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">

		<h1>
			{{ $sporttables->shorttext }}
		</h1>

		<p>
			{!! $sporttables->text !!}
		</p>
		
		<hr>
		<p> 
			<img src = {{ asset( 'images/' . $sporttables->image) }} >
		</p>
		<hr>
		
		<div class="container">
			<a class="btn btn-primary btn-lg" href="/">
				<< Назад
			</a>	
		</div>
				
    </div>
	
	
@endsection