The simplest PWA to demonstrate how to speed up slow apps and add to homescreen / install to desktop.

+ index.php has the required Manifest in the head section.
+ An install button is hidden by default on index.php.
+ The install button is displayed when PWA is ready to install.
+ page1.php has a two second sleep to emulate slow server-side code.
+ page2.php has a one second sleep and dynamic content.
+ The two slow pages are cached to instantly load, and page2 still has dynamic content.

Have fun!