<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400&display=swap"rel="stylesheet"/>
  <?= css(['assets/css/normalize.css', '@auto']) ?>
  <?= css(['assets/css/theshapecouncil.css', '@auto']) ?>
</head>
<body>
  <div class="page">
    <header class="flex-header">
      <a href="<?= $site->homePage()->url()?>">
        <object type="image/svg+xml" data="/assets/images/logo.svg" class="logo"></object>
      </a>
      <?php if($page->isHomePage()): ?>
        <h1>Uniting artists, creatives, makers, and community in Kenton, Portland</h1>
      <?php endif ?>
    </header>

