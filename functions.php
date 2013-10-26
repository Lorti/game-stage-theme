<?php

  // ======== Slug ========
  add_filter('body_class', 'add_body_class');
  function add_body_class($classes) {
    global $post;
    if(isset($post)) {
      $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
  }

  // ======== Legacy support ========
  remove_filter('the_content', 'wpautop');
  add_filter('the_content', 'legacy_formatting');
  function legacy_formatting($content) {
    if(basename(get_page_template()) == 'legacy-page.php')
      return $content;
    else
      return wpautop($content);
  }
  
  add_action('admin_init', 'legacy_editing');
  function legacy_editing() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
    if($template_file == 'legacy-page.php')
      add_filter('user_can_richedit', '__return_false');
  }
  
  // ======== Shortcodes ========
  function gstitle_function($atts) {
    extract(shortcode_atts(array(
      'title' => '',
      'tagline' => ''
    ), $atts));
    $result = sprintf('<header class="event-title">');
    $result .= sprintf('<h1 class="event-title__header">%s</h1>', $title);
    if($tagline != '')
      $result .= sprintf('<p class="event-title__tagline">%s</p>', $tagline);
    $result .= sprintf('</header>');
    return $result;
      
  }
  function gsinfo_function($atts, $content = null) {
    extract(shortcode_atts(array(
      'timestamp' => '',
      'entry' => '',
      'location' => '',
      'city' => ''
    ), $atts));
    $result = sprintf('<section class="event-info">');
    if($timestamp != '')
      $result .= sprintf('<p class="event-info__timestamp">%s</p>', $timestamp);
    if($entry != '')
      $result .= sprintf('<p class="event-info__free-entry right">%s</p>', $entry);
    if($location != '')
      $result .= sprintf('<p class="event-info__location">%s</p>', $location);
    if($city != '')
      $result .= sprintf('<p class="event-info__city">%s</p>', $city);
    $result .= $content;
    $result .= sprintf('</section>');
    return $result;
  }
  function gsprogram_function($atts, $content = null) {
    extract(shortcode_atts(array(
      'heading' => ''
    ), $atts));
    $result = sprintf('<section class="event-program">');
    if($heading != '')
      $result .= sprintf('<h2 class="event-program__header icon-pacman"> %s</h2>', $heading);
    $result .= do_shortcode($content);
    $result .= sprintf('</section>');
    return $result;
  }
  function gsprogramitem_function($atts, $content = null) {
    extract(shortcode_atts(array(
      'item' => '',
      'link' => ''
    ), $atts));
    if($item != '')
      $result .= sprintf('<h3 class="event-program__item">%s</h3>', $item);
    $result .= sprintf('<p class="event-program__item-description">');
    if($link != '')
      $result .= sprintf('<a href="%s">%s</a>', $link, $link);
    $result .= $content;
    $result .= sprintf('</p>');
    return $result;
  }
  function register_shortcodes() {
    add_shortcode('gstitle', 'gstitle_function');
    add_shortcode('gsinfo', 'gsinfo_function');
    add_shortcode('gsprogram', 'gsprogram_function');
    add_shortcode('gsprogramitem', 'gsprogramitem_function');
  }
  add_action('init', 'register_shortcodes');

  // ======== Guillemets ========
  add_filter('the_content', 'gs_guillemets', 100);
  function gs_guillemets($content) {
    $content = str_replace(array('&#8220;'), '&raquo;', $content);
    $content = str_replace(array('&#8221;'), '&laquo;', $content);
    return $content;
  }
?>
