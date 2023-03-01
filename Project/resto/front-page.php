<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package resto
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <section id="boxes">
        <div class="container">
            <div class="box">
                <h2><?php the_field('thred_boxes_selected_title_the_left_one'); ?></h2>
                <img src="<?php the_field('thred_boxes_selected_image_the_left_one'); ?>" alt="">
            </div>
            <div class="box">
                <h2><?php the_field('thred_boxes_selected_title_the_center_one'); ?></h2>
                <img src="<?php the_field('thred_boxes_selected_image_the_center_one'); ?>" alt="">
            </div>
            <div class="box">
                <h2><?php the_field('thred_boxes_selected_title_the_right_one'); ?></h2>
                <img src="<?php the_field('thred_boxes_selected_image_the_right_one'); ?>" alt="">
            </div>
        </div>
    </section>
        <p class="text-box">
            <?php the_field('text_under_the_selected_boxes'); ?> 
        </p>
    <section >
        <div class="profit">
            <img src="<?php the_field('image_why_chose_us'); ?>">
        </div>

        <div class="submit">
            <div class="content">
                <img style="margin-top: 10vh;" src="<?php the_field('background_black_white_logo'); ?>" >
                <h1><?php the_field('black_background_title'); ?></h1>
                <p><?php the_field('black_background_paragraph'); ?></p>
                <form class="myForm">
                    <div class="inputs-area">
                        <select>
                            <option value="0">בחר תחום יעוץ</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="inputs-area">
                        <input type="number" class="icon-phone" placeholder="טלפון">
                        <input type="text" class="icon-user " placeholder="שם מלא">
                    </div>
                </form>
            
                <form class="myForm">
                    <div class="inputs-area">
                        <button>כן אני מעוניין בייעוץ עכשיו</button>
                    </div>
                    <div class="inputs-area">
                        <input type="email" class="icon-mail" placeholder="מייל">
                    </div>
                </form>
                
            </div>
        </div>
    </section>

    <section class="info_image">
        <div class="myInfo">
            <div class="myInfoText">
                <h1><?php the_field('info_area_title'); ?></h1>
                <p>
                    <?php the_field('info_area_paragraph'); ?>
                </p>
            </div>
            
            <div class="leftImageFb">
                <img src="<?php the_field('my_info_image'); ?>">
            </div>
        </div>

        <!-- I didn't have the option to do it through the ACF because I needed the Pro, but if there was an option then 
        I would add a repeater. That would be more convenient for the customer -->
        <div style="margin-top: 5%;">
            <h1><?php the_field('customer_title_area'); ?></h1>
            <div class="swiper mySwiper customers">
                <div class="swiper-wrapper content">
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <h3>שם הממליץ</h3>
                            <div class="textBox">
                                <p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף לורם איפסום דולור סיט אמט, סחטיר בלובק. תצטנפל בלינדו למרקל אס</p>
                            </div>
                            <div class="small-heart">
                                <img src="<?php echo (get_template_directory_uri());?>./images/small_heart.png" alt="">
                            </div>
                        </div>
                    </div>
    
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <h3>שם הממליץ</h3>
                            <div class="textBox">
                                <p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף לורם איפסום דולור סיט אמט, סחטיר בלובק. תצטנפל בלינדו למרקל אס</p>
                            </div>
                            <div class="small-heart">
                                <img src="<?php echo (get_template_directory_uri());?>./images/small_heart.png" alt="">
                            </div>
                        </div>
                    </div>
    
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <h3>שם הממליץ</h3>
                            <div class="textBox">
                                <p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף לורם איפסום דולור סיט אמט, סחטיר בלובק. תצטנפל בלינדו למרקל אס</p>
                            </div>
                            <div class="small-heart">
                                <img src="<?php echo (get_template_directory_uri());?>./images/small_heart.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>


    <a href="#top" class="gotopbtn"><img src="<?php the_field('back_to_top_button_image'); ?>"></a>


    <section class="submitFooter">
        <img src="<?php the_field('submit_footer_image_on_the_left'); ?>">
        
        

        <div class="rightSide">
            <p><?php the_field('submit_footer_area_title'); ?></p>
  
            <input type="text" class="icon-user" placeholder=":שם מלא">

            <input type="text" class="icon-phone" placeholder=":טלפון">

            <input type="text" class="icon-mail" placeholder=":מייל">

            <div class="btnSub">
                <button>כן מעוניין בייעוץראשוני</button>
            </div>

        </div>
        
    </section>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var w = screen.width;
    if(w > 601){
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    } else {
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 1,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    }
  
</script>
            
        </main><!-- #main -->
    </div>

<?php get_footer();
