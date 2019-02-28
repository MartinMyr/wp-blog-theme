<?php
get_header();
?>
<div class="container single-post">
    

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
        the_post(); ?>
        <div class="row">
            <div class="post-image" style="background-image:url('<?=get_the_post_thumbnail_url();?>')"></div>
        </div>
<?php
	} 
}
?>
</div>
<?php
get_footer();
?>