<article class="<?php echo($post_status); ?>">
    <div class="row">

        <div class="three-quarters post">
            <h2><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h2>

            <?php echo($post_intro); ?>


            <ul class="horizontal">
                <li>Written by: <?php echo($post_author); ?></li>
                <li><?php echo($published_date); ?></li>
                <li>Category: <a href="<?php echo($post_category_link); ?>"><?php echo($post_category); ?></a></li>
                <li></li>
            </ul>

            <ul class="horizontal">
                <?php if ($category) { ?>
                <li><a class="button" href="<?php echo($blog_url); ?>">More Articles</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</article>
