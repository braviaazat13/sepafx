<?php get_header(); ?>
	<section class="carousel">
		<?php
		$sliderPosts = new WP_Query([
			'posts_per_page' => 3,
			'post_type'      => 'post',
		]);
		while ($sliderPosts->have_posts()) {
			$sliderPosts->the_post();
			$not_in_next_query[] = get_the_ID(); ?>
			<div class="slide" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
				<div class="slide__wrapper">
					<div class="slide__wrapper--lg">
						<?php
						$categories = get_the_category($post->ID);
						if (!empty($categories)) { ?>
							<div class="slide__cats hide">
								<?php foreach ($categories as $category) : ?>
									<div class="slide__cats__item">
										<?php echo $category->name; ?>
									</div>
								<?php endforeach; ?>
							</div>
						<?php }; ?>
						<div class="slide__title"><?php echo the_title(); ?></div>
						<div class="caption--slide caption">
							<span class="caption__read-time">
								<?php echo get_field('read_time'); ?> минут
							</span>
							<span class="caption__date"><?php echo get_the_date('d.m.Y'); ?></span>
							<a href="<?php the_permalink(); ?>" class="caption__link link">
								<span class="caption__link__text">Читать статью</span>
								<span class="caption__link__arrow">
									<svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path id="Shape Copy 2" d="M17.8972 3.73002L13.897 0.0838241C13.7859 -0.0064469 13.6644 -0.0238151 13.5324 0.0317559C13.4005 0.0873999 13.3344 0.188033 13.3344 0.333948V2.66749H0.333353C0.236077 2.66749 0.156168 2.69869 0.0937374 2.76119C0.0313431 2.82366 0 2.90357 0 3.00077V5.00089C0 5.09806 0.0311972 5.17797 0.0937009 5.24036C0.156278 5.30283 0.236186 5.33403 0.333317 5.33403H13.3344V7.66753C13.3344 7.80663 13.4007 7.90726 13.5325 7.96958C13.6646 8.02537 13.7861 8.00428 13.8972 7.90726L17.8975 4.21918C17.9669 4.14978 18.0015 4.06658 18.0015 3.96927C18.0015 3.87922 17.9667 3.79946 17.8972 3.73002Z" fill="white"/>
									</svg>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		<?php }; ?>
	</section>
	<div class="dots__info hide">
		<?php
		$sliderPosts2 = new WP_Query([
			'posts_per_page' => 3,
			'post_type'      => 'post',
		]);
		while ($sliderPosts2->have_posts()) {
			$sliderPosts2->the_post(); ?>
			<div class="dots__info__item">
				<div class="dots__info__item__title"><?php echo the_title(); ?></div>
				<div class="dots__info__item__caption caption">
					<span class="caption__date">
						<?php
						if (have_rows('author')):

							while (have_rows('author')) : the_row();

								echo get_sub_field('author__name');

							endwhile;

						endif;
						?>
					</span>
					<span class="caption__read-time">
						<?php echo get_the_date('d.m.Y'); ?>
					</span>
				</div>
			</div>
		<?php }; ?>
	</div>
	<section class="main-content">
		<?php

		$count = 0;
		$sliderPosts = new WP_Query([
			'posts_per_page' => 4,
			'post_type'      => 'post',
			'post__not_in'   => $not_in_next_query,
		]);
		while ($sliderPosts->have_posts()) {
			$sliderPosts->the_post();
			$not_in_next_query[] = get_the_ID();
			$count++;
			?>
			<div class="post" <?php if ($count == 2) { ?> style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')"; <?php } ?>>
				<div class="post__wrapper <?php if ($count == 2) {
					echo 'post__wrapper--filer';
				} ?>">
					<a href="<?php echo the_permalink() ?>" class="link">
						<h2 class="post__title"><?php echo the_title(); ?></h2>
					</a>
					<?php
					$categories = get_the_category($post->ID);
					if (!empty($categories)) { ?>
						<div class="post__cats hide">
							<?php
							foreach ($categories as $category) {
								echo '<div class="post__cats__item">
                                                    ' . $category->name . '
                                                    </div>
                                            ';
							};
							?>
						</div>
					<?php };
					wp_reset_query(); ?>
					<div class="post__caption caption">
						<span class="caption__date"><?php echo get_the_date('d.m.Y'); ?></span>
						<span class="caption__read-time">
							<?php echo get_field('read_time'); ?> минут
						</span>
					</div>
					<?php if (have_rows('author')):

						while (have_rows('author')): the_row();

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
		<?php };
		$count = 0; ?>
		<?php if (count($not_in_next_query) > 6) {
			echo do_shortcode('[ajax_load_more id = "3218259137" post__not_in = ' . implode(",", $not_in_next_query) . ' post_type="post" button_label="Показать больше" posts_per_page="4" pause="true" scroll="false"]');
		} ?>
		<?php $count = 0; ?>
	</section>

<?php get_footer(); ?>