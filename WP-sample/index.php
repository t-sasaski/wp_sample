<?php get_header(); ?>
    <div class="main">
        <div class="filter">
            <h1>Code Ship</h1>
        </div>
    </div>
    <section>
        <h2 class="sub-ttl">NEWS</h2>
        <ul class="news">
            <?php 
                $args = array(
                    "post_type" => "news", //取得する投稿タイプ
                    "posts_per_page" => 5, // 取得する数を5つにする
                    "order" => "desc", // 降順で取得する
                    "orderby" => "post_date" //どのパラメータで並べ替えるのかを指定する
                );
                $news_query = new WP_Query($args); // WP_QUeryオブジェクトを生成
            ?>
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <li class="news__item">
                <span class="day"><?php echo get_the_date(); ?></span>
                <h3 class="news__ttl">
                    <a href="#" class="news__link"><?php the_title(); ?></a>
                </h3>
            </li>
            <?php endwhile; ?>
        </ul>
    </section>
    <section>
        <h2 class="sub-ttl">POINT</h2>
        <div class="point">
            <div class="point__contents">
                <img 
                    src="<?php echo get_template_directory_uri() ?>/img/coding.png"
                    alt="コーディング"
                    class="poinst__img"
                />
                <div class="point__text-box">
                    <h3 class="point__ttl">イマドキな技術を体系的に学習</h3>
                    <p class="point__text">モダンな言語やフレームワークに触れるこ
                        とで即戦力となる技術を実際にサービスを
                        作りながら身につけることが可能です。</p>
                </div>
            </div>
            <div class="point__contents">
                <img 
                    src="<?php echo get_template_directory_uri() ?>/img/video_call.png"
                    alt="オンライン"
                    class="poinst__img"
                />
                <div class="point__text-box">
                    <h3 class="point__ttl">オンライン通学</h3>
                    <p class="point__text">池袋教室での通学型受講とビデオ通話とチャットを利用したオンライン受講から選ぶことが可能です。</p>
                </div>
            </div>
            <div class="point__contents">
                <img
                    src="<?php echo get_template_directory_uri() ?>/img/digital_content.png"
                    alt="コーディング"
                    class="poinst__img"
                />
                <div class="point__text-box">
                    <h3 class="point__ttl">親身なキャリアサポート</h3>
                    <p class="point__text">専属のキャリアカウンセラーとのキャリア面談は希望に応じて何度でも受けることができます。</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 class="sub-ttl">COURSE</h2>
        <div class="post">
                <?php 
                    $args = array(
                        "post_type" => "course", //　取得する投稿タイプ
                        "posts_per_page" => 3, //取得するタイプ
                        "order" => "desc", //降順で取得
                        "orderby" => "post_date" 
                    );
                    $course_query = new WP_Query($args); //WP_Queryオブジェクトを生成
                ?>
                <?php while ($course_query->have_posts()) : $course_query->the_post(); ?>
            <div class="post__item">
                <?php
                    //サムネイル画像があるかどうかを判断
                    if (get_the_post_thumbnail_url()) {
                        echo '<img src="' . esc_url(get_the_post_thumbnail_url()) . '" class="post__img"/>';
                    } else { // サムネイル画像がなければデフォルトの画像を出す
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" class="post__img" />';
                    }
                ?>
                <a href="<?php the_permalink() ?>" class="course__link">
                <h3><?php the_title(); ?></h3>
                <!-- タイトルを表示 -->
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="link-wrapper">
            <a href="<?php echo esc_url(home_url('/course')); ?>" class="more--font">もっと見る</a>
        </div>
    </section>
    <section class="blog">
        <h2 class="sub-ttl">BLOG</h2>
        <div class="post">
            <?php
                $args = array(
                    "post_type" => "post", // 取得する投稿タイプをpostにする
                    "order" => "desc", // 降順で取得する
                    "orderby" => "post_date" // どのパラメータで並べ替えるのかを指定する
                );
                $post_query = new WP_Query($args); // WP_Queryオブジェクトを生成
            ?>

            <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
            
            <div class="post__item">
                <a href="<?php the_permalink() ?>" >
                    <?php
                        //サムネイル画像があるかどうかを判断
                        if (get_the_post_thumbnail_url()) {
                            echo '<img src="' . esc_url(get_the_post_thumbnail_url()) . '" class="post__img" />';
                        } else {    //サムネイル画像がなければデフォルトの画像を出す
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" class="post__img" />';
                        }
                    ?>
                </a>
                <a href="<?php the_permalink() ?>" class="post__link" >
                    <h3><?php the_title(); ?></h3>
                    <!-- タイトルを表示 -->
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="link-wrapper">
            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="more--white">もっと見る</a>
        </div>
    </section>
<?php get_footer(); ?>