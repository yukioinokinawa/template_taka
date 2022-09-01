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

            <?php if (have_posts()) : ?>
                <h1 class="page-title"><?php printf(__('検索結果%s', 'wiingsearch'), '<span>『' . esc_html(get_search_query()) . '』</span>'); ?></h1>
                <?php if (function_exists('wp_pagenavi')) {
                    // wp_pagenavi();//ページナビを使う場合
                } ?>
                <?php while (have_posts()) : the_post(); // ループ開始. 
                ?>
                    <article id="post-<?php the_ID(); ?>">
                        <section>
                            <?php the_title(sprintf('<h2 class="ent-tit"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                        </section>
                    </article>
                <?php endwhile; // ループエンド. 
                ?>
            <?php else :
                echo '<h2 class="page-title">検索結果：一致するページは見つかりませんでした。</h2>';
                get_template_part('content', 'none'); // 結果がない場合にcontent_none.phpを表示させる場合.
            endif; ?>

            <?php get_template_part('component/archive'); ?>
        </article>
    </div>

    <?php wp_pagenavi(); ?>

</div>
</div>
<!--Main-->

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>