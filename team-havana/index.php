<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<?php $pageTitle = "Team Havana | Lab 2: The Mash Up"; ?>
	<link rel="stylesheet" href="css/style.css">
</head>

<header class="havana">
		
		<a href="index.php">
			<h1>Team Havana</h1>
			<img src="images/cuba.jpg" alt="cuba">
		</a>
	</header>
<body class="container">

<?php include "inc/nav.inc"; ?>

<main class="members">
	
	<h1>Members</h1>

	<div> 
		Hi! We are Team Havana It’s a pleasure to meet you! 🤗 Here are the members of our team! </div>

	<section class="team">
	<div class="dd">
	<h2>Dominique Dorvil</h2>
		<a href="dom_index.php">
			<img src="images/dompic.jpg" alt="dom">
			</a>
		<div>Information Architect</div>
	</div>

	
	<div class="mp">
	<h2>Michael Pearson</h2>
		<a href="mp_index.php">
			<img src="images/me.jpeg" alt="mpearson">
			</a>
			<div>Technical Coder</div>
	</div>


	<div class="va">
	<h2>Vanessa Acevedo</h2>
		<a href="v_index.php">
			<img src="images/me.jpg" alt="vanessa">
			</a>
			<div>Designer</div>
	</main>
	
</section>

</div>

<nav class="homepagemenu">
<ul>
	<li><a href="dom_index.php">Dominique Dorvil</a></li>
	<li><a href="v_index.php">Vanessa Acevedo</a></li>
	<li><a href="mp_index.php">Michael Pearson</a></li>
	


</ul>
</nav>


<?php include "inc2/footer.inc"; ?>
<?php include "inc2/scripts.inc"; ?>

</body>
</html>
