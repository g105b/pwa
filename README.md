# Example of how to turn a PHP website into a Progressive Web App.

**The simplest PWA to demonstrate how to speed up slow apps and add to homescreen / install to desktop.**

+ index.php has the required Manifest in the head section.
+ An install button is hidden by default on index.php.
+ The install button is displayed when PWA is ready to install.
+ page1.php has a two second sleep to emulate slow server-side code.
+ page2.php has a one second sleep and dynamic content (shows the current time, with seconds).
+ The two slow pages are cached to load instantly, and page2 still has dynamic content.
+ App works offline.
+ Viewing page2 offline shows the last-cached time.
+ As soon as networking comes back online, the clock starts ticking again. 

Have fun!

## Thoughts and to dos:

+ How can we capture form POSTs when offline, to send them when the network comes back up?
+ What's the best way to prevent certain user actions when offline?
+ How can we disable caching on certain URLs? (Useful for lazy loading quick-changing content).

## Hosting this application

The concepts of a PWA shown in this example can be hosted anywhere, but this particular implementation is built with PHP server-side code, so can be hosted anywhere PHP can run.

To host locally on your development computer, install PHP and run: `php -S 0.0.0.0:8080`, and then visit http://localhost:8080/ in your web browser. This starts PHP's inbuilt web server.

To host on the internet, you'll need a server connected to the internet. There are companies that offer free PHP hosting, but for $4 USD per month, Digital Ocean is my preferred web host. I have a referral link that gives you $200 for free for anyone that's interested! https://m.do.co/c/1daeec55a6d2 

Here's a step by step guide on starting a server in Digital Ocean, logging in, setting it up, and installing this example PWA so that it's accessible to the internet.

Many of these steps come with assumptions of web dev knowledge. If you require any help, open an issue and I'll try and advise as much as I can.

1. Create a new droplet with your choice of Linux operating system. I currently choose Ubuntu LTS, but my choice will probably change soon once I reassess my requirements. Choose the cheapest droplet available to your region, or choose a nearby region. I use $4/month, European server. Upload your SSH keys (preferred option) or choose a password for root access.
2. Once it's booted, take note of the IP address. From a terminal, `ssh root@12.345.67.890` (replace with your server's IP).
3. For a PWA to work, it must be served via HTTPS, which requires a domain name. Point your domain's DNS A record to this IP. 
4. Assuming a Debian-based operating system is chosen, update it and install PHP and required tools with this command: `apt update && apt full-upgrade -y && apt install -y php8.3-{cli,fpm,xml,zip} nginx git`. Change the version of PHP from 8.3 to whatever the latest release is.
5. Clone the git repository into the public web folder: `cd /var/www && git clone https://github.com/g105b/pwa`
6. Set up Nginx to serve this directory using PHP on your domain name: `nano /etc/nginx/sites-available/pwa`

```
server {
	server_name pwa.g105b.com; # Change this to your actual domain name
	listen 80;
	root /var/www/pwa;
	index index.php;

        location / {
                try_files $uri $uri/ =404;
        }

	location ~ \.php$ {
		include snippets/fastcgi-php.conf;
		fastcgi_pass unix:/var/run/php/php8.3-fpm.sock; # Change this to the version of PHP installed.
	}	
}
```

7. Enable the server in Nginx: `ln -s /etc/nginx/sites-available/pwa /etc/nginx/sites-enabled/pwa` and reload the web server: `systemctl reload nginx`.
8. Set up a TLS certificate for HTTPS: `certbot --nginx --non-interactive --agree-tos --redirect -m your@email.com -d pwa.g105b.com` Change your email and domain name accordingly.

And that's it!

## [Please support my open source work](https://github.com/sponsors/g105b)

If you find this repository helpful, please consider becoming a Github Sponsor, it would mean the world to me! https://github.com/sponsors/g105b
