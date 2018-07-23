<?php
defined( 'WPINC' ) or die;

wp_enqueue_script( 'jquery-ui-dialog' );
wp_enqueue_style( 'wp-jquery-ui-dialog' );
wp_enqueue_script( 'plt-quick-add' );
wp_enqueue_style( 'plt-quick-add' );
?>

<div id="plt-quick-add" class="hidden">
	<form>
		<div class="content">
			<?php wp_nonce_field( 'plt-quick-add', 'plt_nonce', false, true ); ?>

			<label><?php _e( 'Title', 'page-links-pro' ); ?> <input type="text" name="title" class="regular-text" placeholder="<?php esc_attr_e( 'Page Title', 'page-links-pro' ); ?>" autocomplete="off" /></label>

			<br />

			<label><?php _e( 'URL', 'page-links-pro' ); ?> <input type="text" name="url" class="regular-text" placeholder="https://example.com/" autocomplete="off" /></label>

			<?php if ( get_option('permalink_structure') ) { ?>
				<br />
				<label><?php _e( 'Short URL', 'page-links-pro' ); ?> <code><?php echo esc_url( trailingslashit( home_url('/') ) ); ?></code><input type="text" name="slug" placeholder="<?php esc_attr_e( 'page-title', 'page-links-pro' ); ?>" autocomplete="off" /></label>
				<p class="short-url-message" style="display: none;"><?php _e( 'You should customize this short URL to make it shorter and more memorable!', 'page-links-to' ); ?></p>
			<?php } ?>

		</div>
		<div class="footer">
			<div class="messages"></div>
			<?php submit_button( 'Publish', 'primary', 'plt-quick-add-publish', false ); ?>
			<?php submit_button( 'Save Draft', 'secondary', 'plt-quick-add-save', false ); ?>
		</div>
	</form>
</div>
