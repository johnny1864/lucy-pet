<section class="hero pdm color" style="background-image: url(<?php echo get_sub_field('image');  ?>);">
    <div class="container">
        <h1 class="heading1"><?php echo  get_sub_field('heading'); ?></h1>
        <p><?php echo get_sub_field('content'); ?></p>

        <?php if(get_sub_field('cta_link')) : ?>
        <p>
            <a class="btn" href="<?php echo get_sub_field('cta_link'); ?>">
                <?php echo get_sub_field('cta'); ?>
            </a>
        </p>
        <?php endif; ?>
    </div>
</section>