<?php
/*
Template Name: Contact page
 */

 $heading = get_field("heading");
 $description = get_field("description");

get_header();
?>
<script>$(".contact").addClass("active");</script>
  <div class="container-fluid pb-5">
        <div class="container">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class=""><b><?php echo $heading; ?></b></h1>
                <p class=""><?php echo $description; ?></p>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-12 order-md-1">
                    <form class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input class="form-control" id="firstName" placeholder="" value="" required="" type="text">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input class="form-control" id="lastName" placeholder="" value="" required="" type="text">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="email">Email
                                <span class="text-muted">(Optional)</span>
                            </label>
                            <input class="form-control" id="email" placeholder="you@example.com" type="email">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Message</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-success btn-block" type="submit">Send Message</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

<?php
get_footer();
