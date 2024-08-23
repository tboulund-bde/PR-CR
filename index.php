<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

            <?php
            $heroTitle = get_field("hero_title");
            $heroText = get_field("hero_text");
            $aboutTitle = get_field("about_title");
            $aboutContent = get_field("about_content");
            $servicesTitle = get_field("services_title");
            $servicesContent = get_field("services_content");
            $contactTitle = get_field("contact_title");
            $contactContent = get_field("contact_content");
            ?>

            <div class="container">
                <!-- Hero Section -->
                <section class="hero">
                    <h1><?php echo $heroTitle; ?></h1>
                    <p><?php echo $heroText; ?></p>
                </section>

                <!-- About Section -->
                <section class="about">
                    <h2><?php echo $aboutTitle; ?></h2>
                    <p><?php echo $aboutContent; ?></p>
                </section>
                
                <!-- Services Section -->
                <section class="services">
                    <h2><?php echo $servicesTitle; ?></h2>
                    <p><?php echo $servicesContent; ?></p>
                </section>

                <!-- Contact Section -->
                <section class="contact">
                    <h2><?php echo $contactTitle; ?></h2>
                    <p><?php echo $contactContent; ?></p>
                </section>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>