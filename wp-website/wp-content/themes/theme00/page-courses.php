<?php
/*
Template Name: Courses page
 */

 $heading = get_field("heading");
 $description = get_field("description");

get_header();
?>
<script>$(".courses").addClass("active");</script>
  <div class="container-fluid pb-5">
    <div class="container">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class=""><b><?php echo $heading; ?></b></h1>
        <p class=""><?php echo $description; ?></p>
      </div>
    </div>
    <div class="row">

    <?php 
    $args = array(
      'numberposts' => -1,
      'post_type' => 'course',
      'orderby' => 'post_id',
      'order' => 'ASC'
    );

    $posts = get_posts( $args );
    if ($posts) {
        foreach ( $posts as $post ) {
          ?>
          <div class="col-md-3">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="<?php the_field('image'); ?>">
            <div class="card-body">
              <h5><b><?php the_title(); ?></b></h5>
              <p class="card-text"><?php the_field('description'); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success">View</button>
                  <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
                </div>
                <small class="text-muted"><?php the_field('time'); ?></small>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
    }
    ?>
    </div>
  </div>


<?php
get_footer();
