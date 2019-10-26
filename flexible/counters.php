<section class="pdm counters">
    <div class="container">
        <div class="counters">
           <?php $counters = get_sub_field("counter");?>
            <?php for($counters as $counter) : ?>
                <div class="counter">
                    <span class="title"><?php echo counter["title"]; ?></span>
                    <span class="title"><?php echo counter["title"]; ?></span>
                    <span class="title"><?php echo counter["small_text"]; ?></span>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>