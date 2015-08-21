<?php 
/**
 * Plugin Controller
 * @fileoverview Functions for setup and control of shortcodes used in WP Posts.
 * @package WordPress
 */

/**
 * Define Shortcode
 * @desc Add shortcode to WP and process found codes.
 * @param {object} $atts Attributes of shortcode.
 * Shortcode: [rnkrwp id="" format=""]
 */
function rnkrwp_shortcode( $atts ){
	
	//Extract attributes
	extract( shortcode_atts( array(
		'id'		=> null,
		'format'	=> null
	), $atts ) );

	return rnkrwp_process_shortcode( $id, $format );
	
}
add_shortcode( 'rnkrwp', 'rnkrwp_shortcode' );

/**
 * Process Shortcodes
 * @desc Handle shortcode attributes and output needed DOM elements.
 * @param {string} id ID of list to load (required).
 * @param {string} format Display type of the list (Optional - Default Grid if undefined).
 */
function rnkrwp_process_shortcode( $id, $format ){
	
	//Check for values
	if( $id == null || '' ){
		return false;
	}
	if( $format == null || $format == '' ){
		$format = 'grid';
	}
	
	//Get widget options
	$rnkrwp_prefs = get_option( 'rnkrwp' );
	
	//Adjust data
	$header_show_name			= ( $rnkrwp_prefs[ 'header_show_name' ] ? 'true' : 'false' );
	$header_show_image			= ( $rnkrwp_prefs[ 'header_show_image' ] ? 'true' : 'false' );
	$header_show_username		= ( $rnkrwp_prefs[ 'header_show_username' ] ? 'true' : 'false' );
	$header_show_criteria		= ( $rnkrwp_prefs[ 'header_show_criteria' ] ? 'true' : 'false' );
	$header_bgcolor				= preg_replace( '(\#)', '', $rnkrwp_prefs[ 'header_bgcolor' ] );
	$header_fontcolor			= preg_replace( '(\#)', '', $rnkrwp_prefs[ 'header_fontcolor' ] );
	$list_fontcolor				= preg_replace( '(\#)', '', $rnkrwp_prefs[ 'list_fontcolor' ] );
	$list_slidebgcolor			= preg_replace( '(\#)', '', $rnkrwp_prefs[ 'list_slidebgcolor' ] );
	$list_displaydescriptions	= ( $rnkrwp_prefs[ 'list_displaydescriptions' ] ? 'true' : 'false' );
	$list_displaythumbnails		= ( $rnkrwp_prefs[ 'list_displaythumbnails' ] ? 'true' : 'false' );
	$footer_bgcolor				= preg_replace( '(\#)', '', $rnkrwp_prefs[ 'footer_bgcolor' ] );
	$footer_fontcolor			= preg_replace( '(\#)', '', $rnkrwp_prefs[ 'footer_fontcolor' ] );
	$footer_sharing				= ( $rnkrwp_prefs[ 'footer_sharing' ] ? 'true' : 'false' );
	
	//Build options string
	$options = "?format={$format}";
	$options .= "&rows={$rnkrwp_prefs[ 'size_rows' ]}";
	$options .= "&headername={$header_show_name}";
	$options .= "&headerimage={$header_show_image}";
	$options .= "&headerusername={$header_show_username}";
	$options .= "&headercriteria={$header_show_criteria}";
	$options .= "&headerbgcolor={$header_bgcolor}";
	$options .= "&headerfontface={$rnkrwp_prefs[ 'header_fontface' ]}";
	$options .= "&headerfontcolor={$header_fontcolor}";
	$options .= "&listfontface={$rnkrwp_prefs[ 'list_fontface' ]}";
	$options .= "&listfontcolor={$list_fontcolor}";
	$options .= "&listslidebgcolor={$list_slidebgcolor}";
	$options .= "&listdisplaydescriptions={$list_displaydescriptions}";
	$options .= "&listdisplaythumbnails={$list_displaythumbnails}";
	$options .= "&footerbgcolor={$footer_bgcolor}";
	$options .= "&footerfontcolor={$footer_fontcolor}";
	$options .= "&footersharing={$footer_sharing}";
	
	//Output HTML
	$oembed = file_get_contents( "http://widget.ranker.com/oembed/{$id}{$options}&plugin=true" );
	$oembed = json_decode( $oembed, true );
	return $oembed[ 'html' ];
	
}

?>