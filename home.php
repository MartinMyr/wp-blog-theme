<?php
get_header();
?>
<div class="container-fluid blogg">
    <div class="container">
        <div class="row">
<?php
if (have_posts()):
	while (have_posts()): the_post();
	$image_url =	get_the_post_thumbnail_url();
	$text      =	get_the_content();	
?>
			<div class="col-md-6 col-sm-12 col-xl-4">
				<div class="post-bg">
					<a href="<?php the_permalink(); ?>">
						<div class="post-image" style="background-image:url(<?=$image_url;?>)">
							<div class="inner-heading-background">
								<h2 class="header">
									<?php the_title();?>
								</h2>
								<p class="date">
									<?=get_the_date();?>
								</p>
							</div>
							
						</div>
					</a>
					<p class="post-content">
						<?= wp_trim_words($text, 25);?>
					</p>
				</div>
				
			</div>

<?php
	endwhile;
endif;
?>
        </div>
    </div>
</div>


<?php
get_footer();
?>