<div class="wrap">
	<h2><img src="<?php echo WP_PLUGIN_URL; ?>/visideign-login/img/icon1.png" alt="visideign Login Settings"> visideign Login Settings</h2>
	<?php if ( isset($_GET['settings-updated']) && $_GET['settings-updated'] == 'true' ) { 
		echo '<div id="message" class="updated"><p>'. __('Settings saved.') .'</p></div>'.PHP_EOL;
	} ?>

	<div style="width: 68%; float: left;">
		<form method="post" action="options.php">
		<?php
			settings_fields( 'visideign-settings-group' );
			$visideign_option_dash = get_option('visideign_option_dash');
			$visideign_option_lost = get_option('visideign_option_lost');
			$visideign_option_lost = get_option('visideign_option_pro');
			$visideign_option_lost = get_option('visideign_option_xtra');
			$visideign_option_lost = get_option('visideign_option_recent');				
		?>
		
        <div class="postbox" style="display: block;float:left;margin:5px;clear:left; width: 99%;">
        
			<h3 class="hndle" style="padding:5px; color:#007193;">Show/Add Links</h3>
			<div class="inside">
				<div>
                <p style="text-align: center;"><a href="http://www.visideign.com.com" target="_blank"><img src="<?php echo WP_PLUGIN_URL; ?>/visideign-login/img/visi-home.png"></a></p>
					<table class="form-table">
<tr valign="top">
   							<p><b>If you want to show Captcha form please install <a href="http://wordpress.org/plugins/captcha/" target="_blank">Captcha Plugin</a>. Than it will automatically show Captcha form.</b></p>
   							
   						</tr>
   						<tr valign="top">
   							<th scope="row">Show Dashboard Link:</th>
   							<td><input type="checkbox" name="visideign_option_dash" value="Enabled" <?php if(get_option('visideign_option_dash')==Enabled) echo('checked="checked"'); ?>/></td>
   						</tr>
<tr valign="top">
   							<th scope="row">Show  Lost your password:</th>
   							<td><input type="checkbox" name="visideign_option_lost" value="Enabled" <?php if(get_option('visideign_option_lost')==Enabled) echo('checked="checked"'); ?>/></td>
   						</tr>
<tr valign="top">
   							<th scope="row">Show Profile Link:</th>
   							<td><input type="checkbox" name="visideign_option_pro" value="Enabled" <?php if(get_option('visideign_option_pro')==Enabled) echo('checked="checked"'); ?>/></td>
   						</tr>
<tr valign="top">
   							<th scope="row">Show Recent Activity Tab:</th>
   							<td><input type="checkbox" name="visideign_option_recent" value="Enabled" <?php if(get_option('visideign_option_recent')==Enabled) echo('checked="checked"'); ?>/></td>
   						</tr>
<tr valign="top">
   							<th scope="row">Add Extra Link:</th>
   							<td><input type="text" name="visideign_option_xtra" value="<?php $visideign_option_xtra = get_option('visideign_option_xtra'); if(!empty($visideign_option_xtra)) {echo $visideign_option_xtra;} else {echo "";}?>"><br><br>Example: < li>< a href="">Link< /a>< /li></td>
   						</tr>

					</table>
					

					<?php submit_button(); ?>	    
				</div>

			</div>
		</div>
		</form>
</div>
<?php echo visideign_sidebar(); ?>