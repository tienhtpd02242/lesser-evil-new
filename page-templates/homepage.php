<?php
/**
* Template Name: Home Page
*
* @package WordPress
*
*/
get_header();

get_template_part('package-main/templates/homepage/hero', 'section');
get_template_part('package-main/templates/homepage/benefit', 'section');
get_template_part('package-main/templates/homepage/intro', 'section');
get_template_part('package-main/templates/homepage/flavour', 'section');
get_template_part('package-main/templates/homepage/choice', 'section');
get_template_part('package-main/templates/homepage/where-to-buy', 'section');
get_template_part('package-main/templates/homepage/contact', 'section');

get_footer();
