<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php bloginfo('name');?>
        <?php wp_title();?>
    </title>
    <link rel="Shortcut Icon" href="<?php bloginfo('template_url');?>/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url');?>/apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url');?>/js/vendor/html5.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/vendor/respond.js"></script>
    <![endif]-->

    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div class="row">
        <header class="col s12">
            <h1>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php bloginfo('name');?>
                </a>
            </h1>
        </header>

        <nav id="gnb" class="col s12">
            <?php
wp_nav_menu(array(
    'theme_location' => 'main_menu',
    'depth' => 1,
    'fallback_cb' => false,
    'menu_id' => '',
    'menu_class' => '',
));
?>
<?php get_search_form();?>
        </nav>

        <aside class="col s12 m3">
            <?php get_sidebar();?>
        </aside>

        <article class="col s12 m9">
            <?php
if (is_single()):
    get_template_part('is_single');
elseif (is_page()):
    get_template_part('is_page');
elseif (is_category()):
    get_template_part('is_category');
elseif (is_tag()):
    get_template_part('is_tag');
elseif (is_404()):
    get_template_part('is_404');
else:
    get_template_part('is_default');
endif;

get_template_part('is_pagenation');
?>
        </article>

        <footer class="col s12">
            <p>
                Copyright ©
                <?php bloginfo('name');?> All Rights Reserved.
            </p>
        </footer>
    </div>
    <?php wp_footer();?>
    <script src="<?php bloginfo('template_url');?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/convert_materialize.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/basic.js"></script>
</body>

</html>