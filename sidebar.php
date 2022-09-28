<div class="l-sidebar">
    <!--Nav-->
    <div class="l-nav">
        <p>Menu</p>
        <nav class="l-nav__body">
            <button class="c-menubutton">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/peke.png" alt="closeボタン">
                <!--https://takayakondo.com/images-pass-theme-directory/　参照-->
                <span></span>
            </button>
            <?php wp_nav_menu(array(
                'theme_location' => 'category_nav',
                'menu' => 'categorymenu'
            )); ?>
        </nav>
    </div>
    <!--Nav-->
</div>