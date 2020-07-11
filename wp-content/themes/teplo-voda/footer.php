<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package teplo-voda
 */

?>


	<footer id="footer" class="site-footer">
        <div class="footer_container">

            <div class="footer_nav">
                <div class="footer_nav__title">Цікаве:</div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'menu_id' => 'footer_menu',
                ));
                ?>
            </div>
            <div class="footer_center">
                <div class="footer_pluses">
                    <div class="footer_pluses__item">
                        <div class="footer_pluses__img">
                            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#F0861A;}
</style>
                                <g>
                                    <path class="st0" d="M5,32.3c0-6.2,0-12.5,0-18.7c0-0.1,0.1-0.2,0.1-0.3c0.4-1.6,1.5-2.8,3.1-3.3C8.4,9.9,8.7,9.8,9,9.7
		c8.3,0,16.5,0,24.8,0c0,0,0.1,0.1,0.1,0.1c2.6,0.7,3.9,2.3,3.9,5c0,0.9,0,1.8,0,2.8c0.2,0,0.4,0,0.6,0c1.9,0,3.8,0,5.7,0
		c1.6,0,2.9,0.7,3.9,2c2.1,3.1,4.2,6.3,6.3,9.5c0.5,0.8,0.8,1.6,0.8,2.5c0,3.2,0,6.3,0,9.5c0,2.2-1.6,4.1-3.7,4.5
		c-0.7,0.1-1.5,0.1-2.3,0.1c-0.3,0-0.5,0.1-0.6,0.4c-0.8,2.5-3.2,4.3-5.8,4.3c-2.7,0-5.1-1.6-6-4.2c-0.1-0.3-0.3-0.4-0.6-0.4
		c-2.4,0-4.8,0-7.3,0c-0.4,0-0.5,0.1-0.7,0.5c-1,2.9-3.9,4.7-6.9,4.1c-2.4-0.4-4-1.9-4.9-4.2c-0.1-0.3-0.2-0.4-0.5-0.4
		c-0.5,0-1,0-1.5,0c-2.2,0-4.1-1.6-4.5-3.7c-0.1-0.4-0.1-0.8-0.1-1.2c0-1.5,0-2.9,0-4.4c-0.1,0-0.2,0-0.2,0
		c-2.1-0.1-3.8-1.5-4.3-3.5C5.1,32.6,5,32.5,5,32.3z M21.4,33.1c3.8,0,7.7,0,11.5,0c1.2,0,1.8-0.6,1.8-1.8c0-5.6,0-11.1,0-16.7
		c0-1.2-0.6-1.8-1.8-1.8c-7.6,0-15.3,0-22.9,0c-1.2,0-1.8,0.6-1.8,1.8c0,5.5,0,11.1,0,16.6c0,1.2,0.6,1.8,1.9,1.8
		C13.8,33.1,17.6,33.1,21.4,33.1z M37.8,20.6c0,0.2,0,0.4,0,0.6c0,3.4,0,6.8,0,10.2c0,2.8-2,4.8-4.8,4.8c-6.5,0-13.1,0-19.6,0
		c-0.2,0-0.4,0-0.6,0c0,1.6,0,3.2,0,4.8c0,0.8,0.7,1.4,1.6,1.5c0.4,0,0.8,0,1.2,0c0.4,0,0.6-0.1,0.7-0.5c0.9-2.6,3.2-4.2,5.9-4.2
		c2.7,0,5,1.7,5.9,4.3c0.1,0.3,0.2,0.4,0.6,0.4c2.4,0,4.8,0,7.2,0c0.4,0,0.6-0.1,0.8-0.5c0.8-2.3,3-4,5.3-4.2c2.7-0.1,4.7,1,6.1,3.4
		c0.2,0.4,0.3,1,0.7,1.2c0.4,0.2,1,0.1,1.5,0c1,0,1.6-0.7,1.6-1.7c0-3.1,0-6.1,0-9.2c0-0.3-0.1-0.7-0.3-1c-2.1-3.1-4.2-6.3-6.2-9.4
		c-0.3-0.4-0.7-0.7-1.2-0.7C42.1,20.6,40,20.6,37.8,20.6z M25.3,44.1c0-1.7-1.4-3.1-3.1-3.1c-1.7,0-3.1,1.4-3.1,3.1
		c0,1.7,1.4,3.2,3.1,3.2C23.9,47.2,25.3,45.8,25.3,44.1z M42.5,47.2c1.7,0,3.1-1.4,3.1-3.1c0-1.7-1.4-3.1-3.1-3.1
		c-1.7,0-3.1,1.4-3.1,3.1C39.4,45.8,40.8,47.2,42.5,47.2z"/>
                                    <path class="st0" d="M39.4,28.4c0-1.5,0-3,0-4.5c0-1.1,0.6-1.7,1.7-1.7c0.5,0,0.9,0,1.4,0c0.6,0,1,0.2,1.4,0.7
		c1.6,2.3,3.1,4.7,4.7,7c0.4,0.5,0.4,3.4,0.1,4c-0.3,0.5-0.7,0.8-1.3,0.8c-2.1,0-4.2,0-6.3,0c-0.9,0-1.5-0.7-1.5-1.6
		C39.4,31.5,39.4,30,39.4,28.4z M47.2,33.1c0-0.7,0-1.5,0-2.2c0-0.1-0.1-0.3-0.2-0.4c-1.4-2.2-2.9-4.4-4.3-6.5
		c-0.1-0.1-0.2-0.3-0.4-0.3c-0.4,0-0.9,0-1.3,0c0,3.2,0,6.2,0,9.4C43,33.1,45.1,33.1,47.2,33.1z"/>
                                </g>
