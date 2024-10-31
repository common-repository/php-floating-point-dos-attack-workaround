<?php
/*
Plugin Name: PHP Floating Point DoS Attack Workaround
Version: 0.3-trunk
Plugin URI: http://core.trac.wordpress.org/ticket/16097
Description: Prevents 32-bit PHP versions from hanging when processing a request containing 2.2250738585072011e-308 value.
Author: Sergey Biryukov
Author URI: http://profiles.wordpress.org/sergeybiryukov/
*/

$php_bug_53632_vars = '';
if ( isset( $_GET ) )
	$php_bug_53632_vars .= '|' . serialize( $_GET );
if ( isset( $_POST ) )
	$php_bug_53632_vars .= '|' . serialize( $_POST );
if ( isset( $_COOKIE ) )
	$php_bug_53632_vars .= '|' . serialize( $_COOKIE );

if ( ! empty( $php_bug_53632_vars ) ) {
	if ( false !== strpos( str_replace( '.', '', $php_bug_53632_vars ), '22250738585072011' ) ) {
		if ( ! headers_sent() )
			header('Status: 422 Unprocessable Entity');
		die('Script interrupted due to floating point DoS attack.');
	}
}
unset( $php_bug_53632_vars );
?>