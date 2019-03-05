
<div class="row carousel-small-row">
   
    <div class="carousel-wrapper">
        <div id="carousel-small" class="carousel carousel-small slide" data-ride="carousel">
            <div class="carousel-inner">
            <a class="carousel-prev" href="#carousel-small" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a class="carousel-next" href="#carousel-small" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>
            <?php
                $i = 0;
            foreach($carousel_array as $item):
                $src    = $item['image'];
                $src    = $src['url'];
                $text   = $item['text_on_img'];
            ?>
                <?php if( $src ): ?>
                    <div class="carousel-item <?php if($i == 0): echo 'active';endif?>">
                        <img src="<?php echo $src ?>" alt="First slide">
                        <div class="carousel-text">
                            <p><?= $text; ?> </p>
                        </div>
                    </div>

            <?php
                endif;
                $i++;
            endforeach;
            ?>
                
            </div>
        </div>
    </div>
   
</div>