<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme00
 */

?>


	  <footer class="pt-4 py-md-5 pt-md-5 border-top text-white">
    <div class="row pl-2">
      <div class="col-12 col-md">
        <h4><b><?php bloginfo("name"); ?></b></h4>
        <small class="d-block mb-3 text-white">© <?php echo get_post_meta("5", 'year', true); ?></small>
      </div>
      <div class="col-6 col-md">
        <h5><b><?php echo get_post_meta("5", 'features_heading', true); ?></b></h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'feature1', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'feature2', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'feature3', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'feature4', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'feature5', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'feature6', true); ?></a>
          </li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5><b><?php echo get_post_meta("5", 'resources_heading', true); ?></b></h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'resource1', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'resource2', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'resource3', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'resource4', true); ?></a>
          </li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5><b><?php echo get_post_meta("5", 'about_heading', true); ?></b></h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'about1', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'about2', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'about3', true); ?></a>
          </li>
          <li>
            <a class="text-white" href="#"><?php echo get_post_meta("5", 'about4', true); ?></a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
</div><!-- #page -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>
</html>
