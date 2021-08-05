<?php

/**
 * @var array $args Passed arguments
 */

?>

<section class="text-section <?php echo $args['class']; ?>" style="background-image: url('<?php echo $args['bg-img']; ?>')">
    <div class="container">
        <div class="text-block__inner">
            <?php if(!empty($args['subtitle'])) : ?><div class="subtitle"><h2 class="title"><?php echo $args['subtitle']; ?></div> <?php endif; ?>
            <?php if(!empty($args['title'])) : ?><h2 class="title"><h2 class="title"><?php echo $args['title'] ?></h2><?php endif; ?>
            <?php if(!empty($args['button']['title'])) : ?><div class="btn yellow"><a class="btn__link" href="<?php echo $args['button']['url'] ?>"><?php echo $args['button']['title'] ?></a></div><?php endif; ?>
        </div>
    </div>
</section>
