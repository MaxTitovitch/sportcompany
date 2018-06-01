@extends ('basis.basis')
@section ('content')

	
    <div class="jumbotron">
		<h1>
			Контактные данные
		</h1>
		
		<p>
			Телефон: <a href="tel:+375333038199">+375 33 303-81-99</a> <br>
			E-mail: <a href = "mailto:sportcompanyminsk@gmail.com?subject=Вопрос по SportCompany">sportcompanyminsk@gmail.com</a>
		</p>
		
		<p  class = "statblue">
			Форма отзыва о компании
		</p>
		
		<p>
			Если вы хотите как-либо обратиться к компании, оставив свой отзыв, напишите сюда!
		</p>
		
		<form action="/formok" name = "MyForm" method = "POST">
			 
			<label for = "name"> Ваше имя* > </label>
			<input name="name" id="name" type="text" maxlength = "30" placeholder="Имя" required value = {{ Session::get('name') }}><br><br>
			
			<label for = "mail"> Ваш e-mail* > </label>
			<input name="mail" id="mail" type="email" placeholder="e-mail" required  value = {{ Session::get('mail') }}><br><br>
			

			<label for = "number"> Ваш номер > </label>+375 
			<input name="number" id="number" type="number" min="100000000" max="999999999" placeholder="Номер"  value = {{ Session::get('number') }} ><br><br>
			
			<label for = "message"> Ваше обращение* > </label>
			<textarea name="message" id="message" maxlength = "500" placeholder="Ваше сообщение" required >{{ Session::get('message') }}</textarea><br><br>

			<input class = "btn btn-primary btn-lg" type="submit" value="Отправить">
			<input class = "btn btn-primary btn-lg" type="reset" value="Стереть">

			
		</form>
		
		<hr class = "bighr">
		<p  class = "statblue" id="r1">
			Выши отзывы о нашей компании:
		</p>
		
		<div class="container">	

		
			@for($i = $id*10; $i < $id*10+10 && $i < $count; $i++) 
				<hr>
				<p class = "reviewname">
					<b>{{ $reviews[$count -1 - $i]->name }}:</b>
					<br>
					{!! nl2br(strip_tags($reviews[$count -1 - $i]->text)) !!}
					<br><br>
					<i>{{ $reviews[$count -1 - $i]->created_at }}</i>
				</p>
			@endfor
			
			<div class = "str">
				Страницы: 
				@for($i = 1; $i <= floor(($count) / 11)+1; $i++)
						<a href = {{ "/form?id=" . ($i-1) . "#r1" }}> {{ $i }} </a>
				@endfor
			</div>
	
		</div>
		
      </div>
	
	
	@if($errors != NULL)
		@foreach($errors as $error)
			<script type="text/javascript">
				window.onload = function() 
				{
					var message = '{{ $error }}';
					alert(message);
				};
			</script>
			print_r($error);
		@endforeach
	@endif
	
	{{Session::flush()}}

@endsection
