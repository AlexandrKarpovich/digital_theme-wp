<?php

if (!defined('ABSPATH')) {
    return;
}

/**
 * @var array $args Passed arguments
 */

?>

<section class="main-screen-2">
    <div class="container">
        <div class="main-screen-2__inner">
            <div class="text-block"><h2 class="title"><?= $args['tittle'];  ?> </h2>
                <div class="subtitle"><?= $args['subtitle'];  ?> </div>
                <div class="btn"><a href="/"><?= $args['button'];  ?> </a></div>
                <div class="bg-yellow"></div>
            </div>
        </div>
    </div>
</section>
