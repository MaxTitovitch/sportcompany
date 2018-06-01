<!DOCTYPE html>

<html>

	<head>
		
		<meta charset="utf-8">
		<meta name="description" content="Сайт компании SportCompany" />
		<meta name="keywords" content="SportCompany, спортивная компания" />
		<meta name="Viewport" content="width=device-width">
	
		<link href="{{ asset('images/icon.ico') }}" rel="shortcut icon" type="image/x-icon">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">	
		
		<title>&copy; SportCompany</title>
		
	</head>

	<body>
	
		<header>
		
			<a href="/">	
				<img src = {{ asset('images/menu_sc.jpg') }} >
			</a>

			<nav class="navbar">

				<a class="navbar-brand"  href="/">
					<img src = {{ asset('images/SportCompany_Logo.png') }} class = "logo">
				</a>

				<ul class="menu">
					<li><a href="/company">Компания</a></li>
					<li><a href="/ourstores">Отделения</a></li>
					<li><a href="/employees">Сотрудники</a></li>
					<li><a href="/form">Обращение</a></li>
					<li><a href="https://github.com/MaxTitovitch/sportcompany/" target="_blank">НаGitHub</a></li>
				</ul>
				
			</nav>

		</header>

		<main>
		
			@yield('content')
			
			<a href="#" class="up">
				<img src = {{ asset('images/icon_top.png') }} class="butup">
			</a>
			
		</main>
			
		
		<footer>
		
			<hr>
		
			<p class = "foot">
				<a href="https://vk.com/forever_best_in_the_world" target="_blank">РАЗРАБОТЧИК</a>
				<br>
				&copy; 2017 - {{ date('Y') }} Минск, БГУИР
			</p>
			
		</footer>
		
	
	</body>
	
</html>