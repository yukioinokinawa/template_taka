<?php get_header(); ?>
<!--Header-->


<div class="p-archivetop">
    <div class="p-archivetop__wrapper">
        <div class="p-archivetop__shade"></div>
        <p> Menu: <br>
            <small><?php echo esc_html(single_term_title('', false)); ?></small>
        </p>
    </div>
</div>
<!--Tophead-->

<div class="l-main">
    <div class="p-archive__wrapper">
        <article class="p-archive">
            <article class="p-archive__intro">
                <h1><?php single_cat_title(); ?></h1>
                <p><?php echo category_description(); ?></p>
            </article>
            <?php get_template_part('./component/archive'); ?>
        </article>
    </div>

    <?php wp_pagenavi(); ?>

</div>
</div>
<!--Main-->

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>