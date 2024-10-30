<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>Generate Location Schema</h2>
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>Generate Schema Code</span></h3>
                        
						<div class="inside">
							
                           <p>Quickly embed the correct Location Schema for your business on the frontend of your Wordpress website. Adding Location Schema to your website couldn't be easier and greatly benefits your websites SEO. Schema is highly recommended by all major Search Engines including Google and Bing. To read more about the benefits of using Scema visit http://schema.org.</p>	
							  <h4>This Schema generator currently Inludes:</h4>
                           <ul style="list-style-type: disc; list-style-position: inside; font-weight: bold;">
                           	<li>Company Name</li>
                             <li>Street Address</li>
                             <li>Address Locality</li>
                             <li>Address Region</li>
                             <li>Postal Code</li>
                             <li>Telephone</li>
                             <li>Email</li>
                           </ul>
                            
							 <input class="button-primary mash-schema-button" type="submit" name="Example" value="<?php _e( 'View Code' ); ?>" /> 
                            or
							 <input class="button-primary mash-schema-button-short-code" type="submit" name="Example" value="<?php _e( 'Generate Shortcode' ); ?>" /> 
                     
     					</div> <!-- .inside -->
					
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
					
						<h3><span>Your Schema View</span></h3>
						<div class="inside">
                        	
                          <code>
                            
                       	 <?php echo getSchemaOptions(); ?>

                         </code>
	   
                     </div> <!-- .inside -->
                    
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->

<style type="text/css">
	.manage-information_page_mash-local-schema .meta-box-sortables .inside code > div > div span{
		display: block;
	}
</style>