<?php get_header(); ?>
<div class="marg">
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
      <article class="joueurs">
          <?php the_post_thumbnail( 'large' ); ?>
          <div class="personne">
              <h1 class="title">
              <?php the_title(); ?>
              <div class="single-yellow-rectangle"></div> <!-- Ajoutez cette ligne -->

              </h1>
              <ul>
                <li> <?php the_field("nomprenom"); ?>, membre de L'<?php the_field("equipe"); ?> </li>
                <li> <?php the_field("age"); ?> ans </li> 
                <li> <?php the_field("position"); ?></li>
                <li> Numéro de maillot <?php the_field("maillot"); ?></li>
            </ul>
            </div>
          </div>

      </article>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
