<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white"><?php the_field('about_title') ?></h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-8 mx-auto"><p class="lead"><?php the_field('about_description') ?></p></div>
            <!-- <div class="col-lg-4 mr-auto"><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div> -->
        </div>
        <!-- About Section Button-->
        <?php
        $link = get_field('action_button_url');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
 
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                <i class="fas fa-download mr-2"></i>
                <?php echo esc_html( $link_title ); ?> 
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>