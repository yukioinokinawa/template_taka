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
         <div class="p-single__wrapper">
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
                         <figure class="p-single__brockquote">
                             <brockquote class="p-single__brockquote inner">
                                 <p>brockquote
                                     引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                 </p>
                                 <a href="#">◯◯◯◯◯◯◯◯◯◯◯◯</a>
                             </brockquote>
                             <figcaption>
                             </figcaption>
                         </figure>
                         <!--brockquote-->
                         <div class="c-imgcontainer">
                             <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail();
                                else :
                                ?><div class="no-thumbnail"></div><?php endif; ?>
                         </div>


                         <article class="c-imgcontainer">
                             <div class="c-imgcontainer__wrapper">
                                 <div class="c-imgcontainer__imgbox"> <?php
                                                                        if (has_post_thumbnail()) :
                                                                            the_post_thumbnail();
                                                                        else :
                                                                        ?><div class="no-thumbnail"></div><?php endif; ?>
                                 </div>
                                 <div class="c-imgcontainer__inner">
                                     <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                     </p>
                                 </div>
                             </div>
                         </article>

                         <article class="c-imgcontainer">
                             <div class="c-imgcontainer__wrapper reverse">
                                 <div class="c-imgcontainer__imgbox"> <?php
                                                                        if (has_post_thumbnail()) :
                                                                            the_post_thumbnail();
                                                                        else :
                                                                        ?><div class="no-thumbnail"></div><?php endif; ?>
                                 </div>
                                 <div class="c-imgcontainer__inner">
                                     <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                     </p>
                                 </div>
                             </div>
                         </article>

                         <div class="c-imgcontainer__imgcenter">
                             <img src="images/burger_set.png" alt="商品サンプル">
                         </div>

                         <div class="c-imgcontainer__imglist">
                             <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail();
                                else :
                                ?><div class="no-thumbnail"></div><?php endif; ?>
                             <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail();
                                else :
                                ?><div class="no-thumbnail"></div><?php endif; ?>
                             <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail();
                                else :
                                ?><div class="no-thumbnail"></div><?php endif; ?>
                             <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail();
                                else :
                                ?><div class="no-thumbnail"></div><?php endif; ?>
                             <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail();
                                else :
                                ?><div class="no-thumbnail"></div><?php endif; ?>
                             <?php
                                if (has_post_thumbnail()) :
                                    the_post_thumbnail();
                                else :
                                ?><div class="no-thumbnail"></div><?php endif; ?>

                         </div>
                         <!--img container-->

                         <div class="u-list">
                             <ul class="u-list__1">
                                 <li>リストリストリスト</li>
                                 <li>リストリストリスト</li>
                                 <ul class="u-list__lower">
                                     <li>リスト2リスト2リスト2</li>
                                     <li>リスト2リスト2リスト2</li>
                                 </ul>
                             </ul>
                             <ul class="u-list__1">
                                 <li>リストリストリスト</li>
                                 <li>リストリストリスト</li>
                             </ul>
                             <ul class="u-list__2">
                                 <li>リストリストリスト</li>
                                 <li>リストリストリスト</li>
                                 <ul class="u-list__lower">
                                     <li>リスト2リスト2リスト2</li>
                                     <li>リスト2リスト2リスト2</li>
                                 </ul>
                                 <li>リストリストリスト</li>
                                 <li>リストリストリスト</li>
                             </ul>
                         </div>
                         <!--list area-->

                         <pre class="u-code">
                            <code>
                                &lt;html&gt;
                                    &lt;head&gt;
                                    &lt;/head&gt;
                                    &lt;body&gt;
                                    &lt;/body&gt;
                                &lt;/html>
                            </code>
                        </pre>
                         <!--code area-->

                         <table class="u-table">
                             <tbody>
                                 <tr>
                                     <th>テーブル</th>
                                     <td>テーブル</td>
                                 </tr>
                                 <tr>
                                     <th>テーブル</th>
                                     <td>テーブル</td>
                                 </tr>
                                 <tr>
                                     <th>テーブル</th>
                                     <td>テーブル</td>
                                 </tr>
                                 <tr>
                                     <th>テーブル</th>
                                     <td>テーブル</td>
                                 </tr>


                             </tbody>
                         </table>
                         <!--table area-->

                         <div class="u-button simple">
                             <button>ボタン</button>
                         </div>
                         <!--button area-->

                         <p class="bold">boldboldboldboldboldbold</p>
                     <?php endwhile;
                    else :
                        ?> <p>表示する記事がありません</p><?php
                                            endif; ?>

         </div>
         </article>
     </div>
     </div>

     <!--Main-->

     <?php get_sidebar(); ?>

     </div>

     <?php get_footer(); ?>