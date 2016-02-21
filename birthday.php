<?php
/**
* Template Name: Birthday
*/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php //get_template_part('templates/page', 'header'); ?>
    <div class="ui basic segment" style="margin-top:0;padding-top:0;">
        <a id="image-1" href="#image-2">
            <img src="http://bqhdcmfo.preview.infomaniak.com/wp-content/uploads/2016/02/anni-1.png" alt="anni-1" class="ui centered big image" />
        </a>
    </div>
    <br>
    <div id="image-2" class="ui basic segment">
        <img src="http://bqhdcmfo.preview.infomaniak.com/wp-content/uploads/2016/02/anni-2.png" alt="anni-2" class="img-responsive" />
    </div>
    <br>
    <div class="jumbotron">
        <h1>THEME DE LA SOIREE</h1>
        <br>
        <br>
        <p class="thinkerbell">
            Heros ou heroïnes - gentils ou méchants de <br>
            BD - séries tv - films - comédies musicales - jeux vidéos<br>
            Ah! et.. n'oubliez pas votre déguisement! <span class="no-thinkerbell">(-;</span> <br>
            magnifique cocktail dînatoire grâce à mon ami traiteur <a href="http://www.vidonne.ch/">André Vidonne</a> <br>
            et quelques belles  surprises vous attendent..<br>
            au plaisir de vous voir, on va bien s'amuser!<br>
            gros gros bisous<br>
            p'tite fée
        </p>
    </div>
    <br>
    <h2>Voici quelque idées</h2>
    <br>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
