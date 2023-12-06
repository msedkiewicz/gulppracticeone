<?php get_header();

if(have_posts()) {
    while(have_posts()) {
        the_post(); ?>
        <h2>
            <a href="<?php echo the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>
        <div>
            <?php blogpost_meta(); ?>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php echo the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            Read more <span class="u-screen-reader-text">About <?php the_title(); ?></span>
        </a>
    <?php }
    the_posts_pagination();
 } else { ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php }

get_footer(); ?>