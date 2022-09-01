<div class="l-sidebar">
    <!--Nav-->
    <div class="l-nav">
        <p>Menu</p>
        <nav class="l-nav__body">
            <button class="c-menubutton">
                <img src="<?php bloginfo('template_directory') ?>/images/peke.png" alt="closeボタン">
                <!--https://takayakondo.com/images-pass-theme-directory/　参照-->
                <span></span>
            </button>
            <?php wp_nav_menu(array('menu' => 'categorymenu')); ?>
        </nav>
    </div>
    <!--Nav-->
</div>