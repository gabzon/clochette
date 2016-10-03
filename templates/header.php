<?php
use Roots\Sage\Nav;
use Roots\Sage\Nav\NavWalker;
$menu_name = 'primary_navigation';

?>
<?php if (is_front_page()) : ?>
<style>
.landing{ background: transparent; border:0;}
.navbar-header a.navbar-brand{color:white;}
.navbar-header a.navbar-brand.white-text{color:grey;}
.navbar-nav li a {color:white !important;}
.navbar-nav li a.color-text{ color: grey !important;}
ul.dropdown-menu li a{color:grey !important;}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    font-weight: bold;
    background-color: transparent;
}
</style>
<?php endif ?>

<div class="navbar navbar-default navbar-fixed-top landing" role="banner" style="height:120px;">
    <?php if (is_admin_bar_showing()): ?>
        <?= '<div style="min-height: 28px;"></div>'; ?>
    <?php endif; ?>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                    <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="img-responsive" style="max-width:50px;margin-top:-10px">
                <?php else : ?>
                    <?php echo bloginfo('name'); ?>
                <?php endif; ?>

            </a>
        </div>

        <nav class="collapse navbar-collapse" role="navigation" style="text-transform:uppercase">
            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
            endif;
            ?>
        </nav>
    </div>
</div>
