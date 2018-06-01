@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">

		<h1> 
			{{ $structs->title }}
		</h1>

		<p> 
			{!! nl2br($structs->text) !!} 
		</p>

    </div>

	
	<div class="row">
	
		@foreach($sporttables as $Sporttable)
			<div class="col-md-4">
			
				<p class = "statblue">
					Интересный факт {{ $Sporttable->id }}
				</p>
				
				<p>
					{{ $Sporttable->shorttext }}
				</p>
				
				<p>
					<a class="btn btn-primary btn-lg" href="{{ route('showFacts', ['id' => $Sporttable->id] ) }}">
						Посмотреть...
					</a>
				</p>
				
			</div>
		@endforeach
		
	</div>

	
@endsection