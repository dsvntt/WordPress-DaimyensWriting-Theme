<?php get_header() ?>

<div id="etusivu">

<?php if ( have_posts() ) :
	        while ( have_posts() ) : the_post(); ?>


    <h3><?php the_title() ?></h3>
    <div id="updates">
    <?php the_content() ?>
</div>
</div>
<?php endwhile;

else :
echo '<p>There are no posts!</p>';

 endif; ?>

</div>

</div>
</body>
</html>