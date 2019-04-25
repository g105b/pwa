The simplest PWA to demonstrate how to speed up slow apps and add to homescreen / install to desktop.

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