</svg>

                        </div>
                        <div class="footer_pluses__description">
                            <div class="footer_pluses__title">
                                Швидка та безкоштовна доставка
                            </div>
                            <div class="footer_pluses__desk">
                                Відправлення в день замовлення, Безкоштовна доставка при замовленні від 3000 грн..
                            </div>
                        </div>
                    </div>
                    <div class="footer_pluses__item">
                        <div class="footer_pluses__img">
                            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#F0861A;}
</style>
                                <g>
                                    <path class="st0" d="M16.1,55c-2.6-0.9-3.6-2.7-3.5-5.4c0.1-6.5,0-13,0-19.4c0-3.6,0.8-4.7,4.4-5.7c0-2.1,0-4.2,0-6.3
		c0-6.9,4.9-12.4,12-13.1c6.3-0.6,12.3,3.5,13.8,10c0.2,1,0.3,2.1,0.3,3.2c0.1,2.1,0,4.1,0,6.2c0.3,0.1,0.6,0.1,0.8,0.2
		c2.2,0.5,3.5,2,3.5,4.3c0,7.2,0,14.4,0,21.5c0,2.4-1.4,3.7-3.5,4.4C34.7,55,25.4,55,16.1,55z M43.1,29c-8.8,0-17.4,0-26.1,0
		c0,7.2,0,14.4,0,21.6c8.7,0,17.4,0,26.1,0C43.1,43.4,43.1,36.2,43.1,29z M38.8,24.5c0-2.3,0.1-4.5,0-6.7c-0.2-4.4-3.5-7.9-7.7-8.4
		c-4.4-0.5-8.6,2.2-9.4,6.5c-0.6,2.8-0.4,5.7-0.5,8.6C27.1,24.5,32.9,24.5,38.8,24.5z"/>
                                    <path class="st0" d="M34.4,37.8c-0.1,1.1-0.5,2.2-1.5,3c-0.5,0.4-0.7,0.9-0.7,1.5c0,0.7,0,1.3,0,2c-0.1,1.1-1,1.9-2.1,2
		c-1.1,0-2.1-0.8-2.2-2c0-0.3,0-0.6,0-0.9c0.1-1.2-0.1-2.2-1.1-3.1c-1.4-1.3-1.4-3.5-0.4-5.1c1.1-1.6,3.1-2.4,5-1.8
		C33.1,34,34.4,35.8,34.4,37.8z"/>
                                </g>
