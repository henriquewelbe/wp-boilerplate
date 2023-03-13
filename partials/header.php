<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head() ?>

  <meta name="description" content="<?php bloginfo('description'); ?>" />
</head>
<body <?php body_class(); ?>>
  <?php get_template_part('partials/cursor'); ?>
  <?php get_template_part('partials/preloader'); ?>
    <div class="site-wrapper">
      <?php get_template_part('partials/navbar'); ?>
