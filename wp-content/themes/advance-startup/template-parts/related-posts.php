<?php $related_posts = advance_startup_related_posts();
if(get_theme_mod('advance_startup_show_related_post',true)==1){ ?>
<?php if ( $related_posts->have_posts() ): ?>
    <div class="related-posts">
        <?php if ( get_theme_mod('advance_startup_related_post_title','Related Posts') != '' ) {?>
            <h3 class="my-3"><?php echo esc_html( get_theme_mod('advance_startup_related_post_title',__('Related Posts','advance-startup')) ); ?></h3>
        <?php }?>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-box mb-3">
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4 class="text-center"><?php the_title(); ?></h4>
                        <div class="entry-content"><p class="text-center"><?php $excerpt = get_the_excerpt(); echo esc_html( advance_startup_string_limit_words( $excerpt, esc_attr(get_theme_mod('advance_startup_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('advance_startup_post_suffix_option','...') ); ?></p></div>
                        <?php if( get_theme_mod('advance_startup_button_text','READ MORE') != ''){ ?>
                            <div class="read-more-btn text-center">
                                <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('advance_startup_button_text','READ MORE'));?><i class="fas fa-angle-right ms-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_startup_button_text','READ MORE'));?></span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>