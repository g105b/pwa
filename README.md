Example of how to turn a PHP website into a Progressive Web App.
================================================================

Progressive Web Apps (PWAs) are a set of technologies that allow web developers to bridge the gap between web and native experiences, while still respecting the web technologies that drive the applications.

A well-architectured server-side-rendered application can easily be converted into a PWA to gain all the benefits, so long as URIs are the primary driver for the application's routing.

Features of the PHP application
-------------------------------

The example application provided here is a realtime interactive London underground dashboard, with the following main features:

+ Lazy-loaded list of stations
+ Interactive journey planner
+ Realtime train locations and platform announcements
+ Realtime overview of transport statuses

Great thanks goes out to the Transport for London APIs where this data is taken from.

Features of the PWA
-------------------

Without a PWA, the above application runs just fine, with the typical request-response delay you would expect of a website. Adding the PWA removes any delay between clicks, allows the page to work offline, and offers an "installable" version of the website to launch from the desktop in its own window. To achieve this, no server-side logic has to be changed.

List of PWA features:

+ An "install" banner appears to allow installing the application to the desktop
+ Offline functionality
+ Cache is refreshed automatically (no "please refresh" message required)
+ Dynamic content is shown to be out-of-date when offline

Live example
------------

Head over to https://pwa.g105b.com for a live example of this code.

To run the code locally, install with Composer, then run `vendor/bin/serve` to start a local server at http://localhost:8080
