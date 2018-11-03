<!DOCTYPE html>
<html>
<title>Franky Pi</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>
		body,h1,h2 {font-family : "Lato"; sans-serif}
		body,html {height: 100%}
		p {line-height : 2}
		.bgimg{ 
			min-height: 100%;
			background-position: center;
			background-size: cover; 
		}
		.login {text-decoration: none}

		.bgimg {background-image: url("https://i.imgur.com/4c8hBV0.jpg")}
		</style>

	<body>
		<header class="w3-display-container w3-wide bgimg w3-grayscale-mine" id="home">
			<div class="w3-display-middle w3-text-white w3-center">
				<h1 class="w3-jumbo"><a href="index.php?name=You" class="login">Welcome Stranger </a></h1>
				<h2><b>nothing here matters...</b></h2>
				<p><?php echo date('d/m h:i'); ?></p>

				<p>Hello there who are you ?</p>

				<form action="index.php" method="post">
					<div class="container">
						<input type="text" name="password" placeholder="Enter Password" required />
						<button type="submit">Submit</button>
					</div>
				</form>
			</div>
		</header>

		<footer class="w3-center w3-black w3-padding-16">
			<p>Powered by Lamahxx</p>
		</footer>
	</body>
</html>