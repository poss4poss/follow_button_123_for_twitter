<?php
/*
Plugin Name: Follow Button 123 for Twitter
Plugin URI: 
Description: plugin for setup Twitter Follow button to every post on your wordpress blog.
Version: 1.0
Author: Aleksandr Poss
Author URI: 
*/


function follow_button_123_for_twitter($content) {
	
	$current_url = $_SERVER['REQUEST_URI'];       
     
        
     if (!is_home()) {
	  	        
     $content .= "<div style=\"float:left; margin-right:6px;\">
         <a href=\"https://twitter.com/share\" class=\"twitter-share-button\">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
     </div>";}        
        return $content;  
}
add_action('the_content','follow_button_123_for_twitter');
