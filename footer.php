<div class="footer_form">
    <div class="container">
        <?php include 'parts/views/form/footer.php'?>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <a href="/" class="logo">
            <img src="<?php get_uri('img/logo.png') ?>" alt="logo">
            <span class="text">Трубопроводная арматура, элементы трубопровода</span>
        </a>
        <div class="cities">
            <span>Иркутск</span>
            <ul class="dn">
                <li><a href="#">Красноярск</a></li>
                <li><a href="#">Абакан</a></li>
                <li><a href="#">Чита</a></li>
                <li><a href="#">Питер</a></li>
            </ul>
        </div>
        <div class="contacts">
            <div class="phone item">
                <svg class="icon" viewBox="0 0 384 384">
                    <use xlink:href="#icon--phone"></use>
                </svg>
                <a href="tel:88212725560">8-821-27-25-560</a>
            </div>
            <div class="place item">
                <svg class="icon" viewBox="0 0 512 512">
                    <use xlink:href="#icon--location"></use>
                </svg>
                <span>г. Сыктывкар, ул. Промышленная 3-я, 62</span>
            </div>
        </div>
        <div class="feedback">
            <div class="email">
                <svg class="icon" viewBox="0 0 512 512">
                    <use xlink:href="#icon--mail"></use>
                </svg>
                <a href="mailto:info@promelement.info">info@promelement.info</a>
            </div>
            <div class="callback open-modal--callback">
                <div class="button">Заказать звонок</div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="nav nav_footer">
			<?php wp_nav_menu(array('theme_location' => 'Main')); ?>
        </nav>
    </div>
</footer>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/map.js"></script>
<?php wp_footer(); ?>
</body>
</html>