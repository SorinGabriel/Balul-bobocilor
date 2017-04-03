<!DOCTYPE html>

<html lang="ro">

<head>
<title>Balul bobocilor - 2016</title>
<meta name="author" content="Sorin Marica">
<meta name="keywords" content="balul bobocilor,asmi,asa,balul bobocilor 2016">
<meta name="description" content="Balul bobocilor organizat de ong-urile facultatilor ce apartin de universitatea din Bucuresti">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="styles/normal.css" media="screen and (min-width:700px)">
<link type="text/css" rel="stylesheet" href="styles/mobile.css" media="screen and (max-width:700px)">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Gloria+Hallelujah|Montserrat|Orbitron|Yanone+Kaffeesatz" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
<script type="text/javascript">
$(document).on('click', 'a', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});
</script>
</head>

<body>

<header id="titlu">
	<span class="organizator"><a href="http://as-mi.ro"><img src="images/asmi.png" alt="ASMI"></a></span>
	<span class="organizator"><a href="http://www.asaa.ro"><img src="images/asid.png" alt="ASID"></a></span>
	<span class="organizator"><a href="http://asid-ub.ro"><img src="images/asaa.png" alt="ASAA"></a></span>
	<h1>Balul bobocilor - 2016</h1>
</header>

<nav id="promo">
	<div id="layerpromo">
		<a href="#poll"><span id="voteaza">Voteaza</span></a>
	</div>
</nav>

<section id="concurenti">
<!-- aici sunt prezentati concurentii sub forma unor articole -->
	<article>
		<h2>Andrei Tutulan</h2>
		<p>Facultate:Matematica si Informatica</p>
		<img src="images/boboci/AndreiTutulan1-min.JPG" alt="Andrei Tutulan">
		<img src="images/boboci/AndreiTutulan2-min.JPG" alt="Andrei Tutulan">
	</article>
	<article>
		<h2>Georgiana-Andreea Sinescu</h2>
		<p>Facultate:Matematica si Informatica</p>
		<img src="images/boboci/Georgiana-AndreeaSinescu1-min.JPG" alt="Georgiana-Andreea Sinescu">
		<img src="images/boboci/Georgiana-AndreeaSinescu2-min.JPG" alt="Georgiana-Andreea Sinescu">
	</article>
	<article>
		<h2>Bogdan Mihalache</h2>
		<p>Facultate:Matematica si Informatica</p>
		<img src="images/boboci/BogdanMihalache1-min.JPG" alt="Bogdan Mihalache">
		<img src="images/boboci/BogdanMihalache2-min.JPG" alt="Bogdan Mihalache">
	</article>
	<article>
		<h2>Malina Stoicanescu</h2>
		<p>Facultate:Matematica si Informatica</p>
		<img src="images/boboci/MalinaStoicanescu1-min.JPG" alt="Malina Stoicanescu">
		<img src="images/boboci/MalinaStoicanescu2-min.JPG" alt="Malina Stoicanescu">
	</article>
	<article>
		<h2>Adrian Ghica</h2>
		<p>Facultate:Administratie si Afaceri</p>
		<img src="images/boboci/AdrianGhica1-min.JPG" alt="Adrian Ghica">
		<img src="images/boboci/AdrianGhica2-min.JPG" alt="Adrian Ghica">
	</article>
	<article>
		<h2>Antonela Catalina Tamas</h2>
		<p>Facultate:Administratie si Afaceri</p>
		<img src="images/boboci/AntonelaCatalinaTamas1-min.JPG" alt="Antonela Catalina Tamas">
		<img src="images/boboci/AntonelaCatalinaTamas2-min.JPG" alt="Antonela Catalina Tamas">
	</article>
	<article>
		<h2>Andrei Paunescu</h2>
		<p>Facultate:Administratie si Afaceri</p>
		<img src="images/boboci/AndreiPaunescu1-min.JPG" alt="Andrei Paunescu">
		<img src="images/boboci/AndreiPaunescu2-min.JPG" alt="Andrei Paunescu">
	</article>
	<article>
		<h2>Eva Georgia Adam</h2>
		<p>Facultate:Administratie si Afaceri</p>
		<img src="images/boboci/EvaGeorgiaAdam1-min.jpg" alt="Eva Georgia Adam">
		<img src="images/boboci/EvaGeorgiaAdam2-min.JPG" alt="Eva Georgia Adam">
	</article>
	<article>
		<h2>Adi Petrovai</h2>
		<p>Facultate:Istorie</p>
		<img src="images/boboci/AdiPetrovai1-min.JPG" alt="Adi Petrovai">
		<img src="images/boboci/AdiPetrovai2-min.JPG" alt="Adi Petrovai">
	</article>
	<article>
		<h2>Cristina Radu</h2>
		<p>Facultate:Istorie</p>
		<img src="images/boboci/CristinaRadu1-min.JPG" alt="Cristina Radu">
		<img src="images/boboci/CristinaRadu2-min.JPG" alt="Cristina Radu">
	</article>
	<article>
		<h2>Lucian Tanase</h2>
		<p>Facultate:Istorie</p>
		<img src="images/boboci/LucianTanase1-min.JPG" alt="Lucian Tanase">
		<img src="images/boboci/LucianTanase2-min.JPG" alt="Lucian Tanase">
	</article>
	<article>
		<h2>Simona Anastasiu</h2>
		<p>Facultate:Istorie</p>
		<img src="images/boboci/SimonaAnastasiu1-min.jpg" alt="Simona Anastasiu">
		<img src="images/boboci/SimonaAnastasiu2-min.JPG" alt="Simona Anastasiu">
	</article>

