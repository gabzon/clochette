<?php
$args = [
    'taxonomy' => 'category'
];
?>
<?php $categories = get_terms($args); ?>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <?php foreach ($categories as $cat): ?>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?= $cat->name; ?></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <?php $posts = get_posts(['category_name' => $cat->name]); ?>
            <div class="row">
                <?php foreach ($posts as $p): ?>
                    <?php $format = get_post_format( $p->ID ); ?>
                    <?php if ($format == 'video'): ?>
                        <?php if ($cat->name == 'VIDEO GAMEPLAY RESCORED'): ?>
                            <div class="col-sm-4 portfolio-item">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="<?= $p->post_content; ?>" allowfullscreen></iframe>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-sm-6 portfolio-item">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="<?= $p->post_content; ?>"></iframe>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="col-sm-12 portfolio-item">
                            <?= $p->post_content; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <br><br><br>
        <?php endforeach; ?>
    </div>
</section>
