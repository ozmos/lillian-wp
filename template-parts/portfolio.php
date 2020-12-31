<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            <?php the_field('portfolio_title');?></h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">

            <?php 
            function isPortfolioItem($value) {
                if ($value['name'] == 'portfolio_title' || $value['name'] == 'portfolio_tagline') {
                    return false;
                } else {
                    return true;
                }
            }
            $portfolioItems = array_filter(acf_get_fields('group_portfolio_options'), 'isPortfolioItem'); 
            $len = (count($portfolioItems) / 3); 
        ?>
            <?php for ($key = 1; $key <= $len; $key++):
       
        $itemTitle = 'title_' . $key; 
        $itemImage = 'image_' . $key;  
        $itemDescription = 'description_' . $key; 
        
        if ($itemTitle == '') continue;
        ?>
            <!-- portfolio item <?= $key ?>-->
            <div class="col-md-6 col-lg-4 mb-5">

                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal<?= $key ?>">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i
                                class="fas fa-plus fa-3x"></i></div>
                    </div>

                    <figure>
                        <img class="img-fluid" src="<?php the_field($itemImage) ?>" alt="" />
                        <figcaption>
                            <h3 class="text-center text-secondary"><?php the_field($itemTitle); ?></h3>
                        </figcaption>
                    </figure>

                </div>
            </div>
            <!-- modal <?= $key ?>-->
            <div class="portfolio-modal modal fade" id="portfolioModal<?= $key ?>" tabindex="-1" role="dialog"
                aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                            id="portfolioModal1Label"><?php the_field($itemTitle) ?></h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <!-- <img class="img-fluid rounded mb-5" src="<?php /* the_field($itemImage) */?>" alt="" /> -->
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-5"><?php the_field($itemDescription) ?></p>

                                        <button class="btn btn-primary" data-dismiss="modal">
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end portfolio item <?= $key ?> -->
            <?php endfor; ?>
        </div>
        <!-- Pricing -->
        <?php // if (pricing): ?>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3 class="lead text-center font-italic">
                    Lessons start at <strong class="">$25</strong> for a weekday class. Lessons last 45 minutes.
                </h3>
            </div>
        </div>
        <?php //endif; ?>
    </div>
</section>