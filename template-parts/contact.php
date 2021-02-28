<?php while ( have_posts() ) : the_post(); ?>
<section class="lillian-pt-6" id="content">
<div class="container">
        <div class="row">

            <div class="col-lg-8 mx-auto">
                <div class="lead">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
</div>
</section>
        <?php endwhile; // End of the loop. ?>

        <!-- Contact Section Form-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <?php 
                echo do_shortcode(
                    '[contact-form-7 title="Contact form 1"]'
                );
                ?>
            </div>
        </div>
    </div>
</section>