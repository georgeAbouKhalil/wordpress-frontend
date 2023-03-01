<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php the_field('page_title') ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- ================ Google fonnts ================== -->
	<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- ================ CSS FILES ================== -->
    <link rel="stylesheet" href="style.css">
    <!-- ================ fontawesome ================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f97ce0bc87.js" crossorigin="anonymous"></script>
    <!-- ================ Link Swiper ================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'resto' ); ?></a>

	<header>

    <section id="showcase">
        <img src="<?php the_field('home_page_header_background'); ?>" >
        <p class="oursNumber"><?php the_field('ours_number'); ?></p>
        <div class="showcaseRightSide">
            <img src="<?php the_field('home_page_header_logo'); ?>">
            <h1><?php the_field('home_page_header_text'); ?></h1>
            <p> <?php the_field('home_page_header_description'); ?> 
            </p>
            <form >
                <input type="text" class="icon-phone" placeholder=":טלפון">
                <input type="text" class="icon-user" placeholder=":שם מלא">
            </form>
            <button>כן אני צריך ייעוץ עכשיו</button>
        </div>
    </section>

    <div class="inputs">
        <h3><?php the_field('home_page_header_contact_title'); ?></h3>
        <p><?php the_field('home_page_header_contact_paragraph'); ?></p>
        <input type="text" class="icon-user" placeholder=":שם מלא">
        <input type="number" class="icon-phone" placeholder=":טלפון">
        <select>
            <option value="0">:בחר שירות</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <button>כן אני צריך יעוץ עכשיו</button>
    </div>

	</header><!-- #masthead -->
