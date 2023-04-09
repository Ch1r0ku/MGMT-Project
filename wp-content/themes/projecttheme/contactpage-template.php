<?php
/*
    Template Name: Contact Page Template
    Template Post Type: page
*/
get_header();
?>
<!-- now we add our content -->
<main class="contactpage-v1">
    <?php
        the_content();
    ?>
    <br>
    <button id="contactpage-v1" onclick='alert("Nope! We told you to not do that");'>Contact</button>
</main>
<?php
get_footer();
?>