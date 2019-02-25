<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
     <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

      <?php wp_head();?>

</head>
<body <?php body_class();?>>
 <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-6 col-6">

                </div>
                <div class="col-sm-6 col-6">

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="toggle-container">

                    </div>
                      </button>

                </div>
                <div class="col-sm-12">

                    <nav class="navbar navbar-expand-md" role="navigation">
                        <div class="container-fluid">
<?php
wp_nav_menu(array(
	'theme_location' => 'primary',
	'depth' => 2,
	'container' => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id' => 'navbar-collapse-1',
	'menu_class' => 'nav navbar-nav',
	'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
	'walker' => new WP_Bootstrap_Navwalker(),
));
?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>