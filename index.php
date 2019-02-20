<?php
/*
Plugin Name: Nadaft KPR Simulation
Plugin URI: https://github.com/Nadaft/Nadaft-KPR-Simulation
Description: Plugin formulir simulasi KPR untuk Wordpress
Version: 1.0
Author: Nur Hasan Najibullah
Author URI: https://github.com/nhnajibullah
*/

// Register the script
wp_register_script('kpr_js_script', plugins_url('/js/app.js', __FILE__ ));
wp_register_script('accounting_js_script', plugins_url('/js/accounting.js', __FILE__ ));
// wp_register_script( 'imask', "https://unpkg.com/imask");
wp_register_script('jquery_inputmask_bundle', plugins_url("js/jquery.inputmask.bundle.min.js", __FILE__));
wp_register_script('jquery_inputmask_binding', plugins_url("js/inputmask.binding.min.js", __FILE__));
wp_register_style('kpr_simulation_css', plugins_url('/css/styles.css', __FILE__ ));

function nks_load_form()
{
    include( plugin_dir_path( __FILE__ ) . 'views/form.php');
}

wp_enqueue_script('jquery');
wp_enqueue_script('kpr_js_script');
wp_enqueue_script('accounting_js_script');
wp_enqueue_script('jquery_inputmask_bundle');
wp_enqueue_script('jquery_inputmask_binding');
wp_enqueue_style('kpr_simulation_css');

add_shortcode('nadaft_kpr_simulation_form', 'nks_load_form');