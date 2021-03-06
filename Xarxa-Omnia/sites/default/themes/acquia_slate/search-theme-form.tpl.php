<?php
// $Id: search-theme-form.tpl.php,v 1.3 2010/07/02 23:14:21 eternalistic Exp $

/**
 * @file search-theme-form.tpl.php
 * Default theme implementation for displaying a search form directly into the
 * theme layout. Not to be confused with the search block or the search page.
 *
 * Available variables:
 * - $search_form: The complete search form ready for print.
 * - $search: Array of keyed search elements. Can be used to print each form
 *   element separately.
 *
 * Default keys within $search:
 * - $search['search_theme_form']: Text input area wrapped in a div.
 * - $search['submit']: Form submit button.
 * - $search['hidden']: Hidden form elements. Used to validate forms when submitted.
 *
 * Since $search is keyed, a direct print of the form element is possible.
 * Modules can add to the search form so it is recommended to check for their
 * existance before printing. The default keys will always exist.
 *
 *   <?php if (isset($search['extra_field'])): ?>
 *     <div class="extra-field">
 *       <?php print $search['extra_field']; ?>
 *     </div>
 *   <?php endif; ?>
 *
 * To check for all available data within $search, use the code below.
 *
 *   <?php print '<pre>'. check_plain(print_r($search, 1)) .'</pre>'; ?>
 *
 * @see template_preprocess_search_theme_form()
 */
?>

<?php /* Set search form label values and functions */ ?>
<?php $search_label = t('Search...'); ?>
<?php $search_phrase = t('Enter the terms you wish to search for.'); ?>
<?php $on_blur = "if(this.value=='') this.value='" . $search_label . "';"; ?>
<?php $on_focus = "if(this.value=='" . $search_label . "') this.value='';"; ?>

<div id="search">
  <div id="search-input">
 <label for="edit-search-theme-form-header"></label>
  <input class="search-input form-text" type="text" maxlength="128" name="search_theme_form" id="edit-search-theme-form-header"  size="15" value="" title="<?php print t('Enter search terms') ?>" tabindex="7" />
 <label for="search_header"></label>
  <input id="search_header" class="search_submit" type="submit" name="op" value="<?php print t('Search') ?>" tabindex="8"  />
 <label for="edit-search-theme-form"></label>
  <?php print $search['hidden']; ?>

  </div>

 

  
</div>

