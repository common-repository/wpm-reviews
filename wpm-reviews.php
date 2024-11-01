<?php 
	/**
		 * Plugin Name: WPM Reviews
		 * Plugin URI: http://plugins.era-solutions.com
		 * Description: For Increasing & Collecting Best Google Reviews & social Reviews. WPM Reviews plugin will let the user submits only 5 stars, if the user decided to give less he will be asked to contact you in order to solve his issue. In that way, you will never get less than 5 stars.
		 * Version: 1.1
		 * Author: ERA Solutions
		 * Author URI: http://plugins.era-solutions.com
	 */
	
	add_action( 'admin_menu', 'wpmre_dashboard' );
	
	function wpme_load_plugin_css_js() {
	    $plugin_url = plugin_dir_url( __FILE__ );

	   
	    wp_enqueue_script( 'wpmre-js', $plugin_url . 'js/style.js' );
	}
	
	add_action( 'admin_enqueue_scripts', 'wpme_load_plugin_css_js' );

	//enqueue reuired js and css 

	function wpme_front_load_plugin_css_js() {
	    $plugin_url = plugin_dir_url( __FILE__ );




if (!wp_style_is( 'fontawesome', 'enqueued' )) {
    //wp_register_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css', false, '4.6.1' );
    wp_register_style( 'fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'fontawesome' );
}

	    wp_enqueue_style( 'wpmre-style', $plugin_url . 'css/style.css' );
	    wp_enqueue_script( 'stars', $plugin_url . 'js/stars.js' , array( 'jquery' ));
	}
	
	add_action( 'wp_enqueue_scripts', 'wpme_front_load_plugin_css_js' );

	function wpmre_dashboard() {
		add_menu_page( 'WPM Reviews Settings', 'WPM Reviews', 'manage_options', 'my-unique-identifier', 'wpmre_post_info_page' );
		add_action( 'admin_init', 'update_wpmre_post_info' ); 
	}

	
	if( !function_exists("update_wpmre_post_info") ) {
		function update_wpmre_post_info() {  
		  register_setting( 'wpmre-post-info-settings', 'wpmre_1link' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_1img' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_2link' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_2img' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_3link' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_3img' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_4link' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_4img' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_5link' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_5img' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_radiocheck' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_radiocheck' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_shcode' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_ntext' ); 
		  register_setting( 'wpmre-post-info-settings', 'wpmre_nemail' ); 
		   
		  
		} 
	}
	if( !function_exists("wpmre_1link") ) {
	    function wpmre_1link() {
	    	$wpmre_info = get_option( 'wpmre_1link' );     
	    	return $wpmre_info;   
	    }  
	}
	if( !function_exists("wpmre_1img") ) {
	    function wpmre_1img() {
	    	$wpmre_info = get_option( 'wpmre_1img' );     
	    	return $wpmre_info;   
	    }  
	}
	if( !function_exists("wpmre_2link") ) {
	    function wpmre_2link() {
	    	$wpmre_info = get_option( 'wpmre_2link' );     
	    	return $wpmre_info;   
	    }  	    
	}
	if( !function_exists("wpmre_2img") ) {
	    function wpmre_2img() {
	    	$wpmre_info = get_option( 'wpmre_2img' );     
	    	return $wpmre_info;   
	    }  
	}
	if( !function_exists("wpmre_3link") ) {
	    function wpmre_3link() {
	    	$wpmre_info = get_option( 'wpmre_3link' );     
	    	return $wpmre_info;   
	    }  	    
	}
	if( !function_exists("wpmre_3img") ) {
	    function wpmre_3img() {
	    	$wpmre_info = get_option( 'wpmre_3img' );     
	    	return $wpmre_info;   
	    }  
	}
	if( !function_exists("wpmre_4link") ) {
	    function wpmre_4link() {
	    	$wpmre_info = get_option( 'wpmre_4link' );     
	    	return $wpmre_info;   
	    }  	    
	}
	if( !function_exists("wpmre_4img") ) {
	    function wpmre_4img() {
	    	$wpmre_info = get_option( 'wpmre_4img' );     
	    	return $wpmre_info;   
	    }  
	}
	if( !function_exists("wpmre_5link") ) {
	    function wpmre_5link() {
	    	$wpmre_info = get_option( 'wpmre_5link' );     
	    	return $wpmre_info;   
	    }  	    
	}
	if( !function_exists("wpmre_5img") ) {
	    function wpmre_5img() {
	    	$wpmre_info = get_option( 'wpmre_5img' );     
	    	return $wpmre_info;   
	    }  
	}
	if( !function_exists("wpmre_radiocheck") ) {
	    function wpmre_radiocheck() {
	    	$wpmre_info = get_option( 'wpmre_radiocheck' );     
	    	return $wpmre_info;   
	    }  
	}
	if( !function_exists("wpmre_shcode") ) {
	    function wpmre_shcode() {
	    	$wpmre_info = get_option( 'wpmre_shcode' );     
	    	return $wpmre_info;   
	    }  
	}
	if( !function_exists("wpmre_ntext") ) {
	    function wpmre_ntext() {
	    	$wpmre_info = get_option( 'wpmre_ntext' );     
	    	return $wpmre_info;   
	    }  
	}
	if( !function_exists("wpmre_nemail") ) {
	    function wpmre_nemail() {
	    	$wpmre_info = get_option( 'wpmre_nemail' );  
	    	if($wpmre_info){
return '<a class="review-text" href="mailto:'.$wpmre_info.'">Send Us Email</a>';   
	   

	    	}else{
return '';   
	   

	    	}

	    	 }  
	}
	
	function wpmre_post_info_page(){ ?>     
		<h1>WPM Review Settings Page</h1>   
			<form method="post" action="options.php">     
				<?php settings_fields( 'wpmre-post-info-settings' ); ?>     
				<?php do_settings_sections( 'wpmre-post-info-settings' ); ?>     
				<table class="form-table">       
					<tr valign="top">       
						<th scope="row">First Review Link:</th>       
						<td>
							<input type="text" name="wpmre_1link" value="<?php echo get_option( 'wpmre_1link' ); ?>"/>
						</td>   
						<th scope="row">First Image Link:</th>       
						<td>
							<input type="text" name="wpmre_1img" value="<?php echo get_option( 'wpmre_1img' ); ?>"/>
						</td>         
					</tr>     
					   <tr valign="top">       
						<th scope="row">Seconde Review Link:</th>       
						<td>
							<input type="text" name="wpmre_2link" value="<?php echo get_option( 'wpmre_2link' ); ?>"/>
						</td>   
						<th scope="row">Seconde Image Link:</th>       
						<td>
							<input type="text" name="wpmre_2img" value="<?php echo get_option( 'wpmre_2img' ); ?>"/>
						</td>         
					</tr>     
					   <tr valign="top">       
						<th scope="row">Third Review Link:</th>       
						<td>
							<input type="text" name="wpmre_3link" value="<?php echo get_option( 'wpmre_3link' ); ?>"/>
						</td>   
						<th scope="row">Third Image Link:</th>       
						<td>
							<input type="text" name="wpmre_3img" value="<?php echo get_option( 'wpmre_3img' ); ?>"/>
						</td>         
					</tr>     
					   <tr valign="top">       
						<th scope="row">Fourth Review Link:</th>       
						<td>
							<input type="text" name="wpmre_4link" value="<?php echo get_option( 'wpmre_4link' ); ?>"/>
						</td>   
						<th scope="row">Fourth Image Link:</th>       
						<td>
							<input type="text" name="wpmre_4img" value="<?php echo get_option( 'wpmre_4img' ); ?>"/>
						</td>         
					</tr>     
					   <tr valign="top">       
						<th scope="row">Fifth Review Link:</th>       
						<td>
							<input type="text" name="wpmre_5link" value="<?php echo get_option( 'wpmre_5link' ); ?>"/>
						</td>   
						<th scope="row">Fifth Image Link:</th>       
						<td>
							<input type="text" name="wpmre_5img" value="<?php echo get_option( 'wpmre_5img' ); ?>"/>
						</td>         
					</tr>     
					   
				</table>   
				<table class="form-table">
				 	<tr valign="top">       
						<th scope="row" style="width: 224px;">Less Than 4 Stars Review option</th>       
						<td>
							
							ShortCode <input type="radio" onclick="shortcodeRadio()" name="wpmre_radiocheck" id="shortcodeCheck" value="true" <?php if(get_option('wpmre_radiocheck') == 'true') echo 'checked'; ?>> 
							Text <input type="radio" onclick="shortcodeRadio()" name="wpmre_radiocheck" id="noCheck" value="false" <?php if(get_option('wpmre_radiocheck') == 'false') echo 'checked'; ?>>
							<br>
						</td>           
					</tr>            
					<tr valign="top" id="shortcode" <?php if(get_option('wpmre_radiocheck') != 'true') echo 'style="display: none;"'; ?>>       
						<th scope="row">ShortCode: <small>[shortcode]</small></th>       
						<td>
							
							<input type="text"  col="6" name="wpmre_shcode" value='<?php echo get_option( 'wpmre_shcode' ); ?>'/>
							
						</td>           
					</tr>     
					<tr valign="top" id="notice" <?php if(get_option('wpmre_radiocheck') != 'false') echo 'style="display: none;"'; ?>>       
						<th scope="row">Notice Text:</th>       
						<td style="width: 34%;">
							<textarea rows="4" cols="50" name="wpmre_ntext" value="<?php echo get_option( 'wpmre_ntext' ); ?>"><?php echo get_option( 'wpmre_ntext' ); ?></textarea>
						</td>   
						<th scope="row">Email Link: <small>To recive Email from the client directly</small></th>       
						<td>
							<input type="email" name="wpmre_nemail" value="<?php echo get_option( 'wpmre_nemail' ); ?>"/>
						</td>         
					</tr>     
				</table>   
				<?php submit_button(); ?>   
			</form>  
<div>
	Copy shortcode and paste it where ever you like to display the plugin [wpmre_review_stars]
</div>
		<?php }

	
function wpmre_content() {
		if( wpmre_1link() == null && wpmre_2link() == null && wpmre_3link() == null && wpmre_3link() == null && wpmre_4link() == null && wpmre_5link() == null && wpmre_1img() == null && wpmre_2img() == null && wpmre_3img() == null && wpmre_3img() == null && wpmre_4img() == null && wpmre_5img() == null ) {
			return 'Please Configure WPM Reviews From Settings Page';
		}else{


			$content = '<div class=\"wpmre-content wpmre-con\"><div class=\"wpmre-popup wpmre-logo-container\">';
		    if(wpmre_1link() != null && wpmre_1img() != null){
		    	$content .= '<a class=\"wpmre-content-link\" href=\"'.wpmre_1link().'\" target=\"_blank\" ><img  src=\"'.wpmre_1img().'\" ></a>';
		    }
		    if(wpmre_2link() != null && wpmre_2img() != null){
		    	$content .='<a class=\"wpmre-content-link\" href=\"'.wpmre_2link().'\" target=\"_blank\" ><img  src=\"'.wpmre_2img().'\" ></a>';
		    }
		    if(wpmre_3link() != null && wpmre_3img() != null){
		    	$content .='<a class=\"wpmre-content-link\" href=\"'.wpmre_3link().'\" target=\"_blank\" ><img  src=\"'.wpmre_3img().'\" ></a>';
		    }
		    if(wpmre_4link() != null && wpmre_4img() != null){
		    	$content .='<a class=\"wpmre-content-link\" href=\"'.wpmre_4link().'\" target=\"_blank\" ><img  src=\"'.wpmre_4img().'\" ></a>';
		    }
		    if(wpmre_5link() != null && wpmre_5img() != null){
		    	$content .='<a class=\"wpmre-content-link\" href=\"'.wpmre_5link().'\" target=\"_blank\" ><img  src=\"'.wpmre_5img().'\" ></a>';
		    }
            $content .= '<a class=\"wpmre-close\" href=\"javascript:void(0)\">x</a></div></div>';



      
      $stars =    '<div class="wpmre-stars-container-wrapper"><p class="review-title">LEAVE A REVIEW</p>
                <div class="wpmre-stars-container"></div>
            </div><script>


            jQuery(".wpmre-stars-container").stars({ text: ["Bad", "Not so bad", "Okay", "Good", "Perfect"] , click: function(i) {

            	if(i == 5){

            		
 jQuery("html").css("overflow-y","hidden");                             
 jQuery("body").append("'.$content.'");
                   
                      
            	}else{
jQuery("html").css("overflow-y","hidden");
 jQuery(".wpmre-content.wpmre-res").css("display" , "block");  

            	}
                    
            	
            	
                } });


  
jQuery(document).ready(function() {

  jQuery( "body" ).on("click", ".wpmre-close",function() {
   jQuery(".wpmre-con").detach();
   jQuery(".wpmre-content.wpmre-res").css("display" , "none"); 
   jQuery("html").css("overflow-y","auto");  

});

});


                </script>';


  return $stars;
		}
	}


function wpmre_response() {
       if(get_option('wpmre_radiocheck') == 'true') {
			echo '<div class="wpmre-content wpmre-res"><div class="wpmre-popup">'.do_shortcode(wpmre_shcode()).'<a class="wpmre-close" href="javascript:void(0)">x</a></div></div>';
			
		
		
		}elseif (get_option('wpmre_radiocheck') == 'false') {
			echo '<div class="wpmre-content wpmre-res"><div class="wpmre-popup"><p class="review-text">'.wpmre_ntext().'</p>'.wpmre_nemail().'<a class="wpmre-close" href="javascript:void(0)">x</a></div></div>'; 
		}else{
			echo '<div class="wpmre-content wpmre-res"><div class="wpmre-popup"><p class="review-text>Please select the Less Than 4 Stars Review option from settings page</p><a class="wpmre-close" href="javascript:void(0)">x</a></div></div>';
		}
		
	}
	add_action('wp_footer', 'wpmre_response');



	
	add_shortcode( 'wpmre_review_stars', 'wpmre_content' );
	
 ?>