<?php
get_header();
?>
<div class="container single-post">
    

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
        the_post(); ?>
        <div class="row">
            <h1><?= the_title() ?></h1>
            <img class="post-image" src="<?=get_the_post_thumbnail_url();?>">
        </div>
<?php
	} 
}

if( have_rows('flex_posts') ):
        
    // loop through the rows of data
    while ( have_rows('flex_posts') ) : the_row();

        if( get_row_layout() == 'carousel'):
            $carousel_array = get_sub_field('image_repeater');
            include 'template-parts/post-carousel.php';
        elseif( get_row_layout() == 'single_image'):
            $image = get_sub_field('image');
            $text  = get_sub_field('text');
            include 'template-parts/post-image.php';
        elseif( get_row_layout() == 'text_only'):
            $text  = get_sub_field('text');
            include 'template-parts/post-text.php';
        endif;
        

    endwhile;

else :
endif;    
?>


</div>
<?php
get_footer();
?>