<?php get_header(); ?>

    <section class="carousel carousel--single">
            <div class="slide" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
                <div class="slide__wrapper">
                    <div class="slide__wrapper--lg">    
                        <div class="slide__title"><?php echo the_title(); ?></div>
                        <div class="caption--slide caption">
                            <span class="caption__read-time">
                                <?php echo get_field('read_time');?> минут
                            </span>
                            <span class="caption__date"><?php echo get_the_date('d.m.Y'); ?></span>
                        </div>]
                    </div>
                </div>
            </div>
    </section>

    <div class="single-post">
        
        <?php if( have_rows('author') ): 

            while( have_rows('author') ): the_row(); 
                
                // vars
                $image = get_sub_field('author__photo');
                
                
                ?>
                <div class="single-post__author">
                    <div class="single-post__author__photo">
                        <img src="<?php echo $image; ?>">
                    </div>
                    <div class="single-post__author__caption">
                        <div class="single-post__author__name"><?php echo get_sub_field('author__name'); ?></div>
                        <div class="single-post__author__prof"><?php echo get_sub_field('author__prof'); ?></div>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php endif; ?>

        <div class="single-post__excerpt"><?php echo the_excerpt(); ?></div>

        <div class="single-post__content">

            <?php

                // check if the flexible content field has rows of data
                if( have_rows('flex_content') ):

                    // loop through the rows of data
                    while ( have_rows('flex_content') ) : the_row();

                        if( get_row_layout() == 'content__text' ):

                            echo '<div class="single-post__content__text"

                                ' . get_sub_field('content__text__body') . '

                            </div>';

                        elseif( get_row_layout() == 'content__separator' ): 

                            if( get_sub_field('content__separator__body') ) {
                                echo '<div class="single-post__content__separator"></div>';
                            };

                        elseif( get_row_layout() == 'content__accent__blue' ): 

                            if( get_sub_field('content__accent__body') ) {
                                echo '<div class="single-post__content__accent single-post__content__accent--blue"> ' . get_sub_field('content__accent__body') . ' </div>';
                            };

                        elseif( get_row_layout() == 'content__accent' ): 

                            if( get_sub_field('content__accent__body') ) {
                                echo '<div class="single-post__content__accent"> ' . get_sub_field('content__accent__body') . ' </div>';
                            };

                        elseif( get_row_layout() == 'content__quote' ): 

                            if( get_sub_field('content__quote__body') ) {
                                echo '
                                
                                <div class="single-post__content__quote">
                                    <div class="single-post__content__quote__photo">
                                        <img src="' . get_sub_field('content__quote__photo') . '">
                                    </div>
                                    <div class="single-post__content__quote__text"> ' . get_sub_field('content__quote__body') . ' </div> 
                                    <div class="single-post__content__quote__caption">
                                        <div class="single-post__content__quote__name">' . get_sub_field('content__quote__name') . '</div>
                                        <div class="single-post__content__quote__prof">' . get_sub_field('content__quote__prof') . '</div>
                                    </div>
                                </div>
                                    ';
                            };

                        elseif( get_row_layout() == 'content__quote__background' ): 

                            if( get_sub_field('content__quote__body') ) {
                                echo '
                                
                                <div class="single-post__content__quote single-post__content__quote--background" style="background-image: url('. get_sub_field('content__quote__background') .')">
                                    <div class="single-post__content__quote--background__wrapper">
                                        <div class="single-post__content__quote__text"> ' . get_sub_field('content__quote__body') . ' </div> 
                                        <div class="single-post__content__quote__caption">
                                            <div class="single-post__content__quote__name">' . get_sub_field('content__quote__name') . '</div>
                                            <div class="single-post__content__quote__prof">' . get_sub_field('content__quote__prof') . '</div>
                                        </div>
                                    </div>
                                </div>
                                        ';
                            };

                        endif;

                    endwhile;

                else :

                    // no layouts found

                endif;

            ?>

        </div>

        <div class="single-post__share">
            Понравилась статья? Поделитесь с друзьями или 
            <a class="link" href="">получите консультацию</a> по теме статьи. 
            Это бесплатно.
        </div>
        
        <div class="single-post__more-posts">
            <?php
            
            $not_in_next_query[] = get_the_ID();
            $count = 0;
            $sliderPosts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'post',
                'post__not_in'=> $not_in_next_query
            )); 
            while($sliderPosts->have_posts()){
                $sliderPosts->the_post(); 
                $not_in_next_query[] = get_the_ID();
                $count++;
                ?>
                <div class="post" <?php if( $count == 2 ) { ?> style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')"; <?php } ?>>
                    <div class="post__wrapper <?php if( $count == 2 ) { echo 'post__wrapper--filer'; }?>">
                        <a href="<?php echo the_permalink() ?>" class="link">
                            <h2 class="post__title"><?php echo the_title(); ?></h2>
                        </a>
                        <?php 
                            $categories = get_the_category( $post->ID );
                            if (!empty($categories)) { ?>
                                <div class="post__cats hide">
                                    <?php 
                                        foreach($categories as $category) {
                                            echo '<div class="post__cats__item">
                                                    '. $category->name .'
                                                    </div>
                                            ';
                                        };
                                    ?>
                                </div>
                        <?php }; wp_reset_query();?> 
                        <div class="post__caption caption">
                            <span class="caption__date"><?php echo get_the_date('d.m.Y'); ?></span>
                            <span class="caption__read-time">
                                <?php echo get_field('read_time');?> минут
                            </span>
                        </div>
                        <?php if( have_rows('author') ): 

                            while( have_rows('author') ): the_row(); 
                                
                                // vars
                                $image = get_sub_field('author__photo');
                                ?>
                                    <div class="single-post__author__photo post__author__photo hide">
                                        <img src="<?php echo $image; ?>">
                                    </div>
                            <?php endwhile; ?>

                        <?php endif; ?>
                        <div class="post__except"><?php echo the_excerpt(); ?></div>
                    </div>
                </div>
            <?php }; $count = 0; ?>

            <?php if (count($not_in_next_query) == 7) {
                echo do_shortcode( '[ajax_load_more id = "3218259137" post__not_in = ' . implode("," , $not_in_next_query) . ' post_type="post" button_label="Показать больше" posts_per_page="4" pause="true" scroll="false"]' );
            } ?>
            <?php $count = 0; ?> 
        </div>
    </div>

<?php get_footer(); ?>