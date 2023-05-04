<?php
	require "inc/constants.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>About - EncryptChat</title>
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<meta name="viewport" content="width=device-width" />
		<link href="style.css" rel="stylesheet"/>
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
				<h2>About</h2>
				<p>
					EncryptChat is a PHP and Javascript based chat with end-to-end encryption.
					The database will only contain your encrypted messages, and will have no knowledge of the decryption key.
					Usernames are also encrypted in the database.
					Encryption is provided using 256-bit AES-GCM.
					<br/>
					<br/>
					
				</p>
				<h3>Usage</h3>
				<p>
					Create a chatroom, copy the URL of the chatroom and send it to your friend.
				</p>
				<h3>How it works</h3>
				<p>
					When you create a chatroom with a custom password, the encryption key will be derived with pbkdf2. The generated <span class="roomid">room ID</span> will be used as a salt
					for pbkdf2. If no custom password is entered, the <span class="key">key</span> will be randomly generated.
					When the chatroom is created with a random <span class="key">key</span>, the <span class="key">key</span> will be stored in the URL itself.
					It will look something like this;
					<br/><br/>
					localhost/encryptchat/chatroom.php?id=<span class="roomid">27SJrBVkQCsQFaCnjU94</span>#<span class="key">1BZX3QOXF78qq0r9HgZk1AeZK-sKkX3VZVKf40VdE6A</span>
					<br/><br/>
					The <span class="key">purple</span> part is the <span class="key">key</span> itself encoded with base64.
					<span class="roomid">Green</span> part is the <span class="roomid">room ID</span>.
					The <span class="roomid">room ID</span> will always be present, however the encryption <span class="key">key</span> will be in the URL only when using a random <span class="key">key</span>.
					When using a custom password, users will be required to enter the password upon joining a chatroom.
					The URL has a hashtag before the <span class="key">key</span> so it won't be sent to the server. Even if you have access log enabled on the web server,
					only the <span class="roomid">room ID</span> will be seen in the logs.
					<br/><br/>
					
				</p>
			</section>
		</div>
		<footer>
			<p>&copy; 2022 EncryptChat </p>
		</footer>
	</body>
</html>