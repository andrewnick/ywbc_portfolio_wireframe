
<!DOCTYPE html>

<html>
<head>
	<title>Portfolio</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700' rel='stylesheet' type='text/css'>
</head>
<body class="grid">
	<header class='site_header grid'>
		<div class="name__container grid grid_pad col-2-8">
			<h1 class="name"><a href='index.php' class="home_link">Andrew Nicholas</a></h1>
		</div>
		<div class="spacing__container col-3-8"></div>
		<nav class="nav__container grid grid_pad col-3-8">
			<div class="nav__button col-1-3">
				<h2><a href='work.php' class="nav__button">Work</a></h2>
			</div>
			<div class="nav__button col-1-3">
				<h2><a href='about.php' class="nav__button">About</a></h2>
			</div>
			<div class="nav__button col-1-3">
				<h2><a href='contact.php' class="nav__button">Contact</a></h2>
			</div>	
		</nav>		
	</header>

	<main class="grid">
		<h1 class="main__title col-1-1">Success</h1>
		<div class="spacing__container grid col-2-8"></div>
		<section class="contact__container container__background grid col-4-8" >
			<div class="grid grid_pad">
				<h3>Thank you <?php echo $_POST["name"];?> for your message</h3>
			</div> 			
		</section>	
		<div class="spacing__container grid col-2-8"></div>
	</main>

	<footer class='site_footer grid grid_pad'>
		<div class="details__container col-1-8">
			<h4 class="">Andrew Nicholas</h4>
			<h4 class=""><a class="link_text" href="mailto:andrew.d.nicholas@gmail.com" target="_top"> andrew.d.nicholas@gmail.com </a></h4>
		</div>
	</footer>
</body>
</html>