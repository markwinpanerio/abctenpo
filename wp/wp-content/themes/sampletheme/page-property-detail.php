<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

  <div class="l-container">
    <?php importTemplate('modules/property'); ?>
    <?php importTemplate('modules/slider'); ?>
    <?php importTemplate('modules/view3d'); ?>
  </div>

  <main>
    <?php importTemplate('modules/search-properties'); ?>
  </main>

  <?php importPart('footer'); ?>

<?php
get_footer();
