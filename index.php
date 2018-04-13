<?php get_header(); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Blog</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">

			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post(); ?>
                        <article>
                                    <div class="post-image">
                                          <div class="post-heading">
                                                <h3><a href="#"><?php the_title(); ?></a></h3>
                                          </div>
                                         <?php the_post_thumbnail('blog-img', array('class' => ' img-responsive')); ?>
                                    </div>
                                    <p><?php echo wp_trim_words(get_the_content(), 25, '...'); ?></p>
                                    <div class="bottom-article">
                                          <ul class="meta-post">
                                                <li><i class="icon-calendar"></i> <?php the_time('F d, Y'); ?> </li>
                                                <li><i class="icon-user"></i> <?php the_author_posts_link(); ?> </li>
                                                <li><i class="icon-comments"></i> <?php comments_popup_link( 'No Comments', '1 Comments', '% Comments', 'rubel', 'Comments Off' ); ?> </li>
                                          </ul>
                                          <a href="<?php the_permalink(); ?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
                                    </div>
                        </article>


				<?php }
			}else{
				echo "No Post here";
			}
			 ?>

				<div id="pagination">
				<?php 
				the_posts_pagination( array(
					'prev_text' => __( 'Previous page', 'corlate' ),
					'next_text' => __( 'Next page', 'corlate' ),
				) );
				?>	
				</div>

			</div>


			<div class="col-lg-4">
			<?php get_sidebar(); ?>

			</div>
		</div>
	</div>
	</section>

	<?php get_footer(); ?>