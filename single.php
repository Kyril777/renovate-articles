<?php get_header(); ?>

<div class="container">
<!-- Main component for a primary marketing message or call to action -->

  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-body top-background-color ">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>

            <h3><?php the_title(); ?></h3>
            <p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y'); ?></p>
            <p><?php the_content(); ?></p>
          <?php endwhile; wp_reset_query(); ?>

        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>

      </div>
    </div>
    <div class="col-md-4">
      <div class="list-group">
        <?php query_posts('posts_per_page=6'); while(have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="list-group-item">
            <div class="list-group-item-dark">
            <h5><?php the_title(); ?></h5>
            <p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y'); ?></p>
          </div>
          </a>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

</div>
