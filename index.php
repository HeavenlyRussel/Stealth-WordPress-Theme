<?php get_header(); ?>
<main class="main-content container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <article class="post">
                <h2 class="post__title"><?php the_title(); ?></h2>
                <div class="post__content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</main>
<?php get_footer(); ?>