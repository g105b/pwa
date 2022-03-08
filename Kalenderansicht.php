<!DOCTYPE html>
<html lang=en>
<head>
	<link href="/PWA-2022/style.css" rel="stylesheet" />    
</head>

<h1>Klausurenübersicht als Kalender</h1>
<div>
	<p>Füge eine neue Klausur hinzu:</p>
	<p>Name:</p><input></input>
	<p>Datum:</p><input type="date"></input>
	<p>Modul:</p><input></input>
	<p>Notizen:</p><input></input>
	<br><button class="add-test">Hinzufügen</button>
</div>

<div>
	<p>hier werden die Klausuren angezeigt</p>
</div>

<!-- Sidebar -->
<nav class="main-menu">
<div>
	<a class="logo" href="http://startific.com">
    </a> 
</div> 
<div class="scrollbar" id="style-1">
<ul>	 
	<li>                                   
		<a href="index.php">
			<i class="fa fa-home"></i>
			<span class="nav-text">Home</span>
		</a>
	</li>   
   
	<li>                                 
		<a href="Listenansicht.php">
			<i class="fa fa-list"></i>
			<span class="nav-text">Listenansicht</span>
		</a>
	</li>   

	<li>                                 
		<a href="Kalenderansicht.php">
			<i class="fa fa-calendar"></i>
			<span class="nav-text">Kalenderansicht</span>
		</a>
	</li>   
</nav>