<?php
/*
Template Name: Blog Archives
*/
get_header();
?>

    <div class="head">
        <h1>BLOG</h1>
    </div>
    <section>
        <div class="page-blog">
            <?php
                $args = array(
                    "post_type" => "post", // 取得する投稿タイプをpostにする
                    "order" => "desc", // 降順で取得する
                    "orderby" => "post_date" // どのパラメータで並べ替えるのかを指定する
                );
                $post_query = new WP_Query($args); // WP_Queryオブジェクトを生成
            ?>
            
            <?php
                while ($post_query->have_posts()) : $post_query->the_post(); 
                // have_posts : 取得したデータがなくなるまで繰り返す
                // the_post() では、複数の記事データのうち、最初の1件を取得してデータの一覧からその1件を削除
                // 最終的にデータが無くなり、have_postsの判定が満たされなくなりループが終了する
            ?>
            
            <div class="page-blog__item">
                <a href="<?php the_permalink() ?>">
                    <?php 
                        //サムネイル画像があるかどうかを判断
                        if (get_the_post_thumbnail_url()) {
                            echo '<img src="' . esc_url(get_the_post_thumbnail_url()) . '" class="page-blog__img" />';
                        } else {    //サムネイル画像がなければデフォルトの画像を出す
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" class="page-blog__img" />';
                        }
                    ?>
                </a>
                <a href="<?php the_permalink() ?>" class="page-blog__link">
                    <h3><?php the_title(); ?></h3>
                    <!-- タイトルを表示 -->
                </a>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

<?php get_footer(); ?>