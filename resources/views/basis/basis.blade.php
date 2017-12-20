<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>&copy; SportCompany</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/"><h1>SportCompany</h1></a>
        </div>
        <ul id="navbar" class="menu">
                    <li><a href="/ourstores">Наши магазины</a></li>
                    <li><a href="/employees">Сотрудники</a></li>
                    <li><a href="/company">О компании</a></li>
                    <li><a href="https://github.com/MaxTitovitch/sportcompany/tree/master/sportcompany">GitHub проекта</a></li>
        </ul>
      </div>
    </nav>
	
	@yield('content')
	
	<hr>
	<footer>
		<p align = 'center'>
			&copy; 2017 Минск, БГУИР
			<br>
			<a href="https://vk.com/forever_best_in_the_world">РАЗРАБОТЧИК</a>
		</p>
	</footer>
  </body>
</html>