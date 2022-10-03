     <?php get_header(); ?>

     <!--Header-->


     <div class="p-pagetop">
         <div class="p-pagetop__wrapper singleimg">
             <h1> <?php the_title(); ?></h1>
             <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail();
                else :
                ?><div class="no-thumbnail"></div><?php endif; ?>
         </div>
     </div>
     <!--Top-->

     <div class="l-main">
         <div class="p-single__wrapper" <?php post_class(); ?>>
             <article class="p-single">
                 <article class="p-single__intro">
                     <h2><?php the_title(); ?></h2>
                     <p><?php echo category_description(); ?>
                     </p>
                 </article>
                 <!--intro-->
                 <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post(); ?>

                         <?php the_content(); ?>
                     <?php endwhile;
                    else :
                        ?> <p>表示する記事がありません</p><?php
                                            endif; ?>
                 <?php if (is_404()) : ?>
                     <?php get_template_part('component/404'); ?>
                 <?php endif; ?>

         </div>
         </article>
     </div>
     </div>

     <!--Main-->

     <?php get_sidebar(); ?>

     </div>

     <?php get_footer(); ?>