<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TUGAS 2 | WEB LANJUTAN</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/img1.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img style="width: 55%;"src="<?php echo AST; ?>/img/img1.png" class="brand">
			<div class="user">Ananda Salsabila Khairi</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/home.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/golongan">
						<img class="icon" src="<?php echo AST; ?>/img/gol.png" alt=""> Golongan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/users">
						<img class="icon" src="<?php echo AST; ?>/img/user.png" alt=""> Users
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/pelanggan">
						<img class="icon" src="<?php echo AST; ?>/img/pelanggan.png" alt=""> Pelanggan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/index">
						<img class="icon" src="<?php echo AST; ?>/img/logout.png" alt=""> LogOut
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. Designed by Ananda Salsabila Khairi
		</footer>
	</main>

</body>

</html>