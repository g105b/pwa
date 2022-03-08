<!DOCTYPE html>
<html lang=en>
<head>
	<link href="/PWA-2022/style.css" rel="stylesheet" />    
</head>

<div>
This is page 2, it is slow and shows the current time.
<?php
sleep(1);
echo date("H:i:s A");
?>
<br><br>
<a href="/PWA-2022/">Back to homepage</a>
</div>

<script>
// In a real application, the whole page wouldn't be updated - instead,
// request new data, and the script would know to only update those
// DOM nodes would indicate that they represent dynamic content, how often to
// specific elements.
function updatePage() {
	fetch(window.location.href).then(function(response) {
		return response.text();
	}).then(function(html) {
		let newDocument = (new DOMParser()).parseFromString(html, "text/html");
		document.querySelector("div").innerHTML = newDocument.querySelector("div").innerHTML;
	});
	setTimeout(updatePage, 900);
}

updatePage();

</script>

<div>
	<p>Füge eine neue Klausur hinzu:</p>
	<input></input>
	<input></input>
	<input></input>
	<input></input>
	<button>Hinzufügen</button>
</div>

<div>
	<p>hier werden die Klausuren angezeigt</p>
</div>