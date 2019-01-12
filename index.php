<?php require_once('admin/scripts/read.php');?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Heu Guyz</title>
</head>
<body>
<header>
	<h1>Header</h1>
	<nav>
		<ul>
			<li><a href="#">Action</a></li>
			<li><a href="#">Comedy</a></li>
			<li><a href="#">Action</a></li>

		</ul>
	</nav>
</header>

<?php
//testing code
$results = getAll('tbl_movies');
while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
	
<div>
	<h2><?php echo $row['movies_title'];?></h2>
	<p><?php echo $row['movies_year'];?></p>
	<h2><?php echo $row['movies_runtime'];?></h2>
	<section><?php echo $row['movies_storyline'];?></section>
<video width="400" controls>
  <source src="video/<?php echo $row['movies_cover'];?>" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

	<img src="images/<?php echo $row['movies_trailer'];?>" alt="">
</div>

<?php endwhile;?>

<footer>
	<p>copyright whatever</p>
	</footer>
</body>
</html>