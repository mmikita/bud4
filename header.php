<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <div id="wrapper">
        <div id="container">
        <?php get_theme_mod('content_width') ?>  hahahahahahah
            <header>
                <div class="center">
                    <div class="navigationContainer">
                        <div class="logo">
                            <div class="inner">
                                <a href="#">
                                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('logo_src'))?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="menu"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </header>
        </div>
    </div>
</body>