<div>
This is page 2, it is slow and shows the current time.
<?php
sleep(1);
echo date("H:i:s A");
?>
<br><br>
<a href="/">Back to homepage</a>
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