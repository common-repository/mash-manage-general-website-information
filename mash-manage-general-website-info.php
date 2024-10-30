<?php
 
/**
     * Plugin Name: Mash General Website Information
     * Plugin URI: http://www.mash-webdesign.co.uk
     * Description: A plugin that allows clients to dynamically control business information.
     * Version: 0.3
     * Author: Adam Collins
     * Author URI: http://www.mash-webdesign.co.uk
     * License: GPL2
*/
 
 /*Global Variables*/
 
 $options = array();
 
 
 function mash_general_info(){
	 
 	/* add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function); */
	
		add_menu_page(
			'General Business Information',
			'Manage Information',
			'manage_options',
			'mash-general-info',
			'mash_general_info_options'
		);

  		add_submenu_page( 'mash-general-info', 'Local Business Schema', 'Local Business Schema', 'manage_options', 'mash-local-schema', 'mash_general_schema' ); 
		
		
    }
 
 
     add_action('admin_menu', 'mash_general_info');
 

     function mash_general_info_options(){
	 
	 	if(current_user_can('manage_options')):
		
		global  $options;
		
		if(isset($_POST['mash_form_submitted'])){
			
			$hidden = esc_html($_POST['mash_form_submitted']);
			
			if($hidden == 'Y'){
			
				$mash_tel = $_POST['mash_dynamic_telephone'];
				$mash_tel_2 = $_POST['mash_dynamic_telephone_2'];
				$mash_add_1 = $_POST['mash_dynamic_address_1'];
				$mash_add_2 = $_POST['mash_dynamic_address_locality'];
				$mash_add_3 = $_POST['mash_dynamic_address_region'];
				$mash_add_4 = $_POST['mash_dynamic_postcode'];
				$mash_email = $_POST['mash_dynamic_email'];
				$mash_strapline = $_POST['mash_dynamic_strapline'];
				$mash_twitter = $_POST['mash_dynamic_twitter_url'];
				$mash_facebook = $_POST['mash_dynamic_facebook_url'];
				$mash_google = $_POST['mash_dynamic_google_url'];
				$mash_youtube = $_POST['mash_dynamic_youtube_url'];
				$mash_company_reg = $_POST['mash_dynamic_reg_number'];
				$mash_copright = $_POST['mash_dynamic_copyright'];
				$mash_dynamic_company_name = $_POST['mash_dynamic_company_name'];
				
				
				$options['telephone'] = $mash_tel;
				$options['telephone_2'] = $mash_tel_2;
				$options['address_1'] = $mash_add_1;
				$options['address_2'] = $mash_add_2;
				$options['address_3'] = $mash_add_3;
				$options['address_4'] = $mash_add_4;
				$options['email'] = $mash_email;
				$options['strapline'] = $mash_strapline;
				$options['twitter_url'] = $mash_twitter;
				$options['facebook_url'] = $mash_facebook;
				$options['google_url'] = $mash_google;
				$options['youtube_url'] = $mash_youtube;
				$options['reg_number'] = $mash_company_reg;
				$options['copyright'] = $mash_copright;
				$options['company_name'] = $mash_dynamic_company_name;
				$options['last_updated'] = time();
				
				update_option('mash_general_info', $options);
				
			
				
			}
				
		}
		
		$options = get_option('mash_general_info');
		
		
		
		require('includes/options-page.php');
			
		else:
		
			wp_die('Please contact site Admin, you do not have the correct access.');
		
		endif;
	 
     }
	 
	 
	 
	 function mash_general_schema(){
	
	 	if(current_user_can('manage_options')):
		
			require('includes/schema-page.php');
		
		endif;
		 
	}
 
 
 	function getWebOptions($type){

		$options = get_option('mash_general_info');

		return $options[$type];

	}
	
	function getSchemaOptions(){
		
		$options = get_option('mash_general_info');
		
		$schema = '<div itemscope itemtype="http://schema.org/LocalBusiness">';
	
		if(!empty($options['company_name'])):
		
			$schema .= '<span itemprop="legalName">'.$options['company_name'] .'</span>';
			
		endif;
		
		$schema .= '<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">';
		
		if(!empty($options['address_1'])):
		
			$schema .= '<span itemprop="streetAddress">'.$options['address_1'] .'</span>';
			
		endif;
		
		if(!empty($options['address_2'])):
		
			$schema .= '<span itemprop="addressLocality">'.$options['address_2'] .'</span>';
			
		endif;
		
		if(!empty($options['address_3'])):
		
			$schema .= '<span itemprop="addressRegion">'.$options['address_3'] .'</span>';
			
		endif;
		
		if(!empty($options['address_4'])):
		
			$schema .= '<span itemprop="postalCode">'.$options['address_4'] .'</span>';
			
		endif;
		
		$schema .= '</div>';
		
		if(!empty($options['telephone'])):
		
			$schema .= '<p><span>Phone:</span> <span itemprop="telephone">'.$options['telephone'] .'</span></p>';
			
		endif;
		
		if(!empty($options['email'])):
		
			$schema .= '<p><span>Email:</span> <span itemprop="email">'.$options['email'] .'</span></p>';
			
		endif;
		
		$schema .= '</div>';
		
		return $schema;
				
	}
	
	function enqueuejs(){
		
		wp_enqueue_script('mash-general-info-js', plugins_url('mash-manage-general-website-information/js/scripts.js'), array('jquery'), null , true);
			
	}
	
	add_action('admin_head', 'enqueuejs');

 
 
 ?>