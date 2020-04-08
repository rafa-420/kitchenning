<?php
	
	include("pratos.php");

	/*
	echo "<pre>";
	print_r($pratos);
	echo "</pre>";
	exit;
	*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kitchening</title>
	<link rel="stylesheet" href="./css/styles.css">
</head>
<body>
	
	<header class="container">
		<img src="./img/logo.jpg" alt="Kitchenning">
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Quem Somos</a></li>
				<li><a href="#">Portifolio</a></li>
				<li><a href="#">Serviços</a></li>
				<li><a href="#">Lojas</a></li>
				<li><a href="#">Contato</a></li>
			</ul>
		</nav>
	</header>
		
	<img id="banner" src="./img/img-banner.jpg" alt="Carne Suculenta" class="container">
	<main class="container">
		<?php foreach($pratos as $i => $prato) { ?>
		<div class="produto">
			<img src="<?= $prato['img'] ?>" alt="Produto 1">
			<h2><?= $prato['nome'] ?></h2>
			<p><?= $prato['descricao'] ?></p>
			<a href="prato.php?pos=<?=$i?>">Ver Mais</a>
		</div>
		<?php } ?>
		<!--
		<div class="produto">
			<img src="./img/img-pdto-1.jpg" alt="Produto 1">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa eaque maiores id iusto ducimus unde cumque minus quaerat, sint inventore fugit incidunt, officiis a dolorem. Autem itaque sit numquam pariatur.</p>
			<a href="#">Ver Mais</a>
		</div>
		<div class="produto">
			<img src="./img/img-pdto-1.jpg" alt="Produto 1">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa eaque maiores id iusto ducimus unde cumque minus quaerat, sint inventore fugit incidunt, officiis a dolorem. Autem itaque sit numquam pariatur.</p>
			<a href="#">Ver Mais</a>
		</div>
		<div class="produto">
			<img src="./img/img-pdto-1.jpg" alt="Produto 1">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa eaque maiores id iusto ducimus unde cumque minus quaerat, sint inventore fugit incidunt, officiis a dolorem. Autem itaque sit numquam pariatur.</p>
			<a href="#">Ver Mais</a>
		</div>
		<div class="produto">
			<img src="./img/img-pdto-1.jpg" alt="Produto 1">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa eaque maiores id iusto ducimus unde cumque minus quaerat, sint inventore fugit incidunt, officiis a dolorem. Autem itaque sit numquam pariatur.</p>
			<a href="#">Ver Mais</a>
		</div>
		<div class="produto">
			<img src="./img/img-pdto-1.jpg" alt="Produto 1">
			<h2>Lorem Ipsum</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa eaque maiores id iusto ducimus unde cumque minus quaerat, sint inventore fugit incidunt, officiis a dolorem. Autem itaque sit numquam pariatur.</p>
			<a href="#">Ver Mais</a>
		</div>
		-->
	</main>
	<footer class="container">
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Quem Somos</a></li>
				<li><a href="#">Portifolio</a></li>
				<li><a href="#">Serviços</a></li>
				<li><a href="#">Lojas</a></li>
				<li><a href="#">Contato</a></li>
			</ul>
		</nav>
	</footer>
</body>
</html>