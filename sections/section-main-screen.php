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
        <div class="main-screen__inner <?= $args["block"]['class']; ?>">
            <div class="box text-block">
                <h1 class="title"><?= $args["block"]['title']; ?>
                    <div id="typed-strings"><span>Google</span><span>Yandex</span><span>Facebook</span></div>
                    <div class="text-typing"><span id="typed"></span></div>
                </h1>
                <div class="subtitle"><?= $args["block"]['subtitle']; ?></div>
                <div class="btn"><a class="btn__link" href="<?= $args["block"]['button']['url']; ?>"><?= $args["block"]['button']['title']; ?></a></div>
            </div>
            <div class="box image-block">
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

        <div class="main-screen__inner screen-2">
            <div class="text-block">
                <h4 class="title"><?= $args["block_2"]['title']; ?></h4>
                <div class="subtitle"><?= $args["block_2"]['subtitle']; ?></div>
                <div class="btn"><a class="btn__link" href="<?= $args["block_2"]['button']['url']; ?>"><?= $args["block_2"]['button']['title']; ?></a></div>
                <div class="bg-yellow"></div>
            </div>
        </div>
    </div>
</section>


