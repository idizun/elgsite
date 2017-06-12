<?php

class CFMModelUninstall_cfm {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct() {
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function delete_db_tables() {
    global $wpdb;
    $wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "contactformmaker");
    $wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "contactformmaker_submits");
    $wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "contactformmaker_themes");
    $wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "contactformmaker_views");
    $wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "contactformmaker_blocked");
    delete_option("wd_contact_form_maker_version");
    delete_option("cfm_export_delimiter");
    delete_option("cfm_settings");
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}