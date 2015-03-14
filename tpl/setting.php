
<div id="conohaojs-flash" class="updated">
		<p></p>
</div>

<h2>Setting ConoHa Object Sync</h2>

<p>Type the API informations for the Object storage. No account? Let's <a href="https://www.conoha.jp/en/" target="_blank" >signup</a>.</p>

<form method="post" action="options.php">
		<?php settings_fields('conohaojs-options'); ?>
		<?php do_settings_sections('conohaojs-options'); ?>
		<h3>API informations of the Object storage. </h3>
		<table>
				<tr>
						<th><?php _e('Username') ?>:</th>
						<td>
								<input id="conohaojs-username" name="conohaojs-username" type="text"
												size="15" value="<?php echo esc_attr(
																				 get_option('conohaojs-username')
																				 ); ?>" class="regular-text code"/>

						</td>
				</tr>
				<tr>
						<th><?php _e('Password') ?>:</th>
						<td>
								<input id="conohaojs-password" name="conohaojs-password" type="password"
												size="15" value="<?php echo esc_attr(
																				 get_option('conohaojs-password')
																				 ); ?>"  class="regular-text code"/>

						</td>
				</tr>
				<tr>
						<th><?php _e('TenantId') ?>:</th>
						<td>
								<input id="conohaojs-tenant-id" name="conohaojs-tenant-id" type="text"
												size="15" value="<?php echo esc_attr(
																				 get_option('conohaojs-tenant-id')
																				 ); ?>" class="regular-text code"/>

						</td>
				</tr>
				<tr>
						<th><?php _e('AuthURL') ?>:</th>
						<td>
								<input id="conohaojs-auth-url" name="conohaojs-auth-url" type="text"
												size="15" value="<?php echo esc_attr(
																				 get_option('conohaojs-auth-url')
																				 ); ?>" class="regular-text code"/>

						</td>
				</tr>
				<tr>
						<th><?php _e('Container') ?>:</th>
						<td>
								<input id="conohaojs-container" name="conohaojs-container" type="text"
												size="15" value="<?php echo esc_attr(
																				 get_option('conohaojs-container')
																				 ); ?>" class="regular-text code"/>

						</td>
				</tr>
				<tr>
						<th><?php _e('Region') ?>:</th>
						<td>
								<input id="conohaojs-region" name="conohaojs-region" type="text"
												size="15" value="<?php echo esc_attr(
																				 get_option('conohaojs-region')
																				 ); ?>" class="regular-text code"/>

						</td>
				</tr>
				<tr>
						<td colspan="2">
                        <input type="button" name="test" id="submit" class="button button-primary"
                               value="<?php _e('Check the connection', 'conohaojs'); ?>"
																onclick="conohaojs_connect_test()"/>
						</td>
				</tr>
		</table>

		<h3>Synchronization options</h3>
		<table>
				<tr>
						<td colspan="2">
                <input id="delete_after" type="checkbox" name="conohaojs-delafter"
                        value="1" <?php checked(get_option('conohaojs-delafter'),1); ?> />
                <label for="delete_after">Delete the uploaded file from the local storage after a successful upload to the object storage.</label>
						</td>
				</tr>
				<tr>
						<td colspan="2">
								<?php submit_button(); ?>
						</td>
				</tr>
		</table>

</form>
