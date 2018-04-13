<?php 
// Template Name: Pricing Box Template
get_header(); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Features</a><i class="icon-angle-right"></i></li>
					<li class="active">Pricing box</li>
				</ul>
			</div>
		</div>
	</div>

	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Example on <strong>3 columns</strong></h4>
			</div>

              <?php
              $x=0;
				// Pricing 3 Query
				$pricing_box_3_query = new WP_Query( array(
						'post_type'					=> 'pricing_box_3_column',
						'posts_per_page'			=> -1,
					) );

				// The Loop
				if ( $pricing_box_3_query->have_posts() ) {
					while ( $pricing_box_3_query->have_posts() ) {
						$pricing_box_3_query->the_post(); 
						$x++;
						$pricing_money = get_post_meta(get_the_ID(), '_moderna_pricing_money', true);
						$pricing_register_url = get_post_meta(get_the_ID(), '_moderna_pricing_register_url', true);
						?>

			
                  <div class="col-lg-4">
                        <div class="pricing-box-alt <?php if ($x == 2) {
                        	echo 'special';
                        } ?>">
                              <div class="pricing-heading">
                                    <h3> <strong><?php the_title(); ?></strong></h3>
                              </div>
                              <div class="pricing-terms">
                                    <h6><?php echo $pricing_money; ?></h6>
                              </div>
                              <div class="pricing-content">
                                    <?php the_content(); ?>
                              </div>
                              <div class="pricing-action">
                                    <a href="<?php echo $pricing_register_url; ?>" target="_blank" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                              </div>
                        </div>
                  </div>




					<?php }
					/* Restore original Post Data */
					wp_reset_postdata();
				} else { ?>
					

                  <div class="col-lg-4">
                        <div class="pricing-box-alt">
                              <div class="pricing-heading">
                                    <h3>Very <strong>Basic</strong></h3>
                              </div>
                              <div class="pricing-terms">
                                    <h6>&#36;15.00 / Month</h6>
                              </div>
                              <div class="pricing-content">
                                    <ul>
                                          <li><i class="icon-ok"></i> 100 applications</li>
                                          <li><i class="icon-ok"></i> 24x7 support available</li>
                                          <li><i class="icon-ok"></i> No hidden fees</li>
                                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                              </div>
                              <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                              </div>
                        </div>
                  </div>

                  <div class="col-lg-4">
                        <div class="pricing-box-alt special">
                              <div class="pricing-heading">
                                    <h3>Good <strong>Choice</strong></h3>
                              </div>
                              <div class="pricing-terms">
                                    <h6>&#36;25.00 / Month</h6>
                              </div>
                              <div class="pricing-content">
                                    <ul>
                                          <li><i class="icon-ok"></i> 100 applications</li>
                                          <li><i class="icon-ok"></i> 24x7 support available</li>
                                          <li><i class="icon-ok"></i> No hidden fees</li>
                                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                              </div>
                              <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                              </div>
                        </div>
                  </div>

                  <div class="col-lg-4">
                        <div class="pricing-box-alt">
                              <div class="pricing-heading">
                                    <h3>Just <strong>Happy</strong></h3>
                              </div>
                              <div class="pricing-terms">
                                    <h6>&#36;35.00 / Month</h6>
                              </div>
                              <div class="pricing-content">
                                    <ul>
                                          <li><i class="icon-ok"></i> 100 applications</li>
                                          <li><i class="icon-ok"></i> 24x7 support available</li>
                                          <li><i class="icon-ok"></i> No hidden fees</li>
                                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                              </div>
                              <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                              </div>
                        </div>
                  </div>

					<?php } ?>


		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<div class="row">
			<div class="col-lg-12">
				<h4>Example on <strong>4 columns</strong></h4>
			</div>



              <?php
				// Pricing 3 Query
				$pricing_box_4_query = new WP_Query( array(
						'post_type'					=> 'pricing_box_4_column',
						'posts_per_page'			=> -1,
					) );

				// The Loop
				if ( $pricing_box_4_query->have_posts() ) {
					while ( $pricing_box_4_query->have_posts() ) {
						$pricing_box_4_query->the_post(); 

						$pricing_money_4 		= get_post_meta( get_the_ID(), '_moderna_pricing_money_4', true);
						$pricing_register_url_4 = get_post_meta( get_the_ID(), '_moderna_pricing_register_url_4', true);
						?>

			



                  <div class="col-lg-3">
                        <div class="pricing-box-alt special">
                              <div class="pricing-heading">
                                    <h3> <strong><?php the_title(); ?></strong></h3>
                              </div>
                              <div class="pricing-terms">
                                    <h6><?php echo $pricing_money_4; ?></h6>
                              </div>
                              <div class="pricing-content">
                                    <?php the_content(); ?>
                              </div>
                              <div class="pricing-action">
                                    <a href="<?php echo $pricing_register_url_4; ?>" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                              </div>
                        </div>
                  </div>






					<?php }
					/* Restore original Post Data */
					wp_reset_postdata();
				} else { ?>


				


                  <div class="col-lg-3">
                        <div class="pricing-box-alt">
                              <div class="pricing-heading">
                                    <h3>Very <strong>Basic</strong></h3>
                              </div>
                              <div class="pricing-terms">
                                    <h6>&#36;15.00 / Month</h6>
                              </div>
                              <div class="pricing-content">
                                    <ul>
                                          <li><i class="icon-ok"></i> 100 applications</li>
                                          <li><i class="icon-ok"></i> 24x7 support available</li>
                                          <li><i class="icon-ok"></i> No hidden fees</li>
                                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                              </div>
                              <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                              </div>
                        </div>
                  </div>


                  <div class="col-lg-3">
                        <div class="pricing-box-alt">
                              <div class="pricing-heading">
                                    <h3>Simple <strong>Choice</strong></h3>
                              </div>
                              <div class="pricing-terms">
                                    <h6>&#36;20.00 / Month</h6>
                              </div>
                              <div class="pricing-content">
                                    <ul>
                                          <li><i class="icon-ok"></i> 100 applications</li>
                                          <li><i class="icon-ok"></i> 24x7 support available</li>
                                          <li><i class="icon-ok"></i> No hidden fees</li>
                                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                              </div>
                              <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                              </div>
                        </div>
                  </div>

                  <div class="col-lg-3">
                        <div class="pricing-box-alt special">
                              <div class="pricing-heading">
                                    <h3>Special <strong>Choice</strong></h3>
                              </div>
                              <div class="pricing-terms">
                                    <h6>&#36;15.00 / Month</h6>
                              </div>
                              <div class="pricing-content">
                                    <ul>
                                          <li><i class="icon-ok"></i> 100 applications</li>
                                          <li><i class="icon-ok"></i> 24x7 support available</li>
                                          <li><i class="icon-ok"></i> No hidden fees</li>
                                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                              </div>
                              <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                              </div>
                        </div>
                  </div>

                  <div class="col-lg-3">
                        <div class="pricing-box-alt">
                              <div class="pricing-heading">
                                    <h3>Just <strong>Happy</strong></h3>
                              </div>
                              <div class="pricing-terms">
                                    <h6>&#36;15.00 / Month</h6>
                              </div>
                              <div class="pricing-content">
                                    <ul>
                                          <li><i class="icon-ok"></i> 100 applications</li>
                                          <li><i class="icon-ok"></i> 24x7 support available</li>
                                          <li><i class="icon-ok"></i> No hidden fees</li>
                                          <li><i class="icon-ok"></i> Free 30-days trial</li>
                                          <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                              </div>
                              <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                              </div>
                        </div>
                  </div>


				 <?php }?>
					






		</div>
	</div>
	</section>

	<?php get_footer(); ?>