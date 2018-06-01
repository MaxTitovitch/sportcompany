@extends ('basis.basis')
@section ('content')

    <div class="jumbotron">

		<h1>
			ГОТОВО!
		</h1>

		<div class="container">
		
			<p class = "statblue">
				Ваше сообщение успешно отправлено 
			</p>
			
			
			<b> Имя -> </b>
			<em>{{ $name }}</em><br>
				
				
			<b> Ваш e-mail -> </b>
			<em>{{ $mail }} </em><br>
			
			
			@if ( !empty ($_POST['number']) )
				<b> Ваш номер -> </b>
				<em>+375 {{ $number }} </em><br>
			@endif
				
				
			<b> Ваше сообщение : </b>
			<br>
			<em> {!! nl2br(strip_tags($message)) !!} </em><br>
			
			
		</div>
		
		<hr class = "bighr">
		<p>
			<img src = {{ asset( 'images/imageok.png' ) }}>
		</p>
		<hr>
		
		<div class="container">
			<a class="btn btn-primary btn-lg" href="form"><< Назад</a>
			<a class="btn btn-primary btn-lg" href="/">На Главную</a>
		</div>

    </div>
	
@endsection