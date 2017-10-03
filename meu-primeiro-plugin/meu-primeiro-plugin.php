<?php
 
/**
 * Plugin Name: Meu primeiro plugin
 * Plugin URI:  https://www.meetup.com/pt-BR/Meetup-Wordpress-Floripa/
 * Description: Apenas um exemplo de plugin
 * Version:     0.0.1
 * Author:      Meetup Florianópolis
 * Author URI:  https://www.meetup.com/pt-BR/Meetup-Wordpress-Floripa/
 * License:     GPLv2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: meu-primeiro-plugin
 * Domain Path: /languages
 */

// Add o texto "Olá visitante, esse é meu primeiro plugin :D" ao conteudo do post
function meu_primeiro_plugin ( $content ) {
	$content .= '<hr>';
  	$content .= 'Olá visitante, esse é meu primeiro plugin :D';
  	$content .= '<hr>';
  	return $content;
}

// Hook (gancho) para exibir a função no filter the_content.
add_filter( 'the_content', 'meu_primeiro_plugin' );