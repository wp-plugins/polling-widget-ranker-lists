<?php
/**
 * Build Shortcodes
 * @desc Build shortcodes creation page.
 * @package WordPress
 */
function rnkrwp_build_shortcodes(){
?>
<div id="rnkrWrap">

	<h1><?php esc_html_e( 'Ranker Polling Widget - Create Shortcodes', 'rnkrwp' ) ?></h1>
	
	<h2 class="nav-tab-wrapper">
		<a class="nav-tab" href="<?php menu_page_url( 'rnkrwp-options', true ); ?>" target="_self" 
			title="<?php _e( 'Setup defaults for Ranker widget display', 'rnkrwp' ) ?>">
			<?php esc_html_e( 'Options', 'rnkrwp' ) ?></a>
		<a class="nav-tab nav-tab-active" href="<?php menu_page_url( 'rnkrwp-shortcodes', true ); ?>" target="_self" 
			title="<?php _e( 'Use this tool to create shortcodes for your posts', 'rnkrwp' ) ?>">
			<?php esc_html_e( 'Shortcodes', 'rnkrwp' ) ?></a>
	</h2>
	
	<p class="clear">
		<?php esc_html_e( 'Use this form to convert Ranker list URLs into shortcodes usable in your posts.', 'rnkrwp' ) ?><br/>
		<span class="note">
			<?php esc_html_e( '(Please note: this form connects to Ranker\'s server ONLY to get data needed to display widgets via shortcode from your URL)', 'rnkrwp' ) ?></span>
	</p>
	
	<h2><?php esc_html_e( 'Create Shortcode', 'rnkrwp' ) ?></h2>
	<ul id="rnkrwp_shortCode">
		<li>
			<label for="ranker_url"><?php esc_html_e( 'Paste Ranker List URL', 'rnkrwp' ) ?> :</label> <input type="text" name="ranker_url" id="rnkrwp_rankerURL" size="50"/> 
			<input type="submit" id="rnkrwp_getShortCode" class="button-primary" value="<?php _e( 'Create', 'rnkrwp' ) ?>"/>
		</li>
		<li>
			<label id="rnkrwp_shortCodeMessage"><?php esc_html_e( 'Use Shortcode In Post', 'rnkrwp' ) ?> :</label> <div id="rnkrwp_shortCodeOutput">[rnkrwp ]</div>
		</li>
	</ul>
	
	<br/><br/><br/>

</div>

<?php
}
rnkrwp_build_shortcodes();
?>