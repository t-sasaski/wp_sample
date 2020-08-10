<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>
    </title>
    <link 
        rel="stylesheet" 
        href="<?php echo get_template_directory_uri() ?>/css/style.css"
    />
    <link
        href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        rel="stylesheet"
    />
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <h1 class="logo">Code Ship</h1>
        <?php 
            wp_nav_menu( array(
                'theme_location' => 'header-navigation',
                // 'menu_id' => 'my_header_menu', //デフォルトのmenu-{メニュー名}を変更
                'menu_class' => 'menu',
                'container' => 'nav', //コンテナのデフォルト<div> を<nav>に変更
                'container_id' => 'my_footer_container' //コンテナのIDを指定
                
            ));
        ?>
    </header>
</body>
</html>
 