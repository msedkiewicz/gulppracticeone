<?php


/* Functions with page / posts repeatable elements*/

function gulpwp_meta_description() {

    printf(
        esc_html__( 'Posted on %s', 'gulppracticeone' ),
        '<a href="' . esc_url(get_permalink()) .'"><time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time></a> '
        );

    printf(
        esc_html( ' By %s', 'gulppracticeone' ),
        '<a href="' . esc_url(get_author_posts_url(get_the_author_meta( 'ID' ))) . '">' . esc_html(get_the_author_meta('display_name')) . '</a>'
        );
}

function gulpwp_readmore() {
    echo '<a href="' . esc_url(get_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
    echo 'Read more <span class="u-screen-reader-text">About ' . the_title() . '</span>';
    echo '</a>';
}