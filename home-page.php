<?php 
// Template Name: Home Template
get_header(); ?>
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">

            <?php
				// Slider Query
				$slider_query = new WP_Query( array(
						'post_type'					=> 'slider',
						'posts_per_page'			=> -1,
					) );

				// The Loop
				if ( $slider_query->have_posts() ) {
					while ( $slider_query->have_posts() ) {
						$slider_query->the_post(); 
						$slider_image 		= get_post_meta(get_the_ID(), '_moderna_slider_image', true);
						$slider_description = get_post_meta(get_the_ID(), '_moderna_slider_description', true);
						$slider_url 		= get_post_meta(get_the_ID(), '_moderna_slider_url', true);
						?>

              <li>
                <img src="<?php echo $slider_image; ?>" alt="" />
                <div class="flex-caption">
                    <h3><?php the_title(); ?></h3> 
					<p><?php echo $slider_description; ?></p> 
					<a href="<?php echo $slider_url; ?>" target="_blank" class="btn btn-theme">Learn More</a>
                </div>
              </li>







					<?php }
					/* Restore original Post Data */
					wp_reset_postdata();
				} else { ?>
					 <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Modern Design</h3> 
					<p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p> 
					<a href="#" target="_blank" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Fully Responsive</h3> 
					<p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/slides/3.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Clean & Fast</h3> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
				<?php }
			?>


             
              
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
		</section>


	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>Moderna</span> HTML Business Template</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">

  			<?php
				// Slider Query
				$service_query = new WP_Query( array(
						'post_type'					=> 'home_service',
						'posts_per_page'			=> -1,
					) );

				// The Loop
				if ( $service_query->have_posts() ) {
					while ( $service_query->have_posts() ) {
						$service_query->the_post(); 

						$service_icon = get_post_meta(get_the_ID(), '_moderna_service_icon', true);
						$service_description = get_post_meta(get_the_ID(), '_moderna_service_description', true);
						$service_url = get_post_meta(get_the_ID(), '_moderna_service_url', true);
						?>


					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4><?php the_title(); ?></h4>
								<div class="icon">
								<i class="fa <?php echo $service_icon; ?> fa-3x" aria-hidden="true"></i>
								</div>
								<p>
								 <?php echo $service_description;  ?>
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="<?php echo $service_url; ?>">Learn more</a>
							</div>
						</div>
					</div>


				







				<?php }
					/* Restore original Post Data */
					wp_reset_postdata();
				} else { ?>
					
          
          <div class="col-lg-3">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Fully responsive</h4>
                <div class="icon">
                <i class="fa fa-desktop fa-3x"></i>
                </div>
                <p>
                 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                </p>
                  
              </div>
              <div class="box-bottom">
                <a href="#">Learn more</a>
              </div>
            </div>
          </div>


          <div class="col-lg-3">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Modern Style</h4>
                <div class="icon">
                <i class="fa fa-pagelines fa-3x"></i>
                </div>
                <p>
                 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                </p>

              </div>
              <div class="box-bottom">
                <a href="#">Learn more</a>
              </div>
            </div>
          </div>


          <div class="col-lg-3">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Customizable</h4>
                <div class="icon">
                <i class="fa fa-edit fa-3x"></i>
                </div>
                <p>
                 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                </p>
                  
              </div>
              <div class="box-bottom">
                <a href="#">Learn more</a>
              </div>
            </div>
          </div>


          <div class="col-lg-3">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>Valid HTML5</h4>
                <div class="icon">
                <i class="fa fa-code fa-3x"></i>
                </div>
                <p>
                 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
                </p>
                  
              </div>
              <div class="box-bottom">
                <a href="#">Learn more</a>
              </div>
            </div>
          </div>

				<?php }
			?>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">



  				<?php
				// Slider Query
				$portfolio_query = new WP_Query( array(
						'post_type'					=> 'portfolio',
						'posts_per_page'			=> -1,
						'order'						=> 'ASC',

					) );

				// The Loop
				if ( $portfolio_query->have_posts() ) {
					while ( $portfolio_query->have_posts() ) {
						$portfolio_query->the_post(); 

						$portfolio_image = get_post_meta(get_the_ID(), '_moderna_portfolio_image', true);
						$portfolio_description = get_post_meta(get_the_ID(), '_moderna_portfolio_description', true);
						?>

						<!-- Item Project and Filter Name -->
						<li class="col-lg-3 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php the_title(); ?>" href="<?php echo $portfolio_image; ?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo $portfolio_image; ?>" alt="<?php echo $portfolio_description; ?>">
						</div>
						</li>
						<!-- End Item Project -->

						

				<?php }
					/* Restore original Post Data */
					wp_reset_postdata();
				} else { ?>
					
          

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