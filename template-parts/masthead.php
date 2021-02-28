
        <!-- MASTHEAD -->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <?php 
                $avatar = get_field('avatar');
                if( !empty( $avatar ) ): ?>
                <img class="masthead-avatar mb-5 rounded-circle" src="<?php echo esc_url($avatar['url']); ?>"
                    alt="<?php echo esc_attr($avatar['alt']); ?>" />
                <?php endif; ?>
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">
                <?php
                    if (!empty (get_field('page_title'))) {
                        the_field('page_title'); 
                        # code...
                    } else {
                        echo esc_html( get_the_title() );
                    }
                 ?>
                </h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <?php 
                $tag_line = get_field('tag_line');
                if( !empty( $tag_line ) ): ?>
                <p class="masthead-subheading font-weight-light mb-0">
                    <?php the_field('tag_line'); ?>
                </p>
                <?php endif; ?>
            </div>

        </header>
        <!-- END MASTHEAD -->
        