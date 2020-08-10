<?php
/*
Template Name: Contact
*/
get_header();
?>

<div class="head">
    <h1>CONTACT</h1>
</div>
<!-- 本文を出力 -->
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>