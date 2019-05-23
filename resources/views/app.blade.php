<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Кулинарные рецепты</title>
	<meta name="description" content="Startup HTML template OptimizedHTML 5">

    <meta name="viewport" content="width=device-width">
    
	<link rel="icon" href="/img/favicon.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="/css/app.css">
</head>

<body>
	<div id="app">
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<router-link to="/" class="navbar-brand" href="#">
					Кулинарные рецепты
				</router-link>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<router-link to="/" class="nav-link">Главная</router-link>
						</li>
						<li class="nav-item">
							<router-link to="/recipes" class="nav-link">Рецепты</router-link>
						</li>
						<li class="nav-item">
							<router-link to="/add-recipe" class="nav-link">Добавить рецепт</router-link>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<router-view></router-view>
		</main>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="/js/app.js"></script>



</body>
</html>
