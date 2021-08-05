<?php

/**
 * @var array $args Passed arguments
 */

?>

<section class="two-blocks">
    <div class="container">
        <div class="two-blocks__inner">
            <?php foreach ($args['block'] as $key => $block) : ?>
                <div class="box">
                    <?php if(!empty($block['img'])) : ?><img class="img-box" src="<?php echo $block['img'] ?>"><?php endif; ?>
                    <?php if(!empty($block['title'])) : ?><h4 class="title"><?php echo $block['title'] ?></h4><?php endif; ?>
                    <?php if(!empty($block['subtitle'])) : ?><p><?php echo $block['subtitle']; ?></p><?php endif; ?>
                    <?php if(!empty($block['button']['title'])) : ?><div class="btn-2">
                        <a class="btn-2__link" href="<?php echo $block['button']['url']; ?>"><?php echo $block['button']['title']; ?><span class="btn-2__arrow">
                        <svg width="21" height="11" viewbox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 5.38462H20M20 5.38462L15.25 1M20 5.38462L15.25 10" stroke="black" stroke-width="1.5"  stroke-linecap="round" stroke-linejoin="round"></path></svg></span></a>
                    </div><?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
