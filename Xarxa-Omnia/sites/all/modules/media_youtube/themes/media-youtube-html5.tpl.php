<?php
// $Id:

/**
 * @file media_youtube/themes/media-youtube-html5.tpl.php
 *
 * Template file for Media: YouTube's theme('media_youtube_html5').
 *
 * This will display YouTube's HTML5 video in an iframe.
 *
 *  $autoplay => Either 1 or 0, determining whether to autoplay the video.
 */
?>
<iframe id="media-youtube-html5-<?php print $id; ?>" title="<?php print $iframe_title; ?>" class="<?php print $class; ?>" type="text/html" width="<?php print $width; ?>" height="<?php print $height; ?>" src="<?php print $url; ?>" frameborder="0"<?php if ($fullscreen_value == 'true') { print ' allowFullScreen'; } ?>></iframe>
