<?php
require 'inc/constants.php';
require 'inc/conf.php';
require 'inc/functions.php';
require 'inc/classes.php';
require 'inc/dbmanager.php';

$dbManager = new DbManager();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Stats - EncryptChat</title>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta name="viewport" content="width=device-width" />
	<link href="style.css" rel="stylesheet" />
</head>
<body>
	<header>
		<div class="content-wrapper">
			<nav>
				<ul>
					<li id="site-title"><a href="index.php">EncryptChat</a></li>
					<div id="site-links">
						<li><a href="stats.php">Stats</a></li>
						<li><a href="about.php">About</a></li>
					</div>
				</ul>
			</nav>
		</div>
	</header>
	<div id="body">
		<section class="content-wrapper main-content clear-fix">
			<h2>Stats about EncryptChat</h2>
			<p>
				Number of chat rooms: <?php echo $dbManager->countChatrooms(); ?><br />
				Number of messages: <?php echo $dbManager->countMessages(); ?>
			</p>
		</section>
	</div>
	<footer>
		<p>&copy; 2022 EncryptChat </p>
	</footer>
</body>
</html>