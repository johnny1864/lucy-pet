<section class="pdm icon-blocks">
    <div class="container">

        <h2 class=" heading2">
            <?php the_sub_field('heading') ?>
        </h2>
        <div class="blocks">
            <?php $blocks = get_sub_field('blocks') ?>
            <?php foreach($blocks as $block) :  ?>

            <div class="block">
                <figure>
                    <img src="<?php echo $block['icon']; ?>" alt="">
                </figure>
                <p class="title">
                    <?php echo $block['title']; ?>
                </p>
                <div class="content">
                    <?php echo $block['content']; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
