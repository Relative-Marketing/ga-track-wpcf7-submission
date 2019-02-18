<?php
/*
Plugin Name: GA Track WPCF7 Submissions
Description: Will register a google analytics event that fires when contact forms are successfully submitted.
Version: 0.1.0
Author: Relative Marketing
Author URI: https://relativemarketing.co.uk
Text Domain: ga-track-wpcf7-submissions
*/

if ( ! defined('ABSPATH') ) {
	die();
}

add_action( 'wp_footer', 'ga_track_wpcf7_submissions' );

function ga_track_wpcf7_submissions() {
	?>
	<script>
		if (typeof ga === "function") {
			document.addEventListener('wpcf7mailsent', function(event) {
				ga( 'send', 'event', 'Contact Form', 'submit' );
			}, false);
		}
	</script>
	<?php
}
