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
      <a class="image-link--partners" href="http://gamecraft.willkuer.at/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gamecraft.png" alt="GameCraft Logo">
      </a>

      <p class="contact">
        <a class="icon-mail" href="mailto:gamestage@radiatedpixel.com"> gamestage@radiatedpixel.com</a><br>
        <a class="icon-facebook" href="https://www.facebook.com/GameCraftLinz/events"> GameStage@AEC auf Facebook</a>
      </p>
      <p><small>Dieses <a href="https://github.com/Lorti/game-stage-theme">Theme für WordPress</a> wurde von <a href="http://www.manuelwieser.com/">Manuel Wieser</a> erstellt.<br>Kontaktieren sie ihn, wenn sie eine neue Website brauchen, er würde sich freuen ;)</small></p>

  	</footer><!-- /footer -->
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>