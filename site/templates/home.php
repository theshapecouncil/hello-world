<?php snippet('header') ?>
<main>
    <section class="homepage-hero">
        <div class="homepage-hero-section-1">
            <div class="homepage-hero-text-and-graphic-1">
                <h1>Uniting artists, creatives, makers, and community in Kenton, Portland</h1>
                <img class="accent-graphic accent-graphic-1" src="images/the-shape-council-accent-graphic-1.png" />
            </div>
            <img class="hero-image hero-image-1" src="images/the-shape-council-storefront.png" />
        </div>
        <div class="homepage-hero-section-2">
            <h2>
                Create together, learn new skills, and support local makers and artists.
                <br /><br />
                Join the Shape Council.
            </h2>
            <img class="accent-graphic accent-graphic-2" src="images/the-shape-council-accent-graphic-2.png" />
            <img class="hero-image hero-image-2" src="images/workshop-table.jpeg" />
        </div>
    </section>
    <section class="hours">
        <header>
            <h2 class="big">Hours</h2>
        </header>
        <p>Wednesdays 1-6</p>
        <p>Thursdays 11-7</p>
        <p>Fridays 11-7</p>
        <p>First & Third Saturdays 10-3</p>
        <p class="yellow">Or whenever the door is open.</p>
    </section>
    <hr />
    <section class="workshops">
        <header class="grid-header">
            <h2 class="big">Workshops</h2>
            <p>Let's make something together.</p>
        </header>
        <div class="card-container">
            <?php 
        if ($workshopsPage = page('workshops')): ?>
            <?php foreach ($workshopsPage->children()->listed() as $workshop): ?>
            <figure class="card">
                <a href="<?= $workshop->url() ?>"></a>
                <?php if($image = $workshop->workshopImage()): ?>
                <img src="<?= $image->toFile()->url() ?>" alt="">
                <?php endif ?>
                <figcaption>
                    <strong class="yellow"><?= $workshop->eventName() ?></strong>
                    <div class="date-time">
                        <time class="event-date"><?= $workshop->date()->toDate('F d, Y') ?> </time>
                        <span class="symbol">&#9670;</span>
                        <span><?= $workshop->time()->toDate('g:i a') ?></span>
                    </div>
                    <p class="price">$<?= $workshop->price() ?></p>
                </figcaption>
                <div class="event-description">
                    <?= $workshop->shortDescription()->kt() ?>
                </div>
            </figure>
            <?php endforeach ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php snippet('footer') ?>