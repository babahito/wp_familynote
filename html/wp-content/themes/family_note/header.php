<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|',true,'right'); ?>
        <?php bloginfo('name') ?>
    </title>

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- フォント読み込み -->
    <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css">


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header-inner">
        <div class="site">
            <h1><a href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a></h1>
        </div>
        <button><a href="membership-registration">会員登録</a></button>
        <button><a href="membership-login">会員情報</a></button>


        <!-- トグルボタン -->
        <div class="sitenav">
            <button type="button" id="navbtn">
                MENU
            </button>
            <!-- カスタムメニュー（ナビゲーション） -->
            <?php wp_nav_menu(array(
                'theme_location'=>'sitenav',
                'container'=>'nav',
                'container_class'=>'mainmenu',
                'container_id'=>'mainmenu'
            )); ?>
        </div>
    </div>
    
</header>
    
