<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * This template is responsible for rendering all the subpages of the `notes` page.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>
<main class="event">
  <?php if($image = $page->content->workshopImage()): ?>
    <img src="<?= $image->toFile()->url() ?>" alt="">
  <?php endif ?>
  <header>
    <h1><?= $page->eventName() ?></h1>
    <div class="date-time">
      <time class="event-date"><?= $page->date()->toDate('F d, Y') ?>  </time>
      <span class="symbol">&#9670;</span>
      <span><?= $page->time()->toDate('g:i a') ?></span>
    </div>
    <p class="price">$<?= $page->price() ?></p>
    <a class="cta bg-yellow" href="<?= $page->link() ?>">Reserve</a>
  </header>
  <div class="event-details">
    <?= $page->text()->kt() ?>
  </div>
</main>
<?php snippet('footer') ?>
