@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">
	  
		<h1> 
			{{ $structs->title}} 
		</h1>
		
		<p> 
			{!! nl2br($structs->text) !!} 
			
			<img src = {{ asset('images/company.jpg') }} >
		</p>
		

    </div>

@endsection
