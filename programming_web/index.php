<!DOCTYPE html>
<html>
<head>
	<title>Web syte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<?php include("files_style.php"); ?>
</head>
<body>
<nav class="navbar bg-primary navbar-expand-md navbar-dark">
	<div class="container">
		<a href="https://localhost/programming_web/index.php" class="navbar-brand">ЧМ 2018 в России</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#cpnavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<section class="collapse navbar-collapse" id="cpnavbar">
			<ul class="navbar-nav">
				<span id="between">
					<li class="nav-item">Главная</li>
					<li class="nav-item">Команды</li>
					<li class="nav-item">Галерея</li>
					<li class="nav-item">Место проведения</li>
					<li class="nav-item">Личный кабинет</li>
				</span>
			</ul>
		</section>
	</div>
</nav>
<div id="mySlayder" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img id="img" src="https://htmllessons.ru/uploads/posts/img_nRqq07fCxy.jpeg" class="d-block w-100"></img>
		</div>
		<div class="carousel-item">
			<img id="img2" src="https://www.bootstrapdash.com/wp-content/uploads/2017/08/bootstrap-4-beta-whats-new.jpg" class="d-block w-100"></img>
		</div>
		<div class="carousel-item">
			<img id="img3" src="https://i.ytimg.com/vi/RTsGf-JXGcU/maxresdefault.jpg" class="d-block w-100"></img>
		</div>
	</div>
	<a href="#mySlayder" class="carousel-control-prev" role="button" data-slide="prev">
		<span class="carusel-control-prev-icon" aria-hidden="true"></span>
		<span class="str-only"><</span>
	</a>
	<a href="#mySlayder" class="carousel-control-next" role="button" data-slide="next">
		<span class="carusel-control-next-icon" aria-hidden="true"></span>
		<span class="str-only">></span>
	</a>
</div>
<?php include("myadmin/myadmin.php");?>
<?php include("files_script.php");?>
<script type="text/javascript" src="script/script.js"></script>
</body>
</html>