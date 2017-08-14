=== Force Members Logon ===
Contributors: Dean Walker
Tags: Members, logon, login, Justin Tadlock, force logon, force login
Requires at least: 4.3
Stable tag: 1.0.0
License: GPLv2 or later

== Description ==
Add-on plugin for the <a href="https://en-gb.wordpress.org/plugins/members/">'Members'</a> plugin written by Justin Tadlock. This add-on displays the standard WordPress logon page if user who has not already logged on attempts to access a protected page or post. This allows the Members plugin to check the users roles against the required roles for the post/page. User is redirected to page/post after logon and will either see the page/post or the error message defined in the Members plugin (if they don't have a required role).

== Installation ==

1. Upload the plugin to your WordPress installation
2. Activate the plugin through the "Plugins" menu in Wordpress.

== Usage ==

Requires Members plugin to be activated.

== Screenshots ==

None

== Frequently Asked Questions ==

1. I get an error 'You don't have permission to access /wp-login.php on this server'
The WordPress logon redirect function adds the URL of the page after the logon screen as a query string parameter. Some hosts or plugins may reject the request if the query string parameter looks suspicious, e.g. it contains 'localhost' or '127.0.0.1' etc. Check you .htaccess files if using Apache

== Upgrade Notice ==

None

== Changelog ==

None

