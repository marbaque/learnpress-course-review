<?php
/*
Plugin Name: LearnPress Course Review
Plugin URI: http://thimpress.com/learnpress
Description: Adding review for course
Author: thimpress
Version: beta
Author URI: http://thimpress.com
Tags: learnpress
*/
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

define( 'LPR_COURSE_REVIEW_PATH', dirname( __FILE__ ) );

/**
 * Register course-review course addon
 */
function learn_press_register_course_review() {
    require_once( LPR_COURSE_REVIEW_PATH . '/init.php' );
}
add_action( 'learn_press_register_add_ons', 'learn_press_register_course_review' );
