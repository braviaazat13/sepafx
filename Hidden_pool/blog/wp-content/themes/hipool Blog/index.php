<?php get_header(); 
while(have_posts()) {
    the_post(); ?>
<div class="container">
    <section class="condition" style="margin-bottom: 30px;">
    </section>
</div>
<?php }; ?>
<?php get_footer(); ?>