<?php
/**
 * @package Hello_Words
 * @version 1.0.0
 */
/*
Plugin Name: Hello Words
Plugin URI: http://wordpress.org/plugins/hello-words/
Description: Esto no es solo un plugin, esto simboliza la revolución de las palabras malsonantes
Author: Inconciente Colectivo
Version: 1.0.0
Author URI: http://in.conciente.colectivo/
*/

/**
 * cambia la palabra WordPress por WordPressDAM
 */
 function renym_wordpress_typo_fix( $text ) {
    return str_replace( 'WordPress', 'WordPressDAM', $text );
}

add_filter( 'the_content', 'renym_wordpress_typo_fix' );

