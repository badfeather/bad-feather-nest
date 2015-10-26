<?php

/**
 * Initial setup includes
 */

// initial setup
require get_template_directory() . ( '/inc/setup.php' );

// scripts and stylesheets
require get_template_directory() . ( '/inc/scripts.php' );

// widgets
require get_template_directory() . ( '/inc/widgets.php' );

// template tags
require get_template_directory() . ( '/inc/template-tags.php' );

// register custom post types and taxonomies
// require get_template_directory() . ( '/inc/custom-content.php' );

// theme custom functions
require get_template_directory() . ( '/inc/custom.php' );

/**
 * plugin-specific configs
 */