</section>

<?php

$mysqli = new mysqli('localhost', 'asmiro_sorin', '2u~dhq0UyA_q', 'asmiro_balboboci');
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

$ip=$_SERVER['REMOTE_ADDR'];

$sql=$mysqli->prepare("SELECT concurent FROM `voturi` WHERE `ip`=?");
$sql->bind_param("s",$ip);
$sql->execute();
$sql->store_result();
$sql->bind_result($concurent);
$sql->fetch();
$ok=false;
if ($sql->num_rows>0)
{
	$ok=true;
}

$sql2=$mysqli->prepare("SELECT concurent FROM `voturifete` WHERE `ip`=?");
$sql2->bind_param("s",$ip);
$sql2->execute();
$sql2->store_result();
$sql2->bind_result($concurenta);
$sql2->fetch();
$ok2=false;
if ($sql2->num_rows>0)
{
	$ok2=true;
}

?>

<section id="poll">
	<h2>Voteaza concurentul preferat</h2>
	<article>
		<h3>Mister</h3>
		<div class="pozitionare">
		<?php
		$cookie_name = "vot";
		if(!isset($_COOKIE[$cookie_name])) 
		{
			if (!$ok)
			{
				echo '
				<div class="alegere" onclick="vote(this)"><p>Adi Petrovai</p></div>
				<div class="alegere" onclick="vote(this)"><p>Adrian Ghica</p></div>
				<div class="alegere" onclick="vote(this)"><p>Andrei Paunescu</p></div>
				<div class="alegere" onclick="vote(this)"><p>Andrei Tutulan</p></div>
				<div class="alegere" onclick="vote(this)"><p>Bogdan Mihalache</p></div>
				<div class="alegere" onclick="vote(this)"><p>Lucian Tanase</p></div>';
			}
			else
			{
				echo '<p style="padding-bottom:1em;font-size:1.4em;">Ati votat deja pentru '.$concurent.'</p>';
			}		
		}
		else
		{
			echo '<p style="padding-bottom:1em;font-size:1.4em;">Ati votat deja pentru '.$_COOKIE[$cookie_name].'</p>';
		}
		?>
		</div>
	</article>
	
	<article>
		<h3>Miss</h3>
		<div class="pozitionare">
		<?php
		
		$cookie_name = "votfete";
		if(!isset($_COOKIE[$cookie_name])) 
		{
			if (!$ok2)
			{
				echo '
				<div class="alegere" onclick="voteg(this)"><p>Antonela Catalina Tamas</p></div>
				<div class="alegere" onclick="voteg(this)"><p>Cristina Radu</p></div>
				<div class="alegere" onclick="voteg(this)"><p>Eva Georgia Adam</p></div>
				<div class="alegere" onclick="voteg(this)"><p>Georgiana-Andreea Sinescu</p></div>
				<div class="alegere" onclick="voteg(this)"><p>Malina Stoicanescu</p></div>
				<div class="alegere" onclick="voteg(this)"><p>Simona Anastasiu</p></div>';
			}
			else
			{
				echo '<p style="padding-bottom:1em;font-size:1.4em;">Ati votat deja pentru '.$concurenta.'</p>';
			}
		}
		else
		{		
			echo '<p style="padding-bottom:1em;font-size:1.4em;">Ati votat deja pentru '.$_COOKIE[$cookie_name].'</p>';
		}
		?>
		</div>
	</article>
</section>

<footer id="informatii">
</footer>

</body>

</html>

