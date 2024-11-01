<?php 
    /*
    Plugin Name: Sports News
    Plugin URI: http://livescores.website/sports-news-plugin/
    Description: Display the latest sports news (Up to 14+ Languages) from Google Web Elements or Daily Herald fast and easy using simple short codes. Different sizes are available.
    Author: lswjohn
    Version: 1.5
    Author URI: http://livescores.website/
    */

add_shortcode('news180x110us', 'news180x110us');
add_shortcode('news220x150us', 'news220x150us');
add_shortcode('news550x70us', 'news550x70us');

add_shortcode('news300x250us', 'news300x250us');
add_shortcode('news300x250uk', 'news300x250uk');
add_shortcode('news300x250it', 'news300x250it');
add_shortcode('news300x250es', 'news300x250es');
add_shortcode('news300x250fr', 'news300x250fr');
add_shortcode('news728x90us', 'news728x90us');
add_shortcode('news728x90uk', 'news728x90uk');
add_shortcode('news728x90it', 'news728x90it');
add_shortcode('news728x90es', 'news728x90es');
add_shortcode('news728x90fr', 'news728x90fr');
add_shortcode('news300x250de', 'news300x250de');
add_shortcode('news728x90de', 'news728x90de');
add_shortcode('news300x250argentina', 'news300x250argentina');
add_shortcode('news728x90argentina', 'news728x90argentina');
add_shortcode('news300x250australia', 'news300x250australia');
add_shortcode('news728x90australia', 'news728x90australia');
add_shortcode('news300x250austria', 'news300x250austria');
add_shortcode('news728x90austria', 'news728x90austria');
add_shortcode('news300x250belgium', 'news300x250belgium');
add_shortcode('news728x90belgium', 'news728x90belgium');
add_shortcode('news728x90gr', 'news728x90gr');
add_shortcode('news300x250gr', 'news300x250gr');
add_shortcode('news300x250india', 'news300x250india');
add_shortcode('news728x90india', 'news728x90india');
add_shortcode('news300x250indonesia', 'news300x250indonesia');
add_shortcode('news728x90indonesia', 'news728x90indonesia');
add_shortcode('news300x250pakistan', 'news300x250pakistan');
add_shortcode('news728x90pakistan', 'news728x90pakistan');
add_shortcode('news300x250portugal', 'news300x250portugal');
add_shortcode('news728x90portugal', 'news728x90portugal');
add_shortcode('news728x90tr', 'news728x90tr');
add_shortcode('news300x250tr', 'news300x250tr');

function sports_news_plugin_menu(){
    	add_options_page('Sports News Options', 'Sports News', 'manage_options', 'sports-news-plugin-menu', 'spwp_plugin_options');
}

add_action('admin_menu','sports_news_plugin_menu');

function spwp_plugin_options(){
    	include('settings.php');
}

// Include Files
$files = array(
    '/classes/snwp-module',
    '/classes/snwp-main',
    '/classes/snwp-show',
    '/classes/snwp-setting',
    '/includes/admin-notice-helper/admin-notice-helper'
);

foreach ($files as $file) {
    require_once plugin_dir_path( __FILE__ ).$file.'.php';
}
if ( class_exists( 'snwp_Main' ) ) {
    snwp_Main::get_instance();
 }

function news180x110us(){
?>
<iframe src="http://livescores.website/get-300-us-dh" scrolling="no" frameborder="0" style="border:none;width:180px;height:100px; "></iframe>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><small><a href="http://livescores.website/sports-news-widget/" target="_blank">Sports News Widget</a></small></div>' . "\n";
                }}
				
function news220x150us(){
?>
<iframe src="http://livescores.website/get-300-us-dh" scrolling="no" frameborder="0" style="border:none;width:220px;height:150px; "></iframe>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><small><a href="http://livescores.website/sports-news-widget/" target="_blank">Sports News Widget for websites</a></small></div>' . "\n";
                }}
				
function news550x70us(){
?>
<iframe src="http://livescores.website/get-728-us-dh" scrolling="no" frameborder="0" style="border:none;width:550px;height:70px;overflow: scroll"></iframe>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://livescores.website/" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				

function news300x250us(){
?>
<center><iframe src="http://livescores.website/get-300-us" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>News plugin by <a href="http://livescores.website/" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}

function news300x250uk(){
?>
<center><iframe src="http://livescores.website/get-300-uk" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://livescores.website/sports-news-plugin/" target="_blank">Sports News Plugin</a></small></center></div>' . "\n";
                }}
				
function news300x250it(){
?>
<center><iframe src="http://livescores.website/get-300-it" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://it.livescores.website/" target="_blank">http://it.livescores.website/</a></small></center></div>' . "\n";
                }}
				

function news300x250es(){
?>
<center><iframe src="http://livescores.website/get-300-es" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://es.livescores.website/" target="_blank">http://es.livescores.website/</a></small></center></div>' . "\n";
                }}
				
				
