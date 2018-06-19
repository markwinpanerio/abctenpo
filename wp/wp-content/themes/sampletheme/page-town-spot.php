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

<main class="l-main">
  <div class="l-container">
    <div class="archive">
      <div class="archive-inner">
        <ul class="archive-list row">
          <li class="archive-item col-lg-3">
            <div class="archive-article"></div>
          </li>
          <li class="archive-item col-lg-3">
            <div class="archive-article"></div>
          </li>
          <li class="archive-item col-lg-3">
            <div class="archive-article"></div>
          </li>
          <li class="archive-item col-lg-3">
            <div class="archive-article"></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php importPart('footer'); ?>
<?php
get_sidebar();
get_footer();
