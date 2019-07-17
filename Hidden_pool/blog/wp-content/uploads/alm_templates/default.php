<?php  $count++; ?>
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
                        <?php }; wp_reset_query(); ?> 
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