function news300x250fr(){
?>
<center><iframe src="http://livescores.website/get-300-fr" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://fr.livescores.website/" target="_blank">http://fr.livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news728x90us(){
?>
<center><iframe src="http://livescores.website/get-728-us" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Get this widget from <a href="http://livescores.website/" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				

function news728x90uk(){
?>
<center><iframe src="http://livescores.website/get-728-uk" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://livescores.website/" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				

function news728x90it(){
?>
<center><iframe src="http://livescores.website/get-728-it" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center><?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://it.livescores.website/" target="_blank">http://it.livescores.website/</a></small></center></div>' . "\n";
                }}
				


function news728x90es(){
?>
<center><iframe src="http://livescores.website/get-728-es" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center><?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://es.livescores.website/" target="_blank">http://es.livescores.website/</a></small></center></div>' . "\n";
                }}
				

function news728x90fr(){
?>
<center><iframe src="http://livescores.website/get-728-fr" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center><?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://fr.livescores.website/" target="_blank">http://fr.livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news300x250de(){
?>
<center><iframe src="http://livescores.website/get-300-de" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://livescores.website/" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news728x90de(){
?>
<center><iframe src="http://livescores.website/get-728-de" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small><a href="http://livescores.website/" target="_blank">Plugin by Livescores.website</a></small></center></div>' . "\n";
                }}
			

function news300x250sw(){
?>
<center><iframe src="http://livescores.website/go-300-sw" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Free plugin from <a href="http://livescores.website/" title="Switzerland Live Scores" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				
				function news300x250tr(){
?>
<center><iframe src="http://livescores.website/go-300-tr" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Sports news plugin by <a href="http://livescores.website/" title="Turkey live scores" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				
function news728x90tr(){
?>
<center><iframe src="http://livescores.website/go-728-tr" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Sports plugin - <a href="http://livescores.website/" title="Turkey live scores" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				
function news300x250portugal(){
?>
<center><iframe src="http://livescores.website/go-300-portugal" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Sports news plugin, <a href="http://livescores.website/" title="Portugal Live Scores" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news728x90portugal(){
?>
<center><iframe src="http://livescores.website/go-728-portugal" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Get this plugin from <a href="http://livescores.website/" title="Portugal live scores" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				
function news300x250pakistan(){
?>
<center><iframe src="http://livescores.website/go-300-pakistan" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Free plugin from <a href="http://livescores.website/" title="Pakistan Live Scores" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news728x90pakistan(){
?>
<center><iframe src="http://livescores.website/go-728-pakistan" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Get this plugin from <a href="http://livescores.website/" title="Pakistan live scores" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				
function news300x250indonesia(){
?>
<center><iframe src="http://livescores.website/go-300-indonesia" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Free plugin from <a href="http://livescores.website/" title="Indonesia Live Scores" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news728x90indonesia(){
?>
<center><iframe src="http://livescores.website/go-728-indonesia" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Get this widget from <a href="http://livescores.website/" title="Indonesia live scores" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				
function news300x250india(){
?>
<center><iframe src="http://livescores.website/go-300-india" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Free plugin from <a href="http://livescores.website/" title="India Live Scores" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news728x90india(){
?>
<center><iframe src="http://livescores.website/go-728-india" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Get this plugin from <a href="http://livescores.website/" title="India live scores" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				
function news300x250gr(){
?>
<center><iframe src="http://livescores.website/go-300-gr" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Free sports plugin by <a href="http://livescores.website/" title="Greece Live Scores" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news728x90gr(){
?>
<center><iframe src="http://livescores.website/go-728-gr" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Get widget from <a href="http://livescores.website/" title="Greece live scores" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				
function news300x250austria(){
?>
<center><iframe src="http://livescores.website/go-300-austria" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Free sports plugin by <a href="http://livescores.website/" title="Austria Live Scores" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news728x90austria(){
?>
<center><iframe src="http://livescores.website/go-728-austria" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Get widget from <a href="http://livescores.website/" title="Austria live scores" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				
function news300x250australia(){
?>
<center><iframe src="http://livescores.website/go-300-australia" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Free sports plugin by <a href="http://livescores.website/" title="LSW Australian Scores" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news728x90australia(){
?>
<center><iframe src="http://livescores.website/go-728-australia" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Get widget from <a href="http://livescores.website/" title="Australia live scores" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				
function news300x250argentina(){
?>
<center><iframe src="http://livescores.website/go-300-argentina" frameborder="0" style="border:none;width:330px;min-height:270px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Free sports plugin by <a href="http://livescores.website/" target="_blank">http://livescores.website/</a></small></center></div>' . "\n";
                }}
				
function news728x90argentina(){
?>
<center><iframe src="http://livescores.website/go-728-argentina" frameborder="0" style="border:none;width:740px;height:110px;overflow: scroll"></iframe></center>
<?php  if (snwp_Main::$settings['snwp_author_linking'] == '1') {
                    echo '<div><center><small>Get widget from <a href="http://livescores.website/" target="_blank">livescores.website</a></small></center></div>' . "\n";
                }}
				