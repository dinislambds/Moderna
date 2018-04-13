<?php 
// Template Name: Portfolio Template
get_header(); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Portfolio</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">All</a></li>
					<?php 
					$terms = get_terms( 'portfolio_cate', array(
						    'hide_empty' => false,
						) );
					if ( is_array($terms) ) {
						
					foreach ($terms as $key => $term) {
						echo '<li class="'.$term->slug.'"><a href="#" title="">'.$term->name.'</a></li>';
					}
					} else{ ?>
                              <li class="all active"><a href="#">All</a></li>
                              <li class="web"><a href="#" title="">Web design</a></li>
                              <li class="icon"><a href="#" title="">Icons</a></li>
                              <li class="graphic"><a href="#" title="">Graphic design</a></li>
					<?php }
					?>
				</ul>
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">


                        <?php
				// portfolio Query
				$portfolio_query = new WP_Query( array(
						'post_type'					=> 'portfolio',
						'posts_per_page'			=> -1,
					) );

				// The Loop
				if ( $portfolio_query->have_posts() ) {
					while ( $portfolio_query->have_posts() ) {
						$portfolio_query->the_post(); 
						$portfolio_cate = get_the_terms( get_the_ID(), 'portfolio_cate' );
						$portfolio_image = get_post_meta(get_the_ID(), '_moderna_portfolio_image', true);
						$portfolio_description = get_post_meta(get_the_ID(), '_moderna_portfolio_description', true);
						?>



						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="<?php foreach ($portfolio_cate as $key => $single_cate_value) {
							echo $single_cate_value->slug;
						} ?>">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php the_title(); ?>" href="<?php echo $portfolio_image; ?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo $portfolio_image; ?>" alt="<?php echo $portfolio_description; ?>">
						</li>
						<!-- End Item Project -->





					<?php }
					/* Restore original Post Data */
					wp_reset_postdata();
				} else { ?>
					

                              
                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_template_directory_uri(); ?>/img/works/1.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_template_directory_uri(); ?>/img/works/2.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="graphic">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_template_directory_uri(); ?>/img/works/3.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_template_directory_uri(); ?>/img/works/4.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs col-lg-3 photography" data-id="id-4" data-type="web">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_template_directory_uri(); ?>/img/works/5.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/5.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs col-lg-3 photography" data-id="id-5" data-type="icon">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_template_directory_uri(); ?>/img/works/6.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/6.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_template_directory_uri(); ?>/img/works/7.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/7.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="graphic">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_template_directory_uri(); ?>/img/works/8.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/8.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </li>
                                    <!-- End Item Project -->

                                    


				<?php }
			?>



					</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
	</section>


	<?php get_footer(); ?>