=== REST Console Embed ===
Contributors: jeffstieler
Tags: rest, api, console, embed, shortcode
Requires at least: 3.0
Tested up to: 4.2.1
Stable tag: 0.1.1
License: GPLv2+

Shortcode for an embeddable REST API Console, based on Automattic's WordPress.com Console.

== Description ==
Embed a console for exploring REST APIs in your content.

Based on Automattic's WordPress.com Console.

For the console to work properly, the target API will need to:
* respond to versioned requests, specified in the URL (e.g. `/api/v1/endpoint`)
* expose a `/versions` endpoint to provide metadata about the API\'s different versions
* response example here
* expose a `/help` endpoint to provide metadata about the API's endpoints
* response example here

== Installation ==
1. Install REST Console Embed either via the WordPress.org plugin directory, or by uploading the files to your server.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Use the `[rest-console]` shortcode in your content.

== Screenshots ==

1. REST Console embedded in a post.

== Changelog ==
= 0.1.1 =
* Bug - return shortcode output instead of printing.
= 0.1.0 =
* Initial release.