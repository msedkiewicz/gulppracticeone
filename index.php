<?php get_header();

if(have_posts()) {
    while(have_posts()) {
        the_post(); ?>
        <h2>
            <a href="<?php echo the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>
        <div>
            Posted on:
            <a href="<?php echo get_permalink(); ?>">
                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('l, F j, Y'); ?></time>
            </a>
        </div>
    <?php }
 } else { ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php }

get_footer(); ?>