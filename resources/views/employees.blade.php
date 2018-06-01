@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">

		<h1>
			{{ $structs->title }}
		</h1>
		
		<p> 
			{!! $structs->text !!}
		</p>

		@foreach($tableemployees as $tableemployee)
			@if ($tableemployee->status != $last)
				
				<br>
				<p class = "statblue">
					{{ $last = $tableemployee->status }} :
				</p>
				
			@endif
			
			<p>
				{{ $tableemployee->id }}) {{ $tableemployee->name }} - {{ $tableemployee->position }}. {{ $tableemployee->number }} .
			</p>	
		@endforeach	

    </div>

@endsection
