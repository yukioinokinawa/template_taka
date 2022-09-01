<?php get_header(); ?>

<!--Header-->


<div class="p-archivetop">
    <div class="p-archivetop__wrapper">
        <div class="p-archivetop__shade"></div>
        <p> Serch: <br>
            <small><?php the_search_query(); ?></small>
        </p>
    </div>
</div>
<!--Tophead-->


<div class="l-main">
    <div class="p-archive__wrapper">
        <article class="p-archive">
            <p>こちらのページはただいま表示できません</p>
        </article>
    </div>

    <?php wp_pagenavi(); ?>

</div>
</div>
<!--Main-->

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>