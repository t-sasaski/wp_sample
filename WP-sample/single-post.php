<?php get_header(); ?>

    <div class="head">
        <h1>BLOG</h1>
    </div>
    <div class="single">
        <?php if (have_posts()) : the_post(); ?>
        <h1 class="single__ttl"><?php the_title(); ?></h1>
        <div class="single__tags">
            <p>
                <i class="fas fa-table"></i>
                <?php the_date() ?>
            </p>
        </div>
        <div class="single__content">
            <?php the_content(); ?>
        </div>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>