<?php
/*
Plugin Name: null_4_pxl
*/

if(!defined('WPINC')){
  die;
}

interface N4PInterface{
  public function addItemAjax($item);
}  


class PluginN4P implements N4PInterface{
  
  public function __construct(){
    //$this->customizeDashboard();
    $this->setupDashboard();
  }
  
  /*
  private function customizeDashboard(){
    add_action('wp_dashboard_setup', function(){
      remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); 
      remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );  
    });
  }
  */
  
  public function customizeDashboard(){
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side'); 
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side'); 
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side'); 
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'side'); 
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal'); 
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal'); 
  }
  
  private function setupDashboard(){
    add_action('wp_dashboard_setup', array(&$this, 'customizeDashboard'));
    //add_action('wp_dashboard_setup', array(&$this, 'customizeDashboard'));
    //add_action('admin_menu', array(&$this, 'customizeDashboard'));
  }
  
  
  
  public function addItemAjax($item){}
  
}

//no need 4 singelton
global $n4P;
$n4P = new PluginN4P();



?>



