<?php
/**
 * Build Options
 * @desc Build plugin options page and fill with data from DB.
 * @package WordPress
 */
function rnkrwp_build_options(){

	//Get preferences
	$rnkrwp_prefs = get_option( 'rnkrwp' );
	//Pseudo preferences
	$size_rows					= $rnkrwp_prefs[ 'size_rows' ];
	$size_rows_all				= $rnkrwp_prefs[ 'size_rows_all' ];
	$header_show_name			= $rnkrwp_prefs[ 'header_show_name' ];
	$header_show_image			= $rnkrwp_prefs[ 'header_show_image' ];
	$header_show_username		= $rnkrwp_prefs[ 'header_show_username' ];
	$header_show_criteria		= $rnkrwp_prefs[ 'header_show_criteria' ];
	$header_bgcolor				= $rnkrwp_prefs[ 'header_bgcolor' ];
	$header_fontcolor			= $rnkrwp_prefs[ 'header_fontcolor' ];
	$header_fontface			= $rnkrwp_prefs[ 'header_fontface' ];
	$list_displaythumbnails		= $rnkrwp_prefs[ 'list_displaythumbnails' ];
	$list_displaydescriptions	= $rnkrwp_prefs[ 'list_displaydescriptions' ];
	$list_slidebgcolor			= $rnkrwp_prefs[ 'list_slidebgcolor' ];
	$list_fontcolor				= $rnkrwp_prefs[ 'list_fontcolor' ];
	$list_fontface				= $rnkrwp_prefs[ 'list_fontface' ];
	$footer_bgcolor				= $rnkrwp_prefs[ 'footer_bgcolor' ];
	$footer_fontcolor			= $rnkrwp_prefs[ 'footer_fontcolor' ];
	$footer_sharing				= $rnkrwp_prefs[ 'footer_sharing' ];
	
?>

<div id="rnkrWrap">
<form action="<?php echo htmlentities( $_SERVER[ 'PHP_SELF' ] ); ?>?page=<?php echo $_GET[ 'page' ]; ?>" method="post">
	<?php
		if( function_exists( 'wp_nonce_field' ) ){
			wp_nonce_field( 'rnkrwp-options_update' );
		} 
	?>

	<h1><?php esc_html_e( 'Ranker Polling Widget - Display Options', 'rnkrwp' ) ?></h1>
	
	<?php echo $logMessage ?>
	
	<h2 class="nav-tab-wrapper">
		<a class="nav-tab nav-tab-active" href="<?php menu_page_url( 'rnkrwp-options', true ); ?>" target="_self" 
			title="<?php _e( 'Setup defaults for Ranker widget display', 'rnkrwp' ) ?>">
			<?php esc_html_e( 'Options', 'rnkrwp' ) ?></a>
		<a class="nav-tab" href="<?php menu_page_url( 'rnkrwp-shortcodes', true ); ?>" target="_self" 
			title="<?php _e( 'Use this tool to create shortcodes for your posts', 'rnkrwp' ) ?>">
			<?php esc_html_e( 'Shortcodes', 'rnkrwp' ) ?></a>
	</h2>
	
	<p class="clear">
		<?php esc_html_e( 'These are the default display settings for all Ranker widgets used in posts.', 'rnkrwp' ); ?><br/>
	</p>
	
	<h2><?php esc_html_e( 'Height', 'rnkrwp' ); ?></h2>
	<ul>
		<li>
			<input type="text" id="rnkrwp_size-rows" name="size_rows" 
				value="<?= ( $size_rows != 999 ? $size_rows : '' ); ?>"<?= ( $size_rows_all ? ' disabled="true"' : '' ); ?> size="3"/> 
			<label><?php esc_html_e( 'rows', 'rnkrwp' ); ?>&nbsp;&nbsp;&nbsp;</label>
			<input type="checkbox" id="rnkrwp_size-rowsall" name="size_rows_all" <?= ( $size_rows_all ? ' checked="true"' : '' ); ?>/>&nbsp;
			<label><?php esc_html_e( 'display all rows', 'rnkrwp' ); ?></label>
		</li>
	</ul>
	
	<h2><?php esc_html_e( 'Header', 'rnkrwp' ); ?></h2>
	<ul>
		<li><strong><?php esc_html_e( 'List Details', 'rnkrwp' ); ?>:</strong></li>
		<li>
			<input type="checkbox" name="header_show_name" value="1"<?= ( $header_show_name ? ' checked="true"' : '' ); ?>/>&nbsp;
			<label><?php esc_html_e( 'Show list name', 'rnkrwp' ); ?></label>
		</li>
		<li>
			<input type="checkbox" name="header_show_image" value="1"<?= ( $header_show_image ? ' checked="true"' : '' ); ?>/>&nbsp;
			<label><?php esc_html_e( 'Show list image', 'rnkrwp' ); ?></label>
		</li>
		<li>
			<input type="checkbox" name="header_show_username" value="1"<?= ( $header_show_username ? ' checked="true"' : '' ); ?>/>&nbsp;
			<label><?php esc_html_e( 'Show username', 'rnkrwp' ); ?></label>
		</li>
		<li>
			<input type="checkbox" name="header_show_criteria" value="1"<?= ( $header_show_criteria ? ' checked="true"' : '' ); ?>/>&nbsp;
			<label><?php esc_html_e( 'Show list criteria', 'rnkrwp' ); ?></label>
		</li>
		<li>
			<strong><?php esc_html_e( 'Background', 'rnkrwp' ); ?>:</strong> <?php esc_html_e( 'select a color', 'rnkrwp' ); ?><br/>
			<span class="picker" id="rnkrwp_header-bgcolor_pick"></span> 
			<input type="text" id="rnkrwp_header-bgcolor" name="header_bgcolor" value="<?= $header_bgcolor; ?>" size="10"/> 
		</li>
		<li>
			<strong><?php esc_html_e( 'Title', 'rnkrwp' ); ?>:</strong> <?php esc_html_e( 'select a color &amp; font style', 'rnkrwp' ); ?><br/>
			<span class="picker" id="rnkrwp_header-fontcolor_pick"></span> 
			<input type="text" id="rnkrwp_header-fontcolor" name="header_fontcolor" value="<?= $header_fontcolor; ?>" size="10"/>&nbsp;&nbsp;
			<select name="header_fontface">
				<option<?= ( $header_fontface == 'arial' ? ' selected="selected"' : '' ); ?>>arial</option>
				<option<?= ( $header_fontface == 'helvetica' ? ' selected="selected"' : '' ); ?>>helvetica</option>
				<option<?= ( $header_fontface == 'verdana' ? ' selected="selected"' : '' ); ?>>verdana</option>
				<option<?= ( $header_fontface == 'geneva' ? ' selected="selected"' : '' ); ?>>geneva</option>
				<option<?= ( $header_fontface == 'times' ? ' selected="selected"' : '' ); ?>>times</option>
				<option<?= ( $header_fontface == 'georgia' ? ' selected="selected"' : '' ); ?>>georgia</option>
			</select> 
		</li>
	</ul>
	
	<h2><?php esc_html_e( 'List', 'rnkrwp' ); ?></h2>
	<ul>
		<li>
			<input type="checkbox" name="list_displaydescriptions" value="1"<?= ( $list_displaydescriptions ? ' checked="true"' : '' ); ?>/>&nbsp;
			<label><?php esc_html_e( 'Display Item Descriptions', 'rnkrwp' ); ?></label>
		</li>
		<li>
			<input type="checkbox" name="list_displaythumbnails" value="1"<?= ( $list_displaythumbnails ? ' checked="true"' : '' ); ?>/>&nbsp;
			<label><?php esc_html_e( 'Display Thumbnail Gallery', 'rnkrwp' ); ?></label>
		</li>
		<li>
			<strong><?php esc_html_e( 'Slideshow Background', 'rnkrwp' ); ?>:</strong> <?php esc_html_e( 'select a color', 'rnkrwp' ); ?><br/>
			<span id="rnkrwp_list-slidebgcolor_000000" 
				class="inlineBlock slideBgColor colorSelect pointer<?= ( $list_slidebgcolor == '000000' ? ' selected' : '' ); ?>" title="Black"></span>
			<span id="rnkrwp_list-slidebgcolor_f1f1f1" 
				class="inlineBlock slideBgColor colorSelect pointer<?= ( $list_slidebgcolor == 'f1f1f1' ? ' selected' : '' ); ?>" title="Light Grey"></span>
			<span id="rnkrwp_list-slidebgcolor_ffffff" 
				class="inlineBlock slideBgColor colorSelect pointer<?= ( $list_slidebgcolor == 'ffffff' ? ' selected' : '' ); ?>" title="white"></span>
			<input type="hidden" id="rnkrwp_list-slidebgcolor" name="list_slidebgcolor" value="<?= $list_slidebgcolor; ?>"/>
		</li>
		<li>
			<strong><?php esc_html_e( 'Items', 'rnkrwp' ); ?>:</strong> <?php esc_html_e( 'select a color &amp; font style', 'rnkrwp' ); ?><br/>
			<span class="picker" id="rnkrwp_list-fontcolor_pick"></span> 
			<input type="text" id="rnkrwp_list-fontcolor" name="list_fontcolor" value="<?= $list_fontcolor; ?>" size="10"/>&nbsp;&nbsp;<select name="list_fontface">
				<option<?= ( $list_fontface == 'arial' ? ' selected="selected"' : '' ); ?>>arial</option>
				<option<?= ( $list_fontface == 'helvetica' ? ' selected="selected"' : '' ); ?>>helvetica</option>
				<option<?= ( $list_fontface == 'verdana' ? ' selected="selected"' : '' ); ?>>verdana</option>
				<option<?= ( $list_fontface == 'geneva' ? ' selected="selected"' : '' ); ?>>geneva</option>
				<option<?= ( $list_fontface == 'times' ? ' selected="selected"' : '' ); ?>>times</option>
				<option<?= ( $list_fontface == 'georgia' ? ' selected="selected"' : '' ); ?>>georgia</option>
			</select>
		</li>
	</ul>
	
	<h2><?php esc_html_e( 'Footer', 'rnkrwp' ); ?></h2>
	<ul>
		<li>
			<strong><?php esc_html_e( 'Background', 'rnkrwp' ); ?>:</strong> <?php esc_html_e( 'select a color', 'rnkrwp' ); ?><br/>
			<span class="picker" id="rnkrwp_footer-bgcolor_pick"></span> 
			<input type="text" id="rnkrwp_footer-bgcolor" name="footer_bgcolor" value="<?= $footer_bgcolor; ?>" size="10"/> 
		</li>
		<li>
			<strong><?php esc_html_e( 'Text/Icons', 'rnkrwp' ); ?>:</strong> <?php esc_html_e( 'select a color', 'rnkrwp' ); ?><br/>
			<span class="picker" id="rnkrwp_footer-fontcolor_pick"></span> 
			<input type="text" id="rnkrwp_footer-fontcolor" name="footer_fontcolor" value="<?= $footer_fontcolor; ?>" size="10"/> 
		</li>
		<li>
			<input type="checkbox" name="footer_sharing" value="1"<?= ( $footer_sharing ? ' checked="true"' : '' ); ?>/>&nbsp;
			<label><?php esc_html_e( 'Display Sharing Icons', 'rnkrwp' ); ?></label>
		</li>
	</ul>
	
	<br/><input type="submit" id="rnkrwp_updateOptions" class="button-primary" name="submit" value="<?php _e( 'Save Changes', 'rnkrwp' ); ?>"/>
	
</form>
</div>
<?php
}

