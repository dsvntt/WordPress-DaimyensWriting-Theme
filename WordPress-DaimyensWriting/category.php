<?php

get_header();

?>

<div id="kategoriat">

<h1 id="k-otsikko"><?php  foreach ( ( get_the_category() ) as $category ) {
    echo $category->cat_name . ' ';}?></h1>

<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

<div class="kategoria">
    <h3><a href= "<?php the_permalink() ?>"><?php the_title() ?></a></h3>
    <?php the_excerpt() ?>
</div>

<?php endwhile;

        else :
	    echo '<p>There are no posts!</p>';

         endif; ?>

</div>

<?php get_footer() ?>