<?php get_header() ?>

    <div id="sivu">

    <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title() ?></h1>

        <p><?php the_content() ?></p>
    </div>

    <?php endwhile;

        else :
	    echo '<p>There are no posts!</p>';

         endif; ?>

    <?php get_footer() ?>

