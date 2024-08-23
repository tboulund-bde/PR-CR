<?php get_header(); ?>
    <div class="container">
        <div class="content">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>

                    <?php
                    $url = get_permalink();
                    $title = get_the_title();
                    $date = get_the_date();
                    $author = get_the_author();
                    $categories = get_the_category();
                    $tags = get_the_tags();
                    $excerpt = get_the_excerpt();
                    ?>

                    <article>
                        <h2><a href="<?php echo $url; ?>"><?php echo $title; ?></a></h2>
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
                        <?php echo $excerpt ?>
                    </article>

                <?php endwhile; ?>

                <?php
                // Pagination
                $pagination_args = array(
                    'prev_text' => __('« Previous'),
                    'next_text' => __('Next »'),
                );
                echo "<div class='pagination'>" . paginate_links($pagination_args) . "</div>";
                ?>

            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>
