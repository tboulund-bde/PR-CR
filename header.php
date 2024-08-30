<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
</head>
<body>
    <header>
        <div class="container">
            <h1><?php bloginfo("name"); ?></h1>
            <p><?php bloginfo("description"); ?></p>
        </div>
        </div>
        <?php
        wp_nav_menu(array(
            "theme_location" => "primary",
            "container" => "nav",
            "container_class" => "main-nav",
            "menu_class" => "",
        ));
        ?>
    </header>
