<?php 
session_start();

if(!isset($_SESSION["theme"]))
{
	$_SESSION["theme"] = "light";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Site with dark theme</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styles/main.css">
		<link rel="stylesheet" type="text/css" href="styles/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
	</head>
	<body>
		<div class="wrapper">
			<div class="theme-button" id="theme-button">Change theme</div>
			<header class="header">
				<div class="header__content">
					<h1>Site with dark theme</h1>
					<nav class="nav">
						<div class="nav__content">
							<a href="#" class="nav__item nav__item_active">Home</a>
							<a href="#" class="nav__item">Blog</a>
							<a href="#" class="nav__item">About</a>
							<a href="#" class="nav__item">Contacts</a>
						</div>
					</nav>
				</div>
			</header>
			<main class="main">
				<article class="main__content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<ul>
						<li>Lorem ipsum dolor sit amet.</li>
						<li>Lorem ipsum dolor sit amet.</li>
						<li>Lorem ipsum dolor sit amet.</li>
						<li>Lorem ipsum dolor sit amet.</li>
						<li>Lorem ipsum dolor sit amet.</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</article>
			</main>
		</div>
		<script type="text/javascript" src="scripts/themes.js"></script>
	</body>
</html>