</svg>

                        </div>
                        <div class="footer_pluses__description">
                            <div class="footer_pluses__title">
                                Безпечний та зручний спосіб оплати
                            </div>
                            <div class="footer_pluses__desk">
                                Оплата наложеним платежем. Оплата на картку. Безготівковий спосіб оплати.
                            </div>
                        </div>
                    </div>
                    <div class="footer_pluses__item">
                        <div class="footer_pluses__img">
                            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#F0861A;}
</style>
                                <g>
                                    <path class="st0" d="M38,5c3,0.7,4.4,2.7,5.1,5.6c1,4.5,2.2,9,3.3,13.6c-0.5,0-0.9,0-1.3,0c-7.5,0-15,0-22.5,0
		c-6,0-10.1,4.1-10.1,10.1c0,1,0,1.9,0,3c-1.8-0.8-2.9-2-3.4-3.7c-1.3-5.1-2.6-10.3-3.8-15.4c-0.7-3.1,1.3-6,4.5-6.8
		c8.6-2.1,17.3-4.2,25.9-6.3c0.2,0,0.3-0.1,0.5-0.2C36.8,5,37.4,5,38,5z M34.3,21.4c2.2-0.5,4.3-1,6.5-1.6c-0.5-2.2-1-4.4-1.6-6.6
		c-2.2,0.6-4.4,1.1-6.6,1.6C33.3,17.1,33.8,19.2,34.3,21.4z"/>
                                    <path class="st0" d="M35.6,55c-4.3,0-8.6,0-12.9,0c-4,0-6.3-2.3-6.3-6.3c0-4.8,0-9.6,0-14.3c0-3.9,2.4-6.3,6.3-6.3
		c8.7,0,17.3,0,26,0c3.9,0,6.2,2.3,6.2,6.3c0,4.8,0,9.6,0,14.4c0,3.9-2.3,6.2-6.2,6.2C44.3,55,39.9,55,35.6,55z M19.4,41.6
		c0,2.6,0,5,0,7.4c0,1.9,1.1,2.9,3,2.9c3.8,0,7.6,0,11.4,0c5,0,10.1,0,15.1,0c1.5,0,2.8-0.9,2.8-2.2c0.1-2.7,0-5.4,0-8.1
		C41,41.6,30.3,41.6,19.4,41.6z M51.8,35.8c0-0.4,0-0.7,0-0.9c0.3-2.6-1.1-3.8-3.7-3.7c-5,0.1-9.9,0-14.9,0c-3.6,0-7.3,0-10.9,0
		c-1.3,0-2.4,0.7-2.7,1.8c-0.2,0.9-0.1,1.8-0.2,2.8C30.3,35.8,41,35.8,51.8,35.8z"/>
                                </g>
</svg>
                        </div>
                        <div class="footer_pluses__description">
                            <div class="footer_pluses__title">
                                100% Гарантія повернення коштів
                            </div>
                            <div class="footer_pluses__desk">
                                Ми гарантуємо 100% повернення коштів на протязі 14днів з моменту покупки.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_right">
                <div class="footer_right__title">Наші контакти:</div>
                <span><img src="<?php echo get_template_directory_uri() ?>/img/kyivstar.svg"> +38 (097) 881 81 44</span>
                <span><img src="<?php echo get_template_directory_uri() ?>/img/life.svg"> +38 (093) 052 01 14</span>
                <span><img src="<?php echo get_template_directory_uri() ?>/img/MTS.svg"> +38 (066) 359 87 05</span>
                <span><img src="<?php echo get_template_directory_uri() ?>/img/e-mail.svg"> manager@teplo-voda.com.ua</span>
                <div class="footer_right__title">Слідкуйте за нами:</div>
                <div class="socials">
                    <a href="https://www.facebook.com/%D0%A2%D0%B5%D0%BF%D0%BB%D0%BE-%D0%92%D0%BE%D0%B4%D0%B0-100382768073232/"><img src="<?php echo get_template_directory_uri() ?>/img/footer_face_wh.svg" alt="Facebook"></a>
                    <a href=""><img src="<?php echo get_template_directory_uri() ?>/img/footer_insta_wh.svg" alt="Instagram"></a>
                    <a href=""><img src="<?php echo get_template_directory_uri() ?>/img/footer_youtube_wh.svg" alt="Youtube"></a>
                </div>
            </div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
