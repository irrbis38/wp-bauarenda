<?php
/*
  Template Name: NewsList Template
*/

get_header();
?>


<main class="main">
  <section class="news news__page">
    <div class="container">
      <div class="first__breadcrumps breadcrumps"><a href="<?php echo get_home_url(); ?>">Главная</a><span>Новости</span></div>
      <h2 class="news__title block__title">Новости</h2>
      <div class="news__wrapper">
        <?php
        $current = absint(max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page')));

        // get current date to next compare
        $today = getdate();
        $day = ($today['mday'] < 10) ? "0" . $today['mday'] : $today['mday'];
        $month = ($today['mon'] < 10) ? "0" . $today['mon'] : $today['mon'];
        $year = $today["year"];
        $current_date = "$day.$month.$year";

        $query_news = new WP_Query([
          'post_type' => 'news',
          'posts_per_page' => 10,
          'orderby' => 'date',
          'order' => 'DESC',
          'paged' => $current,
        ]);

        if ($query_news->have_posts()):
          while ($query_news->have_posts()):
            $query_news->the_post();
            ?>

            <div class="news__item element-animation">
              <h4 class="news__header"><a href="./news-item.html">
                  <?php the_title(); ?>
                </a></h4>
              <div class="news__info">
                <p class="intro__posted">


                  <?php
                  $publish_date = get_the_date('d.m.Y');
                  $publish_date === $current_date ? print 'сегодня' : the_time('d.m.Y');
                  ?>
                  <?php
                  the_time('H:i');
                  ?>
                </p>
                <div class="news__statistics">
                  <div class="news__views"><img class="news__icon" src="<?php echo bloginfo('template_url'); ?>/assets/images/news/view.svg"
                      alt="количество просмотров"><span>236</span></div>
                  <div class="news__comments"><img class="news__icon" src="<?php echo bloginfo('template_url'); ?>/assets/images/news/comment.svg"
                      alt="количество просмотров"><span>0</span></div>
                </div>
              </div>
            </div>

            <?php

          endwhile;

          ?>
        </div>

        <?php

        // pagination
      
        echo wp_kses_post(
          paginate_links(
            [
              'total' => $query_news->max_num_pages,
              'current' => $current,
              'show_all' => false,
              'end_size' => 1,
              'mid_size' => 2,
              'prev_next' => true,
              'prev_text' => '',
              'next_text' => '',
              'type' => 'list'
            ]
          )
        );

        wp_reset_postdata();

        endif;
        ?>
      <!-- </div> -->
  </section>


  <?php
  $reviews_params = ['posts_per_page' => 6];
  get_template_part('template-parts/reviews-part', null, $reviews_params);
  ?>

  <?php
  get_template_part('template-parts/feedback-wide');
  ?>

  <?php
  get_template_part('template-parts/fixed-part');
  ?>
</main>


<?php
get_footer();
?>