<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Music</title>
	<link rel="icon" href="/img/logo.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="./js/script.js"></script>
</head>

<body>
	<header>
		<a href="index.php"><img src="/img/logo.png" alt="Logo"></a>
		<nav>
			<ul class="Nav-List" style="margin-top: 12px;">
				<li><a href="index.php">Home</a></li>
				<li><a>Genres</a></li>
			  <div class="dropdown">
    			<button class="dropbtn">Festivals<i class="fa fa-caret-down"></i></button>
				<div class="dropdown-content">
				  <a href="./tomorrowland.php">Tomorrowland</a>
				  <a href="./frequency.php">Frquency</a>
				  <a href="./donauinsel.php">Donauinselfest</a>
				  <a href="./ultramusicfestival.php" >Ultra Music Festival</a>
			  	</div>
			</div> 
				<li><a>Forum</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
			<div id="registrateLogIn">
				<ul>
					<li><a href="login.php">Log In</a></li>
					<li><a href="registrate.php">Sign Up</a></li>
				</ul>
			</div>
		</nav>
		<style>
			.Nav-List li{font-size: 20;}
			a:hover{color: #494949; text-decoration: none;}
			.Nav-List li:hover{font-size: 24px;}
			.dropdown {float: left; overflow: hidden;}
			.dropdown .dropbtn{font-size: 20px; padding-left: 0px; padding-right: 18px; border: none; outline: none; color: #494949; background-color: inherit; font-family: 'Courier New', 'Courier', monospace; transition-duration: 0.4s}
			.dropdown-content {display: none; position: absolute; background-color: #F0F2F2; max-width: 200px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1;}
			.dropdown-content a {float: none; color: #494949; padding: 12px 16px; text-decoration: none; display: block; text-align: left;}
			.dropdown-content a:hover {background-color: #ddd;}
			.dropdown:hover .dropdown-content {display: block;}
			.dropbtn:hover{font-size:24px;; cursor: pointer;}
		</style>
</header>