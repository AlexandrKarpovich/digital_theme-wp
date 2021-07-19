<?php

if (!defined('ABSPATH')) {
    return;
}

/**
 * @var array $args Passed arguments
 */




?>

<section class="main-screen">
    <div class="container">
        <div class="main-screen__inner">
            <div class="text-block">
                <h1 class="title"><?php echo $args['tittle']; ?>
                <p id="demo"></p>
                </h1>
                <div class="subtitle"><?php echo $args['subtitle']; ?></div>
                <div class="btn"><a href="<?php var_dump($args['button']); ?>"></a></div>
            </div>
            <div class="image-block">
                <div class="image-block__bg"></div>
            </div>
            <div class="main-screen-scroll-svg">
                <svg class="animate__animated animate__bounce" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewbox="0 0 24 24"><title>Далее</title>
                    <polyline fill="none" stroke="#3A4A59" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" points=".222 4.222 15.778 4.222 15.778 19.778"
                              transform="rotate(45 8 12)"></polyline>
                </svg>
            </div>
        </div>
    </div>
</section>



