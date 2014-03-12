<?php
/*
Plugin Name: gj-pingkill
Plugin URI: https://github.com/GunnJerkens/gj-pingkill
Description: Stop XMLRPC attack by killing pingbacks. See: http://blog.sucuri.net/2014/03/more-than-162000-wordpress-sites-used-for-distributed-denial-of-service-attack.html
Version: 0.1
Author: GunnJerkens
Author URI: http://gunnjerkens.com
Author Email: devteam@gunnjerkens.com

License: 
http://opensource.org/licenses/mit-license.html
*/

add_filter( ‘xmlrpc_methods’, function( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} );