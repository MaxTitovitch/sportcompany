@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">
		<h1 class="err">
			Eror 404 :(<br>
			Страница не найдена!
		</h1>
    </div>

	<script type="text/javascript">
		window.onload = function() {
			alert('Введён адрес несуществующей страницы!');
		};
    </script>
	
@endsection
