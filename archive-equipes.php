<?php get_header(); ?>
<div class="marg">

    <div class="equipes">
        <h2>Les équipes du Hockey Cosom</h2>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <article class="equipes">
                        <?php the_post_thumbnail('large'); ?>

                        <div class="content">
                            <h1 class="title">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                            </h1>
                            <?php the_content(); ?>
                            <div class="informations">
                            </div>
                        </div>
                    </article>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

 </div>
<?php get_footer(); ?>
