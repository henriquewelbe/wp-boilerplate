<!DOCTYPE html>
<html lang="en">
  <head>
  <?php wp_head() ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Boilerplate</title>

  <meta name="description" content="Floema - beautiful jewelery">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ff3a00">
  <link name="msapplication-TileColor" content="#f4d8cc">

  <meta property="og:type" content="website">
  <meta property="og:title" content=meta.data.title>
  <meta property="og:description" content=meta.data.description>
  <!-- <meta property="og:image" content=meta.data.image ? meta.data.image.url : ''> -->

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content=meta.data.title>
  <meta name="twitter:description" content=meta.data.description>
  <!-- <meta property="twitter:image" content=meta.data.image ? meta.data.image.url : ''> -->
</head>
<body class="page-template-<?= strtolower(get_the_title()) ?>">
  <?php get_template_part('partials/cursor'); ?>
  <?php get_template_part('partials/preloader'); ?>
    <div class="content" data-template="<?= strtolower(get_the_title()) ?>">
      <div class="<?= strtolower(get_the_title()) ?>">
      <?php get_template_part('partials/navbar'); ?>
