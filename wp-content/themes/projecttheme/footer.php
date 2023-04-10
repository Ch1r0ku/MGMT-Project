<footer>
	<div class="col-sm-12 col-md-3 col-lg-3">
		<?php dynamic_sidebar('footer-part-one'); ?>
	</div>
	<div class="col-sm-12 col-md-3 col-lg-3">
		<?php dynamic_sidebar('footer-part-two'); ?>
	</div>
	<div class="col-sm-12 col-md-3 col-lg-3">
		<?php dynamic_sidebar('footer_area_three'); ?>
	</div>
	<div class="col-sm-12 col-md-3 col-lg-3">
		<?php dynamic_sidebar('footer_area_four'); ?>
	</div>
	<p class="bottom-footer">&copy; All Rights Reserved. <?php $current_year = current_time('Y');
							echo $current_year; ?></p>
</footer>
<?php wp_footer(); ?>
</body>

</html>