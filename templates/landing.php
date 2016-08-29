<?php
/**
* Template Name: home
*/
?>

<style media="screen">
.image {
    position: relative;
    width: 100%; /* for IE 6 */
}

h2 {
    position: absolute;
    top: 35%;
    left: 0;
    width: 100%;
}
</style>

<?php $args = [ 'category_name' => 'page', 'posts_per_page' => -1 ]; ?>
<?php $pages = get_posts($args); ?>

<!-- Header -->
<header class="landing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 style="text-transform:capitalize; font-size: 60px; margin-top:-5px; text-shadow: 1px 1px black;">Imagine your music</h1>
                    <br>
                    <h2 style="text-shadow: 1px 1px black; text-transform: capitalize">Let's create the perfect music composition <br>just for you!</h2>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3 style="text-transform:capitalize; margin-top:-20px; text-shadow: 1px 1px black;">Piano | Orchestral | Singing</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <?php foreach ( $pages as $post ) : setup_postdata( $post ); ?>
                <div class="col-xs-12 col-lg-4">
                    <a href="<?php the_permalink(); ?>">
                        <div class="image">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive" />
                            <h2 class="name" style="color:white; text-shadow: 1px 1px black; margin-top:-5px"><?php the_title(); ?></h2>
                        </div>
                    </a>
                </div>
            <?php endforeach;
            wp_reset_postdata();?>
        </div>
    </div>
</header>

<?php $page = get_page_by_title( 'biography' ); ?>
<section class="ui segment inverted vertical" style="background-color:#B8E986; color:#101010;">
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text text-center">
                    <?php $title = apply_filters('the_title', $page->post_title); ?>
                    <h1 class="name"><?= $title; ?></h1>
                </div>
            </div>
            <br>
            <br>
            <br>
            <?php $content = apply_filters('the_content', $page->post_content); ?>
            <?= $content; ?>
        </div>
        <br>
    </section>

    <style media="screen">
    p.contact-submit input.pushbutton-wide{
        -webkit-border-radius: 28;
        -moz-border-radius: 28;
        border-radius: 28px;
        color: #ffffff;
        font-size: 20px;
        background: #507a2d;
        padding: 10px 20px 10px 20px;
        text-decoration: none;
        border:0px;
        margin-top:10px;
    }
    p.contact-submit input.pushbutton-wide:hover{
        background: #507a2f;
        text-decoration: none;
    }
    </style>
    <section style="background:#D1EFAE;">
        <div class="container">
            <?php $page = get_page_by_title( 'form' ); ?>
            <?php $content = apply_filters('the_content', $page->post_content); ?>
            <div class="ui form">
                <?php echo $content; ?>
            </div>

        </div>
    </section>

    <?php // get_template_part('templates/portfolio'); ?>

    <?php // get_template_part('templates/about'); ?>

    <?php // get_template_part('templates/contact'); ?>
