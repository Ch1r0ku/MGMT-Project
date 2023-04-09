<?php
/*
    Template Name: Page Template
    Template Post Type: page
*/
get_header();
?>
<!-- now we add our content -->
<main class="page-v1">
    <?php
        the_content();
    ?>
</main>
<?php
get_footer();
?>