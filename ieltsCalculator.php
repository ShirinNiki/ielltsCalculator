<?php
/*
 * Plugin Name: IELTS Calculator
 * Description: ielts calculators, use shortcode: [ieltscal] 
 * Version: 1.0.0
 * Author: Shirin Niki
 * License: GPL3
*/
function ieltscalcuator_enqueue_scripts() {
    wp_enqueue_script( 'calculator-js', plugin_dir_url( __FILE__ ) . 'include/calculator.js', array(), '', true);
    wp_enqueue_style( 'calculator-css', plugin_dir_url( __FILE__ ) . 'include/css/calculator.css' );
 }
add_action( 'wp_enqueue_scripts', 'ieltscalcuator_enqueue_scripts');

function ieltsCalculator() {
    
    $var = '<div id="ieltsCal_container">
                <div id="content_box_cal">
                        <div class="cal-desc" id="cal-3">
                            <div id="part_score_widget">
                                <div id="calculator-2"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div>
            </div>';
return $var;
}
add_shortcode('ieltscal', 'ieltsCalculator');