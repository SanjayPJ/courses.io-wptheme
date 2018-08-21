<?php
/*
Template Name: Home page
 */

 //hero section
 $main_text = get_field("main_text");
 $main_subtext = get_field("main_subtext");
 $main_button_text = get_field("main_button_text");

 //link section
 $link_section1_text = get_field("link_section1_text");
 $link_section1_button_text = get_field("link_section1_button_text");
 $link_section2_text = get_field("link_section2_text");
 $link_section2_button_text = get_field("link_section2_button_text");

 //feature section
 $feature_heading = get_field("feature_heading");
 $feature_subheading = get_field("feature_subheading");
 $section1_text = get_field("section1_text");
 $section1_icon = get_field("section1_icon");
 $section1_desc = get_field("section1_desc");
 $section2_text = get_field("section2_text");
 $section2_icon = get_field("section2_icon");
 $section2_desc = get_field("section2_desc");
 $section3_text = get_field("section3_text");
 $section3_icon = get_field("section3_icon");
 $section3_desc = get_field("section3_desc");

 //latest course section
 $course_heding = get_field("course_heding");
 $course_description = get_field("course_description");
 $card1_image = get_field("card1_image");
 $card1_desc = get_field("card1_desc");
 $card1_time = get_field("card1_time");
 $card2_image = get_field("card2_image");
 $card2_desc = get_field("card2_desc");
 $card2_time = get_field("card2_time");
 $card3_image = get_field("card3_image");
 $card3_desc = get_field("card3_desc");
 $card3_time = get_field("card3_time");
 $card4_image = get_field("card4_image");
 $card4_desc = get_field("card4_desc");
 $card4_time = get_field("card4_time");
 $card5_image = get_field("card5_image");
 $card5_desc = get_field("card5_desc");
 $card5_time = get_field("card5_time");
 $card6_image = get_field("card6_image");
 $card6_desc = get_field("card6_desc");
 $card6_time = get_field("card6_time");
 $card1_heading = get_field("card1_heading");
 $card2_heading = get_field("card2_heading");
 $card3_heading = get_field("card3_heading");
 $card4_heading = get_field("card4_heading");
 $card5_heading = get_field("card5_heading");
 $card6_heading = get_field("card6_heading");
 
get_header();
?>
  <script>
    $(".home").addClass("active");
  </script>
  <!-- hero -->
  <div class="hero text-white position-relative overflow-hidden p-5 p-md-5 text-center bg-light">
    <div class="col-md-4 p-lg-4 mx-auto my-5">
      <h1 class=" font-weight-normal">
       <b> <?php echo $main_text; ?></b>
      </h1>
      <p class="font-weight-normal">
        <?php echo $main_subtext; ?>
      </p>
      <a class="btn btn-success" href="#">
        <?php echo $main_button_text; ?>
      </a>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
  </div>
  <div class="p-2 text-center">
    <span class="">
      <?php echo $link_section1_text; ?>
    </span>
    <button class="btn btn-success ml-2 px-4">
      <?php echo $link_section1_button_text; ?>
    </button>
  </div>

  <!-- feature -->
  <div class="text-field">
    <div class="container">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="">
          <b><?php echo $feature_heading ?></b>
        </h1>
        <p class="">
          <?php echo $feature_subheading; ?>
        </p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row featurette py-2" style="margin-left: 220px;">
        <div class="col-md-7 my-5">
          <h4 class="featurette-heading">
            <b><?php echo $section1_text; ?></b>
          </h4>
          <p class="text-justify">
            <?php echo $section1_desc; ?>
          </p>
        </div>
        <div class="col-md-5">
          <div class="container-i">
            <div class="icon-container">
              <i class="<?php echo $section1_icon; ?>"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <hr>
      </div>
      <div class="row featurette py-2" style="margin-left: 220px;">
        <div class="col-md-3">
          <div class="container-i">
            <div class="icon-container">
              <i class="<?php echo $section2_icon; ?>"></i>
            </div>
          </div>
        </div>
        <div class="col-md-7 my-5" style="padding-right: 40px;">
          <h4 class="featurette-heading"><b><?php echo $section2_text; ?></b></h4>
          <p class="text-justify"><?php echo $section2_desc; ?></p>
        </div>
      </div>
      <div class="container">
        <hr>
      </div>
      <div class="row featurette py-2" style="margin-left: 220px;">
        <div class="col-md-7 my-5">
          <h4 class="featurette-heading"><b><?php echo $section3_text; ?></b></h4>
          <p class="text-justify"><?php echo $section3_desc; ?></p>
        </div>
        <div class="col-md-5">
          <div class="container-i">
            <div class="icon-container">
              <i class="<?php echo $section3_icon; ?>"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid pb-5">
    <div class="container">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class=""><b><?php echo $course_heding; ?></b></h1>
        <p class=""><?php echo $course_description ?></p>
      </div>
    </div>
    <div class="row" style="margin: 0 200px;">
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="<?php echo $card1_image['url']; ?>">
          <div class="card-body">
          <h5><b><?php echo $card1_heading ?></b></h5>
            <p class="card-text"><?php echo $card1_desc; ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
              </div>
              <small class="text-muted"><?php echo $card1_time ?></small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="<?php echo $card2_image['url']; ?>">
          <div class="card-body">
          <h5><b><?php echo $card2_heading ?></b></h5>
            <p class="card-text"><?php echo $card2_desc; ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
              </div>
              <small class="text-muted"><?php echo $card2_time ?></small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="<?php echo $card3_image['url']; ?>">
          <div class="card-body">
          <h5><b><?php echo $card3_heading ?></b></h5>
            <p class="card-text"><?php echo $card3_desc; ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
              </div>
              <small class="text-muted"><?php echo $card3_time ?></small>
            </div>
          </div>
        </div>
      </div> <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="<?php echo $card4_image['url']; ?>">
          <div class="card-body">
          <h5><b><?php echo $card4_heading ?></b></h5>
            <p class="card-text"><?php echo $card4_desc; ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
              </div>
              <small class="text-muted"><?php echo $card4_time ?></small>
            </div>
          </div>
        </div>
      </div> <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="<?php echo $card5_image['url']; ?>">
          <div class="card-body">
          <h5><b><?php echo $card5_heading ?></b></h5>
            <p class="card-text"><?php echo $card5_desc; ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
              </div>
              <small class="text-muted"><?php echo $card5_time ?></small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="<?php echo $card6_image['url']; ?>">
          <div class="card-body">
          <h5><b><?php echo $card6_heading ?></b></h5>
            <p class="card-text"><?php echo $card6_desc; ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
              </div>
              <small class="text-muted"><?php echo $card6_time ?></small>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center w-100 mb-2">
        <button class="btn btn-success px-3">See more</button>
      </div>
    </div>
  </div>
  <div class="p-2 text-center text-field">
    <span class="">
      <?php echo $link_section2_text; ?>
    </span>
    <button class="btn btn-success ml-2 px-4">
      <?php echo $link_section2_button_text; ?>
    </button>
  </div>
  <?php

get_footer();