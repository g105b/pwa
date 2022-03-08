<!DOCTYPE html>
<html lang=en>
<head>
<link href="/PWA-2022/style.css" rel="stylesheet" />    
</head>

<body>
<h1>Klausurenübersicht als Liste</h1>
<div class="row">
	<p>Füge eine neue Klausur hinzu:</p>
</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<label>Name:</label><input></input>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label>Datum:</label><input type="date"></input>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label>Modul:</label><input></input>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label>Notizen:</label><textarea></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<button class="add-test">Hinzufügen</button>
			</div>

<div>
	<table class="klausurenliste">
		<thead>
			<th>Name</th>
			<th>Datum</th>
			<th>Modul</th>
			<th>Notizen</th>
			<th>Bearbeitung</th>
		</thead>
		<tr>
			<td>Test</td>
			<td>18.03.2022</td>
			<td>T6 Fortgeschrittene Web-Entwicklung</td>
			<td>-</td>
			<td>Hier kommen bearbeiten, checkbox & löschen hin</td>
		</tr>
	</table>
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
