<?php get_header(); ?>

<div class="container">
<!-- Main component for a primary marketing message or call to action -->

  <div class="top-background-color panel panel-default panel-body">
    <div class="row">
      <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked">
          <?php wp_list_categories('orderby=name&title_li='); ?>
        </ul>
      </div>
      <div class="col-md-10">
        <h3>Our Articles</h3>
        <?php while(have_posts()) : the_post(); ?>

          <h3><a class="article-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); ?></p>
          <p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
          <br/>
        <?php endwhile; wp_reset_query();

        echo paginate_links();  ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

</div>
