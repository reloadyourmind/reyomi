<?php /* 
This page is used to display the static frontpage. 
*/

// Fetch theme header template
get_header(); ?>
<!-- content
	================================================== -->
	<section class="s-content s-content--single">
		<div class="row">
			<div class="column large-12">

				<article class="s-post entry format-standard">

					<div class="s-content__media">
						<div class="s-content__post-thumb">
							<img src="images/thumbs/single/standard/standard-1050.jpg" srcset="images/thumbs/single/standard/standard-2100.jpg 2100w, 
							images/thumbs/single/standard/standard-1050.jpg 1050w, 
							images/thumbs/single/standard/standard-525.jpg 525w" sizes="(max-width: 2100px) 100vw, 2100px" alt="">
						</div>
					</div> <!-- end s-content__media -->

					<div class="s-content__primary">

						<h2 class="s-content__title s-content__title--post"><?php the_title(); ?></h2>

						<ul class="s-content__post-meta">
							<li class="date"><?php echo get_the_date();?></li>
							<li class="cat"><a href="">Frontend</a><a href="">Design</a></li>
						</ul>

						<p class="lead">

						</p>

						<p>
							<img src="images/sample-1050.jpg" srcset="images/sample-2100.jpg 2100w, 
							images/sample-1050.jpg 1050w, 
							images/sample-525.jpg 525w" sizes="(max-width: 2100px) 100vw, 2100px" alt="">
						</p>

						<?php the_content();?>


						<p class="s-content__post-tags">
							<span>Tagged in :</span>
							<a href="#">orci</a><a href="#">lectus</a><a href="#">varius</a><a href="#">turpis</a>
						</p>

						<div class="s-content__author">
							<img src="images/avatars/user-06.jpg" alt="">

							<div class="about">
								<h5><a href="#"><?php echo get_the_author();?></a></h5>

								<p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>

								<ul class="author-social">
									<li><a href="#0">Facebook</a></li>
									<li><a href="#0">Twitter</a></li>
									<li><a href="#0">Dribbble</a></li>
									<li><a href="#0">Instagram</a></li>
								</ul>
							</div>
						</div> <!-- end s-content__author -->


						<div class="s-content__pagenav group">
							<div class="prev-nav">
								<a href="#" rel="prev">
									<span>Previous</span>
									Tips on Minimalist Design 
								</a>
							</div>
							<div class="next-nav">
								<a href="#" rel="next">
									<span>Next</span>
									Less Is More 
								</a>
							</div>
						</div> <!-- end s-content__pagenav -->

					</div> <!-- end s-content__primary -->
				</article>

			</div> <!-- end column -->
		</div> <!-- end row -->

	</section>
	<!-- end s-content -->

	<?php get_footer(); ?>