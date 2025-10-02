<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

            <?php
            $title = get_the_title();
            $date = get_the_date();
            $author = get_the_author();
            $content = get_the_content();
            $categories = get_the_category();
            $tags = get_the_tags();
            ?>

            <div class="container">
                <article>
                    <h2><?php echo $title; ?></h2>
                    <div class="post-meta">
                        <span>Posted on <?php echo $date; ?> by <?php echo $author; ?></span> | 
                            <span>Categories: </span>
                            <?php if($categories): ?>
                                <?php foreach($categories as $category): ?>
                                    <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                                <?php endforeach; ?> | 
                            <?php endif; ?>
                            <span>Tags: </span>
                            <?php if($tags): ?>
                                <?php foreach($tags as $tag): ?>
                                    <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                    </div>
                    <?php echo $content; ?>
                </article>

                <div class="comments-section">
                    <?php
                    if(comments_open() || get_comments_number()):
                        comments_template();
                    endif;
                    ?>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>