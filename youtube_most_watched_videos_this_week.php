<?php
/*
Plugin Name: You tube Most watch videos last week
Plugin URI: http://advertisablearena.com
Description: You tube Most watch videos last week
Version: 1.0
Author: abhijit Gaikwad
Author URI: http://advertisablearena.com
*/

function sampleMostWatched() 
{
  echo '<iframe src ="http://advertisablearena.com/youtube/mostviewedinweek.htm" width="180" height="200" frameBorder="0"> <p>Your browser does not support iframes.</p></iframe>';

}

function widget_mymostwatched($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Most watched videos this week<?php echo $after_title;
  sampleMostWatched();
  echo $after_widget;
}

function mymostwatched_init()
{
  register_sidebar_widget(__('Most watched videos this week'), 'widget_mymostwatched');     
}
add_action("plugins_loaded", "mymostwatched_init");


 
?>