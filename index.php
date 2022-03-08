<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Klausurenübersicht</title>
	<link rel="manifest" href="/manifest.json" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="/PWA-2022/style.css" rel="stylesheet" />
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
<h1>Klausurenübersicht</h1>
<div class="wrapper">
	<nav id="sidebar">
		<div class="sidebar-header">
			<h3>Deine Klausurenübersicht</h3>
			<strong>DK</strong>
		</div>

		<ul class="list-unsyteled components">
			<li class="active">
				<a href="homeSubmenu">
					<i class="fas fa-home"></i>
					Home
				</a>
			</li>
			<li class="active">
				<a href="page1.php">
					<i class="fas fa-list"></i>
					Listenansicht
				</a>
			</li>
			<li class="active">
				<a href="page2.php">
					<i class="fas fa-calendar"></i>
					Kalenderansicht
				</a>
			</li>
		</ul>
	</nav>

	<div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
        </nav>
    </div>
</div>

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

<div>
	<button id="enable">Enable the PWA</button>
</div>

<button id="install">Install this app</button>
<script src="/script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
