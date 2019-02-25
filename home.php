<?php
get_header();
?>
<div class="container blogg">

<?php
if (have_posts()):
	while (have_posts()): the_post();
		?>
				    <div class="row">
				        <div class="col-sm-4">
		                    <?php the_content();?>
		                </div>


				<?php
		the_title();

		?>

				    </div>
				<?php
	endwhile;
endif;
?>
</div>

<?php
get_footer();
?>