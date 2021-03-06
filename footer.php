            </main>
            <footer class="footer text-center">
                <div class="container">
                    <div class="row">
                        <!-- Footer Location-->
                        <?php if (!empty(get_field('footer_location_title')) || !empty(get_field('address_line_1')) || !empty(get_field('city')) || !empty(get_field('state')) || !empty(get_field('post_code'))): ?>
                        <div class="col-lg mb-5 mb-lg-0">
                            <h3 class="text-uppercase mb-4"><?php the_field('footer_location_title') ?></h3>
                            <p class="lead mb-0">
                                <?php the_field('address_line_1') ?>
                                <?php if (get_field('address_line_2')): ?>
                                <br />
                                <?php the_field('address_line_2') ?>
                                <?php endif; ?>
                                <br>
                                <?php if (get_field('city') || get_field('state')): ?>
                                <?php the_field('city') ?>, <?php the_field('state') ?>
                                <?php endif; ?>
                                <?php if (get_field('post_code')): ?>
                                <?php the_field('post_code') ?>
                                <?php endif; ?>
                            </p>
                        </div>
                        <?php endif; ?>
                        <!-- Footer Social Icons-->
                        <div class="col-lg mb-5 mb-lg-0">
                            <?php if (get_field('socials_title')): ?>
                            <h3 class="text-uppercase mb-4"><?php the_field('socials_title')?></h3>
                            <?php endif; ?>
                            <?php 
                            $socialAccounts = acf_get_fields('group_social_options');
                            foreach ($socialAccounts as $field) {
                                // skip title or empty fields
                                $platform = $field['name'];

                                if ($platform == 'socials_title' || empty(get_field($platform))) {
                                    continue;
                                }
                            ?>
                            <a class="btn btn-outline-light btn-social mx-1" href="https://<?php the_field($platform)?>"
                                target="_blank"><i class="fab fa-fw fa-<?= esc_html( $platform )?>-f"></i></a>
                            <?php
                            }; 
                            ?>
                        </div>
                        <!-- Footer About Text-->
                        <?php 
                        function fieldsAreSet($group) {
                            $group = acf_get_fields($group);
                            foreach ($group as $value ) {
                                if (!empty(get_field($value['key']))) {
                                    return true;
                                }
                            } return false;
                        } 

                        if (fieldsAreSet('group_business_information')):
                        ?>
                        <div class="col-lg">
                            <h3 class="text-uppercase mb-4"><?php the_field('footer_about_title'); ?></h3>
                            <p class="lead mb-0">
                                <?php the_field('footer_about_description') ?>
                                <?php 
                                $about_link = get_field('action_button_url');
                                if( $about_link ): 
                                    $about_link_url = $about_link['url'];
                                    $about_link_title = $about_link['title'];
                                    $about_link_target = $about_link['target'] ? $about_link['target'] : '_self';
                                ?>
                                <?php endif; ?>
                                <a href="<?php esc_url($about_link_url); ?>"
                                    target="<?php esc_url($about_link_target)?>"><?php esc_html($about_link_title); ?></a>
                                .
                            </p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </footer>
            <!-- Copyright Section-->
            <div class="copyright py-4 text-center text-white">
                <div class="container"><small>Copyright © <?php esc_html(bloginfo( 'name' )) ?> 2020 -
                        <?php echo (date("Y")) ?></small>
                </div>
                <div class="container">
                    <small>Website by <a href="http://pcwebsites.com.au" target="_blank" rel="noopener noreferrer">Perth
                            Custom Websites</a></small>
                </div>
            </div>


            <?php wp_footer(); ?>
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <script src="<?php /* echo get_stylesheet_directory_uri(); */?>/inc/assets/js/scripts.js"></script> -->
            </div> <!-- end site div -->
            </body>

            </html>