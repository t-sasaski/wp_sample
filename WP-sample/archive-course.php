<?php
/*
Template Name: Course Archives
*/
get_header();
?>

    <div class="head">
        <h1>COURSE</h1>
    </div>

    <section>
        <div class="page-course">
            <?php
                $args = array(
                    "post_type" => "course", //取得する投稿タイプ
                    "order" => "desc", //降順で取得する
                    "orderby" => "post_date" //どのパラメータで並べ替えを指定するかを指定する
                );
                $course_query = new WP_Query($args);
            ?>

            <?php while ($course_query->have_posts()) : $course_query->the_post(); ?>
            
                <div class="page-course__item">
                    <a href="<?php the_permalink() ?>">
                        <?php 
                            //サムネイル画像があるか判断
                            if (get_the_post_thumbnail_url()) {
                                echo '<img src="' . esc_url(get_the_post_thumbnail_url()) . '" class="page-course__img" />';
                            } else {
                                echo '<img src="' . esc_url(get_template_directory_uri()) > '/img/noimg.png" class="page-course__img"/>';
                            }
                        ?>
                    </a>
                    <a href="<?php the_permalink() ?>" class="page-course__link">
                        <h3><?php the_title(); ?></h3>
                        <!-- タイトルを表示 -->
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

    <?php get_footer(); ?>