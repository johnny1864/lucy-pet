<section class="pdm image-content-blocks">
    <div class="container">    
        <h2 class="heading2">
            <?php the_sub_field('heading'); ?>
        </h2>
    
        <div class="the-blocks">
            <?php $blocks = get_sub_field('blocks'); ?>
            <?php foreach( $blocks as $block ){ ?>
            <div class="block">
                <div class="right">
                    <img src="<?php echo $block['image']; ?>" alt="">
                </div>
                <div class="left">
                    <div class="wrapper">
                        <h3>
                            <?php echo $block['heading']; ?>
                        </h3>
                        <?php echo $block['content']; ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <p>
        <?php if($block['cta_link']) : ?>
            <a class="btn" href="<?php echo $block['cta_link']; ?>"><?php echo $block['cta']; ?></a>
        <?php endif; ?>
        </p>
    </div>
</section>