/**
 * Update Options
 * @desc Handle post request and update options data.
 */
function rnkrwp_update_options(){

	//Authority check
	if( is_admin() && current_user_can( 'manage_options' ) ){
	
		check_admin_referer( 'rnkrwp-options_update' );
		
		//Get current data
		$current = get_option( 'rnkrwp' );
		
		//Get updates
		$size_rows					= $_POST[ 'size_rows' ];
		$size_rows_all				= $_POST[ 'size_rows_all' ];
		$header_show_name			= $_POST[ 'header_show_name' ];
		$header_show_image			= $_POST[ 'header_show_image' ];
		$header_show_username		= $_POST[ 'header_show_username' ];
		$header_show_criteria		= $_POST[ 'header_show_criteria' ];
		$header_bgcolor				= $_POST[ 'header_bgcolor' ];
		$header_fontcolor			= $_POST[ 'header_fontcolor' ];
		$header_fontface			= $_POST[ 'header_fontface' ];
		$list_displaythumbnails		= $_POST[ 'list_displaythumbnails' ];
		$list_displaydescriptions	= $_POST[ 'list_displaydescriptions' ];
		$list_slidebgcolor			= $_POST[ 'list_slidebgcolor' ];
		$list_fontcolor				= $_POST[ 'list_fontcolor' ];
		$list_fontface				= $_POST[ 'list_fontface' ];
		$footer_bgcolor				= $_POST[ 'footer_bgcolor' ];
		$footer_fontcolor			= $_POST[ 'footer_fontcolor' ];
		$footer_sharing				= $_POST[ 'footer_sharing' ];
		
		//Check rows
		if( $size_rows_all ) $size_rows = 999;
	
		//Create options array
		$options = array(
			'size_rows'					=> $size_rows,
			'size_rows_all'				=> $size_rows_all,
			'header_show_name'			=> $header_show_name,
			'header_show_image'			=> $header_show_image,
			'header_show_username'		=> $header_show_username,
			'header_show_criteria'		=> $header_show_criteria,
			'header_bgcolor'			=> $header_bgcolor,
			'header_fontcolor'			=> $header_fontcolor,
			'header_fontface'			=> $header_fontface,
			'list_displaythumbnails'	=> $list_displaythumbnails,
			'list_displaydescriptions'	=> $list_displaydescriptions,
			'list_slidebgcolor'			=> $list_slidebgcolor,
			'list_fontcolor'			=> $list_fontcolor,
			'list_fontface'				=> $list_fontface,
			'footer_bgcolor'			=> $footer_bgcolor,
			'footer_fontcolor'			=> $footer_fontcolor,
			'footer_sharing'			=> $footer_sharing
		);
		//Store options
		update_option( 'rnkrwp', $options );
		
	}
	
	//Load options screen
	rnkrwp_build_options();

}

if( isset( $_POST[ 'submit' ] ) ){
	rnkrwp_update_options();
}
else{
	rnkrwp_build_options();
}

?>