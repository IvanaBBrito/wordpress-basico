<?php include 'header.php';?>
  <div class="container">
    <h1><?php the_title();?></h1>
    <?php the_content();?>
    <div class="row">
      <?php
        if ( get_query_var('paged') ) {

          $ourCurrentPage = get_query_var('paged');

          } elseif ( get_query_var('page') ) {

          $ourCurrentPage = get_query_var('page');

          } else {

            $ourCurrentPage = 1;

          }

        $all_posts = new WP_Query(array(
            'post_status' => 'publish',
            'post_type' => 'post',
            'orderby'=>'title',
            'order'=>'ASC',
            'posts_per_page' => 2,
            'paged'=> $ourCurrentPage
        ));
        
        if($all_posts->have_posts()) : 
          while($all_posts->have_posts()): $all_posts->the_post();?>
            
            <div class="item">
                <p class="titulo"><?php the_title();?></p>
                <div class="link">
                  <a href="<?php  echo get_permalink();?>" target="_blank">
                    <p>Visualizar</p>
                  </a>
                </div>
            </div>
            
          <?php endwhile; ?>

          <!--/ pagination -->
          <div class="pagination pull-right">
            <?php echo paginate_links(array('total'=>$all_posts->max_num_pages, 'current'=>max(1, $ourCurrentPage)));?>
          </div>

        <?php endif;
        
        wp_reset_query(); ?>
    </div>
  </div>
<?php include 'footer.php';?>