<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>Manage Your Websites General Business Information</h2>
	<?php 
	
		if($hidden == 'Y'){
			echo '<div style="width:99%; padding: 5px;" class="codesaved updated below-h2"><p>General Information Saved</p></div>';	
		}
	?>
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>Edit Website Information</span></h3>
						<div class="inside">
							
                           <form name="mash_general_options_form" method="post" action="">
                            <table class="form-table">
                               <tr>
                                <td><label for="mash_dynamic_company_name">Company Name</label></td>
                                <td><input name="mash_dynamic_company_name" id="mash_dynamic_company_name" type="text" value="<?php echo $options['company_name']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                            <tr>
                                <td><label for="mash_dynamic_telephone">Telephone</label></td>
                                <td><input name="mash_dynamic_telephone" id="mash_dynamic_telephone" type="text" value="<?php echo $options['telephone']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                              <tr>
                                <td><label for="mash_dynamic_telephone_2">Telephone Two</label></td>
                                <td><input name="mash_dynamic_telephone_2" id="mash_dynamic_telephone_2" type="text" value="<?php echo $options['telephone_2']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                             <tr>
                                <td><label for="mash_dynamic_address_1">Street Address</label></td>
                                <td><input name="mash_dynamic_address_1" id="mash_dynamic_address_1" type="text" value="<?php echo $options['address_1']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                             <tr>
                                <td><label for="mash_dynamic_address_locality">Town / City</label></td>
                                <td><input name="mash_dynamic_address_locality" id="mash_dynamic_address_locality" type="text" value="<?php echo $options['address_2']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                             <tr>
                                <td><label for="mash_dynamic_address_region">Region</label></td>
                                <td><input name="mash_dynamic_address_region" id="mash_dynamic_address_region" type="text" value="<?php echo $options['address_3']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                             <tr>
                                <td><label for="mash_dynamic_postcode">Post Code</label></td>
                                <td><input name="mash_dynamic_postcode" id="mash_dynamic_postcode" type="text" value="<?php echo $options['address_4']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                             <tr>
                                <td><label for="mash_dynamic_email">Email Address</label></td>
                                <td><input name="mash_dynamic_email" id="mash_dynamic_email" type="text" value="<?php echo $options['email']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                              <tr>
                                <td><label for="mash_dynamic_strapline">Website Strapline</label></td>
                                <td><input name="mash_dynamic_strapline" id="mash_dynamic_strapline" type="text" value="<?php echo $options['strapline']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                              <tr>
                                <td><label for="mash_dynamic_reg_number">Company Registration Number</label></td>
                                <td><input name="mash_dynamic_reg_number" id="mash_dynamic_reg_number" type="text" value="<?php echo $options['reg_number']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                               <tr>
                                <td><label for="mash_dynamic_copyright">Footer Copyright Details</label></td>
                                <td><input name="mash_dynamic_copyright" id="mash_dynamic_copyright" type="text" value="<?php echo $options['copyright']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                              <tr>
                                <td><label for="mash_dynamic_twitter_url">Twitter URL</label></td>
                                <td><input name="mash_dynamic_twitter_url" id="mash_dynamic_twitter_url" type="text" value="<?php echo $options['twitter_url']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                              <tr>
                                <td><label for="mash_dynamic_facebook_url">Facebook URL</label></td>
                                <td><input name="mash_dynamic_facebook_url" id="mash_dynamic_facebook_url" type="text" value="<?php echo $options['facebook_url']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                          
                              <tr>
                                <td><label for="mash_dynamic_google_url">Google Plus URL</label></td>
                                <td><input name="mash_dynamic_google_url" id="mash_dynamic_google_url" type="text" value="<?php echo $options['google_url']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                               <tr>
                                <td><label for="mash_dynamic_youtube_url">Youtube URL</label></td>
                                <td><input name="mash_dynamic_youtube_url" id="mash_dynamic_youtube_url" type="text" value="<?php echo $options['youtube_url']; ?>" class="regular-text" /></td>
                                <td><a class="button-secondary mash_dynamic_button" href="javascript:void(0)" title="View Code"><?php _e( 'View Code' ); ?></a> </td>
                            </tr>
                           
                        </table>
                                     <input type="hidden" name="mash_form_submitted" value="Y">  
                                 <p><input class="button-primary" type="submit" name="mash-form_submit" value="<?php _e( 'Save Information' ); ?>" /></p>   
                           </form>          
                        
						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
					
						<h3><span>About this plugin</span></h3>
						<div class="inside">
							
                            <p>This plugin allows business owners &amp; webmasters to dynamically manage general information shown on their website.
                         </p>
                     </div> <!-- .inside -->
                       <h3>How to use this plugin</h3>
                     <div class="inside">
                      
                       <p>Developers, simply copy and paste the code associated with each field into your theme files.</p>     	

						</div> <!-- .inside -->
                        
                      <h3>Author</h3>
                     <div class="inside">
                     
                       <p>This plugin was created by <a href="http://www.mash-webdesign.co.uk" title="Mash Web Design" target="_blank">Mash Web Design</a></p>     	

						</div> <!-- .inside -->
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->