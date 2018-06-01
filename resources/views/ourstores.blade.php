@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">

		<h1> 
			{{ $structs->title}} 
		</h1>

		<p> 
			{!! $structs->text !!}
		</p>
		
		<div class="row">
			<div class ="col">
				@foreach($tableourstores as $tableourstore)
					@if ($tableourstore->city != $last)
						
						<br>
						<p class = "statblue">
							Город {{ $last = $tableourstore->city }} :
						</p>
						
					@endif
					<p>
						{{ $tableourstore->id }}) {{ $tableourstore->city }}, улица {{ $tableourstore->street }}. Тел. {{ $tableourstore->number }} .
					</p>
				@endforeach
			</div>


			<div class ="col">
				<br>
				<div class = "map">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A14263c7a1c31c7312315ad78e7ccd5daee8c44631db4e1bba20792b13dd856f0&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			</div>
			
		</div>
    </div>
	
@endsection
