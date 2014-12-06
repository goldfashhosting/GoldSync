<?php
/*
Plugin Name: GoldSYNC
Plugin URL: https://goldfash.com/plugins
Description: Sync App Required To Use GoldFash Apps.
Version: v0.0.1
Author: Kodak Ford
Author URI:        http://goldfash.com
Contributors:      Racean, GoldFash Design Team, RaFco AFC
Domain Path:       /languages
Text Domain:       GoldSync
GitHub Plugin URI: https://github.com/goldfashhosting/GoldSync
GitHub Branch:     master
*/

add_action('admin_menu', 'goldgb_menu_pages');

function goldgb_menu_pages() {
    // Add the top-level admin menu
    $page_title = 'GoldSync License';
    $menu_title = 'GoldSYNC';
    $capability = 'delete_others_posts';
    $menu_slug = 'goldSYNC_a';
    $function = 'goldgb_settings';
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);

    // Add submenu page with same slug as parent to ensure no duplicates
    $sub_menu_title = 'Settings';
    add_submenu_page($menu_slug, $page_title, $sub_menu_title, $capability, $menu_slug, $function);

    // Now add the submenu page for Help
    $submenu_page_title = 'GoldSync Secret Key';
    $submenu_title = 'Secret Key';
    $submenu_slug = 'goldSYNC_b';
    $submenu_function = 'goldgb_help';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
}

function goldgb_settings() {
    if (!current_user_can('delete_others_posts')) {
        wp_die('You are not a superadmin. The Desktop requested isnt available for you. Please press the back button.');
    }

    require('inc/.backpage.php');
}

function goldgb_help() {
    if (!current_user_can('delete_others_posts')) {
        wp_die('Your License Keys Looks Invalid. Please go back and enter a valid License Key to continue.');
    }

   require('inc/.backpage2.php');
}

// plugin folder url
if(!defined('RC_SCD_PLUGIN_URL')) {
    define('RC_SCD_PLUGIN_URL', plugin_dir_url( __FILE__ ));
}

/*
|--------------------------------------------------------------------------
| MAIN CLASS
|--------------------------------------------------------------------------
*/

class gold_xyaudju_aij_o {
 
    /*--------------------------------------------*
     * Constructor
     *--------------------------------------------*/
 
    /**
     * Initializes the plugin by setting localization, filters, and administration functions.
     */
    function __construct() {
    
        add_action('admin_menu', array( &$this,'rc_scd_register_menu') );
        add_action('load-index.php', array( &$this,'rc_scd_redirect_dashboard') );
 
    } // end constructor
 
    function rc_scd_redirect_dashboard() {
    
        if( is_admin() ) {
            $screen = get_current_screen();
            
            if( $screen->base == 'dashboard' ) {

                wp_redirect( admin_url( 'index.php?page=SYNC_2-Gold' ) );
                
            }
        }

    }
    
    
    
    function rc_scd_register_menu() {
        add_dashboard_page( 'Gold Dashboard', 'SYNC Dashboard', 'read', 'SYNC_2-Gold', array( &$this,'rc_scd_create_dashboard') );
    }
    
    function rc_scd_create_dashboard() {
        include_once( 'inc/.SyncUtils.php'  );
    }

 
}
 
 function my_plugin_redirect() {
     if (get_option('my_plugin_do_activation_redirect', false)) {
         delete_option('my_plugin_do_activation_redirect');
          wp_redirect("admin.php?page=goldSYNC_a");
          //wp_redirect() does not exit automatically and should almost always be followed by exit.
          exit;
     }
 }
 
 /* Display a notice that can be dismissed */

add_action('admin_notices', 'gold_admin_notice');

function gold_admin_notice() {
    global $current_user ;
        $user_id = $current_user->ID;
        /* Check that the user hasn't already clicked to ignore the message */
    if ( ! get_user_meta($user_id, 'gold_ignore_notice') ) {
        echo '<div class="updated"><p>'; 
        printf(__('Welcome to your backend Dashboard Area! | <a href="%1$s">GoldSync</a>'), '../wp-admin/admin.php?page=goldSYNC_a');
        echo "</p></div>";
    }
}

add_action('admin_init', 'gold_nag_ignore');

function gold_nag_ignore() {
    global $current_user;
        $user_id = $current_user->ID;
        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset($_GET['gold_nag_ignore']) && '0' == $_GET['gold_nag_ignore'] ) {
             add_user_meta($user_id, 'example_ignore_notice', 'true', true);
    }
}

// instantiate plugin's class
$GLOBALS['g_dashboard'] = new gold_xyaudju_aij_o();
?>
