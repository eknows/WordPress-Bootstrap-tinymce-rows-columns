<?php
/**
 * Plugin Name: Bootstrap rows and columns
 * Plugin URI: 
 * Description: Add Boostrap markup for rows an columns directly via TinyMCE
 * Author: eknows
 * License: GPLv2+
 * Version: 0.1
 * Last Change: 2015-05-22
*/

class bootstrap_row_col {
    
    function __construct(){
        
        if (!defined('bootstrap_row_col_PLUGIN_NAME'))
        define('bootstrap_row_col_PLUGIN_NAME', trim(dirname(plugin_basename(__FILE__)), '/'));
        if (!defined('bootstrap_row_col_PLUGIN_URL'))
        define('bootstrap_row_col_PLUGIN_URL', WP_PLUGIN_URL . '/' . bootstrap_row_col_PLUGIN_NAME);
        
        add_action( 'init', array( $this, 'init' ) );               
    }

    function init(){
        
         if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
         {
            add_filter('mce_external_plugins', array(&$this, 'add_plugin'));
            add_filter('mce_buttons', array(&$this, 'register_button'));
        }
        
        add_shortcode("md1", array(&$this, "md1"));
        add_shortcode("md2", array(&$this, "md2"));
        add_shortcode("md3", array(&$this, "md3"));
        add_shortcode("md4", array(&$this, "md4"));
        add_shortcode("md5", array(&$this, "md5"));
        add_shortcode("md6", array(&$this, "md6"));
        add_shortcode("md7", array(&$this, "md7"));     
        add_shortcode("md8", array(&$this, "md8"));
        add_shortcode("md9", array(&$this, "md9"));     
        add_shortcode("md10",array(&$this, "md10"));        
        add_shortcode("md11",array(&$this, "md11"));                
        add_shortcode("md12",array(&$this, "md12"));
        add_shortcode("row", array(&$this, "row"));
    }

    //TinyMce Custom Buttons
    function register_button($buttons) {
       array_push($buttons, "md1", "md2", "md3", "md4", "md5", "md6", "md7", "md8", "md9", "md10", "md11", "md12", "row");
       return $buttons;
    }
    
    function add_plugin($plugin_array) {
       $plugin_array['mybuttons'] = bootstrap_row_col_PLUGIN_URL . '/tinymce/customcodes.js';
       return $plugin_array;
    }

    //Bootstrap Shortcodes
    function md1( $atts, $content = null ) {
        return '<div class="col-md-1">'.do_shortcode($content).'</div>';
    }

    function md2( $atts, $content = null ) {
        return '<div class="col-md-2">'.do_shortcode($content).'</div>';
    }

    function md3( $atts, $content = null ) {
        return '<div class="col-md-3">'.do_shortcode($content).'</div>';
    }

    function md4( $atts, $content = null ) {
        return '<div class="col-md-4">'.do_shortcode($content).'</div>';
    }

    function md5( $atts, $content = null ) {
        return '<div class="col-md-5">'.do_shortcode($content).'</div>';
    }

    function md6( $atts, $content = null ) {
        return '<div class="col-md-6">'.do_shortcode($content).'</div>';
    }

    function md7( $atts, $content = null ) {
        return '<div class="col-md-7">'.do_shortcode($content).'</div>';
    }

    function md8( $atts, $content = null ) {
        return '<div class="col-md-8">'.do_shortcode($content).'</div>';
    }

    function md9( $atts, $content = null ) {
        return '<div class="col-md-9">'.do_shortcode($content).'</div>';
    }

    function md10( $atts, $content = null ) {
        return '<div class="col-md-10">'.do_shortcode($content).'</div>';
    }

    function md11( $atts, $content = null ) {
        return '<div class="col-md-11">'.do_shortcode($content).'</div>';
    }

    function md12( $atts, $content = null ) {
        return '<div class="col-md-12">'.do_shortcode($content).'</div>';
    }

    function row( $atts, $content = null ) {
        return '<div class="row">'.do_shortcode($content).'</div>';
    }

}
new bootstrap_row_col;
?>