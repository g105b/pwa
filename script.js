let installEvent = null;
let installButton = document.getElementById("install");

if ('serviceWorker' in navigator) {
	window.addEventListener('load', () => {
		navigator.serviceWorker.register('/service-worker.js')
			.then(registration => {
				console.log('Service Worker is registered', registration);
			})
			.catch(err => {
				console.error('Registration failed:', err);
			});
	});

	window.addEventListener("beforeinstallprompt", (e) => {
		e.preventDefault();
		console.log("Ready to install...");
		installEvent = e;
		document.getElementById("install").style.display = "initial";
	});

	if(installButton) {
		installButton.addEventListener("click", function() {
			installEvent.prompt();
		});
	}
}