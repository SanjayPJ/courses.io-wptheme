<?php
/*
Template Name: Price page
 */
get_header();

$heading = get_field("heading");
$description = get_field("description");
$description2 = get_field("description2");

?>
<script>$(".price").addClass("active");</script>
<div class="container-fluid pb-4 my-5">
        <div class="container-fluid">
          <div class="container">
            <div class="pricing-header px-3 py-3 pb-md-4 mx-auto text-center">
              <h1 class=""><b><?php echo $heading; ?></b></h1>
              <p class=""><?php echo $description; ?></p>
            </div>
          </div>
          <div class="card-deck mb-3 text-center">
            
          <?php 
          $args = array(
            'post_type' => 'pricing',
            'orderby' => 'post_id',
            'order' => 'ASC'
          );
          $loop = new WP_Query($args);
          while ( $loop->have_posts() ) : $loop->the_post();
          ?>

          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal"><?php the_title(); ?></h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">
              <?php the_field('money'); ?>
              </h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li><?php the_field('description1'); ?></li>
                <li><?php the_field('description2'); ?></li>
                <li><?php the_field('description3'); ?></li>
                <li><?php the_field('description4'); ?></li>
              </ul>
              <button type="button" class="btn btn-block btn-<?php the_field('button_colour'); ?>"><?php the_field('button_text'); ?></button>
            </div>
          </div>
          <?php endwhile; ?>
          </div>
        </div>
      </div>
      <div class="container-fluid">
            <!-- Example row of columns -->
            <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-8">
                <p class="text-center"><?php echo $description2; ?></p>
              </div>
              <div class="col-md-2">
              </div>
            </div>
    
            <hr>
    
          </div>

<?php
get_footer();
