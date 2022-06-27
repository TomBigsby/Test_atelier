<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Jamie & Annie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->

    <?php wp_head() ?>
</head>

<?php
// Contrôler si ACF est actif
if (!function_exists('get_field')) return;
?>


<body>
    <header>
        <div class="container">

            <div class="row">
                <div class="col-auto">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" class="img-fluid" alt="">

                </div>

                <div class="col d-flex align-items-md-center mt-4 align-items-start justify-content-end">
                    <div class="row">
                        <div class="col-auto">
                            <nav class="nav-burger">
                                <a href="#"><i class="toggle-nav fa fa-bars" aria-hidden="true"></i></a>

                                <?php wp_nav_menu([
                                    'theme_location' => 'header',
                                    'container_class' => 'nav-burger',
                                    'menu_class' => 'menu-item'
                                ]) ?>
                            </nav>

                            <nav class="nav">
                                <?php wp_nav_menu([
                                    'theme_location' => 'header',
                                    'container_class' => 'nav',
                                    'menu_class' => 'menu-item'
                                ]) ?>
                            </nav>
                        </div>


                        <div class="button_cta_menu col-auto">
                            <button class="btn btn-primary">Start Learning</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </header>