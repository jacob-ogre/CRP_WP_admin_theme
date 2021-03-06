<?php

/*
 * Plugin Name: Dynamic Recovery Plan (DRP) Admin Theme
 * Plugin URI: https://github.com/jacob-ogre/CRP_WP_admin_theme
 * Description: Clean, eye-pleasing theme
 * Author: jacob-ogre
 * Version: 1.0
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * */

function material_style() {
        wp_enqueue_style('material-theme', plugins_url('DRP-admin-theme.css', __FILE__));
}

add_action('admin_enqueue_scripts', 'material_style');
add_action('login_enqueue_scripts', 'material_style');

?>

