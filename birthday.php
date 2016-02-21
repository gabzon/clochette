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
    <div class="ui yellow inverted segment center aligned" style="color:black">
        <h1 style="color:black">THEME DE LA SOIREE</h1>
        <h2 style="color:black" class="thinkerbell">
            <u><span style="color:green">Heros ou heroïnes</span> - <span style="color:brown">gentils ou méchants</span> des:</u><br>        
            <span style="color:blue">dessins animés - séries tv - films - comédies musicales - opéras - jeux vidéos</span><br>
            Ah<span class="no-thinkerbell"> !</span> et.. n'oubliez pas votre déguisement<span class="no-thinkerbell"> ! <i class="smile icon"></i></span> <br>
            magnifique cocktail dînatoire grâce à mon ami traiteur André Vidonne<br>
            et quelques belles  surprises vous attendent..<br>
            au plaisir de vous voir, on va bien s'amuser <span class="no-thinkerbell">!</span><br>
            gros gros bisous<br>
            p'tite fée
        </h2>
    </div>
    <br>
    <div class="ui basic segment center aligned">
        <h2 class="thinkerbell">Ci-dessous quelques idées pour le choix de votre déguisement</h2>
    </div>
    <br>
    <?php get_template_part('templates/content', 'page'); ?>
    <br>
<?php endwhile; ?>
