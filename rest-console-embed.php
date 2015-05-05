<?php
/**
 * Plugin Name: REST Console Embed
 * Description: Shortcode for an embeddable REST API Console, based on Automattic's <a href="https://developer.wordpress.com/docs/api/console/">WordPress.com Console</a>.
 * Author: jeffstieler
 * Author URI: http://jeffstieler.com
 * Version: 0.1.1
 * License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

class REST_Console_Embed {

	protected $tag_name = 'rest-console';

	function init() {

		add_shortcode( $this->tag_name, array( $this, 'shortcode' ) );

	}

	function shortcode( $atts ) {

		$defaults = array(
			'redirect_uri' => '',
			'api_root'     => '',
			'oauth_uri'    => '',
			'auth'         => '',
			'width'        => '100%',
			'height'       => '500px'
		);

		$shortcode_atts = shortcode_atts( $defaults, $atts );

		$iframe_width   = $shortcode_atts['width'];
		$iframe_height  = $shortcode_atts['height'];

		unset( $shortcode_atts['width'], $shortcode_atts['height'] );

		$console_args = array_map( 'esc_attr', array_filter( $shortcode_atts ) );
		$console_url  = plugins_url( 'console/index.html', __FILE__ );

		$iframe_src   = add_query_arg( $console_args, $console_url );

		return sprintf(
			'<div class="%s" style="width: %s; height: %s;"><iframe width="100%%" height="100%%" src="%s"></iframe></div>',
			esc_attr( $this->tag_name ),
			esc_attr( $iframe_width ),
			esc_attr( $iframe_height ),
			esc_url( $iframe_src )
		);

	}

}

add_action( 'wp_loaded', array( new REST_Console_Embed(), 'init' ) );