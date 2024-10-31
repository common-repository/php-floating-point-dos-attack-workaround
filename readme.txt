=== PHP Floating Point DoS Attack Workaround ===
Contributors: SergeyBiryukov
Tags: php, security, system, setup, hosting
Requires at least: 1.5
Tested up to: 3.4
Stable tag: 0.2

Prevents 32-bit PHP versions from hanging when processing a request containing 2.2250738585072011e-308 value.

== Description ==

Prevents 32-bit PHP versions from hanging when processing a request containing 2.2250738585072011e-308 value.

For more information see the [original post](http://www.exploringbinary.com/php-hangs-on-numeric-value-2-2250738585072011e-308/) and [bug report](http://bugs.php.net/bug.php?id=53632) by Rick Regan.

Based on the [non-plugin solution](http://www.aircraft24.com/en/info/php-float-dos-quickfix.htm) by AirCraft24.com.

== Installation ==

1. Upload `php-floating-point-dos-attack-workaround` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

= 0.2 =
* Added more thorough check
* Terminate execution rather than deleting the variable

= 0.1 =
* Initial release
