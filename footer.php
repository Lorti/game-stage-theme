<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

</div><!-- #page -->

<div class="spanning-bar">
  <div class="outer-wrapper">
   <footer class="inner-wrapper" role="contentinfo">

      <a class="image-link--partners" href="http://www.radiatedpixel.com/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/radiatedpixel.png" alt="Radiated Pixel Logo">
      </a>
      <a class="image-link--partners" href="http://games.fh-hagenberg.at/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/glab.png" alt="gLab Hagenberg Logo">
      </a>
      <a class="image-link--partners" href="http://www.bildschirmspruenge.net/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nik.png" alt="Bildschirmsprünge">
      </a>

      <p class="contact">
        <a class="icon-mail" href="mailto:gamestage@radiatedpixel.com"> gamestage@radiatedpixel.com</a><br>
        <a class="icon-facebook" href="https://www.facebook.com/gamestageaustria"> www.facebook.com/gamestageaustria</a>
      </p>
      <p><small>Diese Seite wurde von <a href="http://www.radiatedpixel.com/">Radiated Pixel</a> erstellt.<br>Falls Sie an einer Website für ihr Unternehmen interessiert sind, können Sie sich gerne per <a href="mailto:contact@radiatedpixel.com">E-Mail</a> an uns wenden.</small></p>

  	</footer><!-- /footer -->
  </div>
</div>

<?php wp_footer(); ?>

<script>
  var s = document.documentElement.style;
  if ('transform' in s ||
      'webkitTransform' in s ||
      'mozTransform' in s ||
      'msTransform' in s ||
      'oTransform' in s) {
    document.getElementById('acquisition').className = 'starburst';
  }
</script>

</body>
</html>