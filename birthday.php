<?php
/**
* Template Name: Birthday
*/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <div class="row">
        <div class="col-md-6">
            <img src="http://localhost/clochette/web/app/uploads/2016/02/anni-1.png" alt="anni-1" class="img-responsive" />
        </div>
        <div class="col-md-6">
            <img src="http://localhost/clochette/web/app/uploads/2016/02/anni-2.png" alt="anni-2" class="img-responsive" />
        </div>
    </div>

    <div class="jumbotron">
      <h1>THEME DE LA SOIREE</h1>
      <br>
      <br>
      <p class="thinkerbell">
          Heros ou heroïnes - gentils ou méchants de <br>
          BD - séries tv - films - comédies musicales - jeux vidéos<br>
          <span class="no-thinkerbell">Ah!</span> et.. n'oubliez pas votre déguisement! <span class="no-thinkerbell">(-;</span> <br>
          (en pièce jointe,  quelque idées idées)<br>
          magnifique cocktail dînatoire grâce à mon ami traiteur <a href="http://www.vidonne.ch/">André Vidonne</a> <br>
          et quelques belles  surprises vous attendent..<br>
          au plaisir de vous voir, on va bien s'amuser!<br>
          gros gros bisous<br>
          p'tite fée
      </p>
    </div>

    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
