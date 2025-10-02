<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">Comments</h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                "style" => "ol",
                "short_ping" => true,
            ));
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

        <div class="comments-pagination">
            <?php
            $pagination_args = array(
                "prev_text" => __("« Previous"),
                "next_text" => __("Next »"),
            );
            paginate_comments_links($pagination_args);
            ?>
        </div>

    <?php endif; ?>

    <?php if(comments_open()): ?>
        <?php comment_form(); ?>
    <?php else: ?>
        <p class="no-comments">Comments are closed</p>
    <?php endif; ?>

    

</div>
