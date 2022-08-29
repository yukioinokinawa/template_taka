            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>

                    <article class="c-card">
                        <div class="c-card__wrapper">
                            <div class="c-card__imgbox">
                                <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail();
                                else :
                                ?><div class="no-thumbnail"></div><?php endif; ?>
                            </div>
                            <div class="c-card__inner">
                                <h2><?php the_title(); ?></h2>
                                <h3>小見出しが入ります</h3>
                                <p><?php the_excerpt(); ?>
                                </p>
                                <div class="button-area">
                                    <button><a href="<?php the_permalink(); ?>">詳しく見る</button></a>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile;
            else :
                ?> <p>表示する記事がありません</p><?php
                                    endif; ?>