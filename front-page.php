<?php get_header(); ?>

<div class="carousel fade-carousel slide carousel-fade" data-ride="carousel"
data-interval="5000" id="bs-carousel">
    <!-- Overlay -->
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item slides active carousel-item">
            <div class="slide-1">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="item slides carousel-item">
            <div class="slide-2">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="item slides carousel-item">
            <div class="slide-3">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="hero">
            <hgroup>
                 <h1>We can Fix It</h1>
                 <h3>Let's Get You Started on Your Next Project</h3>
            </hgroup>
            <button class="btn btn-warning btn-lg" role="button">See all features</button>
        </div>
    </div>
</div>

<div class="container">
<!-- Main component for a primary marketing message or call to action -->

  <?php
    query_posts('posts_per_page=1');
      while(have_posts()) : the_post(); ?>

      <div class="jumbotron">
        <h3>Latest Article</h3>
        <h4><a class="article-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><?php the_excerpt(); ?></p>
      </div>

  <?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>
