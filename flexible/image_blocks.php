<section class="pdm image-blocks">
    <div class="container">

        <h2 class=" heading2">
            <?php the_sub_field('heading') ?>
        </h2>
        <div class="blocks">
            <?php $blocks = get_sub_field('blocks') ?>
            <?php foreach($blocks as $block) :  ?>

            <div class="block">
                <figure>
                    <img src="<?php echo $block['image']; ?>" alt="">
                </figure>
                <p class="title">
                    <?php echo $block['title']; ?>
                </p>
                <div class="content">
                   <?php if($block['cta_link']) : ?><a class="btn" href="<?php echo $block['cta_link']; ?>"><?php echo $block['cta']; ?></a>
					<?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
