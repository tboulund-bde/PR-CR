<?php
function blog_theme_load_resources() {
    // Load stylesheets
    wp_enqueue_style("blog-theme-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("blogging-style", get_template_directory_uri() . "/blog.css");
}
add_action("wp_enqueue_scripts", "blog_theme_load_resources");