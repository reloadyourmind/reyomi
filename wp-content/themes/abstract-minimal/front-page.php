<?php /* 
This page is used to display the static frontpage. 
*/

// Fetch theme header template
get_header(); ?>
<div id="primary">

	<div class="reyomi-homepage-container"> 

		<section class="s-bricks">

			<div class="masonry">
				<div class="bricks-wrapper h-group" style="position: relative; height: 2212px;">

					<div class="grid-sizer"></div>

					<div class="brick entry featured-grid" style="position: absolute; left: 0%; top: 0px;">
						<div class="entry__content">

							<div class="featured-post-slider slick-initialized slick-slider">

								<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2040px;"><div class="featured-post-slide slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 680px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
									<div class="f-slide">

										<div class="f-slide__background" style="background-image:url('wp-content/themes/abstract-minimal/assets/images/thumbs/featured/featured-1.jpg');"></div>
										<div class="f-slide__overlay"></div>

										<div class="f-slide__content">
											<ul class="f-slide__meta">
												<li>September 06, 2020</li> 
												<li><a href="#" tabindex="0">Naruto Uzumaki</a></li>
											</ul>	

											<h1 class="f-slide__title"><a href="single-standard.html" title="" tabindex="0">A Practical Guide to a Minimalist Lifestyle.</a></h1> 
										</div>

									</div> <!-- f-slide -->
								</div><div class="featured-post-slide slick-slide" data-slick-index="1" aria-hidden="true" style="width: 680px; position: relative; left: -680px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
									<div class="f-slide">

										<div class="f-slide__background" style="background-image:url('wp-content/themes/abstract-minimal/assets/images/thumbs/featured/featured-2.jpg');"></div>
										<div class="f-slide__overlay"></div>

										<div class="f-slide__content">
											<ul class="f-slide__meta">
												<li>September 06, 2020</li> 
												<li><a href="#" tabindex="-1">Sakura Haruno</a></li>
											</ul>

											<h1 class="f-slide__title"><a href="single-standard.html" title="" tabindex="-1">Enhancing Your Designs with Negative Space</a></h1> 
										</div>

									</div> <!-- f-slide -->
								</div><div class="featured-post-slide slick-slide" data-slick-index="2" aria-hidden="true" style="width: 680px; position: relative; left: -1360px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
									<div class="f-slide">

										<div class="f-slide__background" style="background-image:url('wp-content/themes/abstract-minimal/assets/images/thumbs/featured/featured-3.jpg');"></div>
										<div class="f-slide__overlay"></div>

										<div class="f-slide__content">
											<ul class="f-slide__meta">
												<li>September 05, 2020</li> 
												<li><a href="#" tabindex="-1">Shikamaru Nara</a></li>
											</ul>

											<h1 class="f-slide__title"><a href="single-standard.html" title="" tabindex="-1">Music Album Cover Designs for Inspiration</a></h1> 
										</div>

									</div> <!-- f-slide -->
								</div></div></div> <!-- featured-post-slide -->

								<!-- featured-post-slide -->

								<!-- featured-post-slide -->

							</div> <!-- end feature post slider -->

							<div class="featured-post-nav">
								<button class="featured-post-nav__prev">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg>
								</button>
								<button class="featured-post-nav__next">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
								</button>
							</div> <!-- featured-post-nav -->

						</div> <!-- end entry content -->
					</div>

					<!-- end entry, featured grid -->

					<!-- 
					To DO: 
					1. Add twig/composer: https://www.kobzarev.com/wordpress/twig/
					https://wordpress.org/support/article/giving-wordpress-its-own-directory/

					 -->

					<?php 
					$args = ['post_type' => 'post'];
					$query = new WP_Query($args);
					?>
		
				    
					<?php if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
					    <article class="brick entry format-standard" style="position: absolute; left: 50%; top: 0px;">
					        <div class="entry__thumb">
							<a href="<?php the_permalink()?>" class="thumb-link">
								<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/woodcraft-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/woodcraft-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/woodcraft-1200.jpg 2x" alt="">
							</a>
						</div> <!-- end entry__thumb -->

						<div class="entry__text">
							<div class="entry__header">

								<div class="entry__meta">
									<span class="entry__cat-links">
										<?php the_tags('<a>','','</a>'); ?>
									</span>
								</div>

								<h1 class="entry__title">
									<a href="<?php the_permalink()?>"><?php the_title()?></a>
								</h1>

							</div>
							<div class="entry__excerpt">
								<p><?php the_excerpt()?></p>
							</div>
						</div> <!-- end entry__text -->
						</article> <!-- end entry -->
					<?php endwhile; else: ?>
					<p>Записей не найдено.</p>
					<?php endif; ?>
					<?php wp_reset_postdata();?>

					<article class="brick entry format-standard" style="position: absolute; left: 50%; top: 0px;">

						<div class="entry__thumb">
							<a href="single-standard.html" class="thumb-link">
								<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/woodcraft-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/woodcraft-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/woodcraft-1200.jpg 2x" alt="">
							</a>
						</div> <!-- end entry__thumb -->

						<div class="entry__text">
							<div class="entry__header">

								<div class="entry__meta">
									<span class="entry__cat-links">
										<a href="#">Design</a> 
										<a href="#">Photography</a>
									</span>
								</div>

								<h1 class="entry__title"><a href="single-standard.html">Just a Standard Format Post.</a></h1>

							</div>
							<div class="entry__excerpt">
								<p>
									Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
								</p>
							</div>
						</div> <!-- end entry__text -->

					</article> <!-- end entry -->

					<article class="brick entry format-standard" style="position: absolute; left: 75%; top: 0px;">

						<div class="entry__thumb">
							<a href="single-standard.html" class="thumb-link">
								<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/tulips-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/tulips-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/tulips-1200.jpg 2x" alt="">
							</a>
						</div>  <!-- end entry__thumb -->

						<div class="entry__text">
							<div class="entry__header">

								<div class="entry__meta">
									<span class="entry__cat-links">
										<a href="#">Health</a>
									</span>
								</div>

								<h1 class="entry__title"><a href="single-standard.html">10 Interesting Facts About Caffeine.</a></h1>

							</div>
							<div class="entry__excerpt">
								<p>
									Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
								</p>
							</div>
						</div> <!-- end entry__text -->

					</article> <!-- end article -->

					<article class="brick entry format-standard" style="position: absolute; left: 50%; top: 423px;">

						<div class="entry__thumb">
							<a href="single-standard.html" class="thumb-link">
								<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/dew-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/dew-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/dew-1200.jpg 2x" alt="">
							</a>
						</div> <!-- end entry__thumb -->

						<div class="entry__text">
							<div class="entry__header">

								<div class="entry__meta">
									<span class="entry__cat-links">
										<a href="#">Lifestyle</a>
										<a href="#">Health</a>
									</span>
								</div>

								<h1 class="entry__title"><a href="single-standard.html">Health Benefits of Morning Dew.</a></h1>

							</div>
							<div class="entry__excerpt">
								<p>
									Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
								</p>
							</div>
						</div> <!-- end entry__text -->

					</article> <!-- end article -->

					<article class="brick entry format-quote" style="position: absolute; left: 75%; top: 423px;">

						<div class="entry__thumb">
							<blockquote>
								<p>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</p>

								<cite>Dieter Rams</cite>
							</blockquote>
						</div>

					</article> <!-- end article -->

					<article class="brick entry format-standard" style="position: absolute; left: 0%; top: 640px;">

						<div class="entry__thumb">
							<a href="single-standard.html" class="thumb-link">
								<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/rucksack-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/rucksack-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/rucksack-1200.jpg 2x" alt="">
							</a>
						</div> <!-- end entry__thumb -->

						<div class="entry__text">
							<div class="entry__header">

								<div class="entry__meta">
									<span class="entry__cat-links">
										<a href="#">Lifestyle</a>
										<a href="#">Work</a>
									</span>
								</div>

								<h1 class="entry__title"><a href="single-standard.html">The Art Of Visual Storytelling.</a></h1>

							</div>
							<div class="entry__excerpt">
								<p>
									Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
								</p>
							</div>
						</div> <!-- end entry__text -->

					</article> <!-- end article -->

					<article class="brick entry format-standard" style="position: absolute; left: 25%; top: 640px;">

						<div class="entry__thumb">
							<a href="single-standard.html" class="thumb-link">
								<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/jump-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/jump-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/jump-1200.jpg 2x" alt="">
							</a>
						</div> <!-- end entry__thumb -->

						<div class="entry__text">
							<div class="entry__header">

								<div class="entry__meta">
									<span class="entry__cat-links">
										<a href="#">Family</a>
										<a href="#">Relationship</a>
									</span>
								</div>

								<h1 class="entry__title"><a href="single-standard.html">Create Meaningful Family Moments.</a></h1>

							</div>
							<div class="entry__excerpt">
								<p>
									Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
								</p>
							</div>
						</div> <!-- end entry__text -->

					</article> <!-- end article -->

					<article class="brick entry format-gallery" style="position: absolute; left: 50%; top: 846px;">

						<div class="entry__thumb slider">
							<div class="slider__slides slick-initialized slick-slider slick-dotted">
								<div class="slick-list draggable" style="height: 1px;"><div class="slick-track" style="opacity: 1; width: 960px;"><div class="slider__slide slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 320px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10">
									<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/gallery/slide-1-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/gallery/slide-1-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/gallery/slide-1-1200.jpg 2x" alt=""> 
								</div><div class="slider__slide slick-slide" data-slick-index="1" aria-hidden="true" style="width: 320px; position: relative; left: -320px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11">
									<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/gallery/slide-2-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/gallery/slide-2-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/gallery/slide-2-1200.jpg 2x" alt="">
								</div><div class="slider__slide slick-slide" data-slick-index="2" aria-hidden="true" style="width: 320px; position: relative; left: -640px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12">
									<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/gallery/slide-3-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/gallery/slide-3-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/gallery/slide-3-1200.jpg 2x" alt="">  
								</div></div></div>


								<ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 3" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12" aria-label="3 of 3" tabindex="-1">3</button></li></ul></div>    
							</div> <!-- end entry__thumb -->

							<div class="entry__text">
								<div class="entry__header">

									<div class="entry__meta">
										<span class="entry__cat-links">
											<a href="#">Vacation</a>
										</span>
									</div>

									<h1 class="entry__title"><a href="single-gallery.html">The Best Tropical Leaves wp-content/themes/abstract-minimal/assets/images.</a></h1>

								</div>
								<div class="entry__excerpt">
									<p>
										Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
									</p>
								</div>
							</div> <!-- end entry__text -->

						</article> <!-- end article -->

						<article class="brick entry format-link" style="position: absolute; left: 75%; top: 925px;">

							<div class="entry__thumb">
								<div class="link-wrap">
									<p>Looking for affordable &amp; reliable web hosting? We recommend Dreamhost.</p>
									<cite>
										<a target="_blank" href="http://www.dreamhost.com/r.cgi?287326">http://www.dreamhost.com</a>
									</cite>
								</div>
							</div> <!-- end entry__thumb -->

						</article> <!-- end article -->

						<article class="brick entry format-audio" style="position: absolute; left: 0%; top: 1063px;">

							<div class="entry__thumb">
								<a href="single-audio.html" class="thumb-link">
									<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/guitarist-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/guitarist-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/guitarist-1200.jpg 2x" alt="">
								</a>
							</div> <!-- end entry--thumb -->

							<div class="entry__text">
								<div class="entry__header">

									<div class="entry__meta">
										<span class="entry__cat-links">
											<a href="#">Lifestyle</a>
										</span>
									</div>

									<h1 class="entry__title"><a href="single-audio.html">What Your Music Preference Says About You and Your Personality.</a></h1>

								</div>
								<div class="entry__excerpt">
									<p>
										Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
									</p>
								</div>
							</div> <!-- end entry__text -->

						</article> <!-- end article -->

						<article class="brick entry format-video" style="position: absolute; left: 25%; top: 1063px;">

							<div class="entry__thumb video-image">
								<a href="https://player.vimeo.com/video/117310401?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" data-lity="" class="thumb-link">
									<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/cookies-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/cookies-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/cookies-1200.jpg 2x" alt="">
								</a>
							</div> <!-- end entry__thumb -->

							<div class="entry__text">
								<div class="entry__header">

									<div class="entry__meta">
										<span class="entry__cat-links">
											<a href="#">Lifestyle</a> 
											<a href="#">Health</a>
										</span>
									</div>

									<h1 class="entry__title"><a href="single-video.html">No Sugar Oatmeal Cookies.</a></h1>

								</div>
								<div class="entry__excerpt">
									<p>
										Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
									</p>
								</div>
							</div> <!-- end entry__text -->

						</article> <!-- end article -->

						<article class="brick entry format-standard" style="position: absolute; left: 75%; top: 1335px;">

							<div class="entry__thumb">
								<a href="single-standard.html" class="thumb-link">
									<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/walk-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/walk-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/walk-1200.jpg 2x" alt="">
								</a>
							</div> <!-- end entry__thumb -->

							<div class="entry__text">
								<div class="entry__header">

									<div class="entry__meta">
										<span class="entry__cat-links">
											<a href="#">Work</a>
										</span>
									</div>

									<h1 class="entry__title"><a href="single-standard.html">Using Repetition and Patterns in Photography.</a></h1>

								</div>
								<div class="entry__excerpt">
									<p>
										Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
									</p>
								</div>
							</div> <!-- end entry__text -->

						</article> <!-- end article -->

						<article class="brick entry format standard" style="position: absolute; left: 50%; top: 1366px;">

							<div class="entry__thumb">
								<a href="single-standard.html" class="thumb-link">
									<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/lamp-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/lamp-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/lamp-1200.jpg 2x" alt="">
								</a>
							</div> <!-- end entry__thumb -->

							<div class="entry__text">
								<div class="entry__header">

									<div class="entry__meta">
										<span class="entry__cat-links">
											<a href="#">Design</a> 
											<a href="#">Photography</a>
										</span>
									</div>

									<h1 class="entry__title"><a href="single-standard.html">Another Standard Format Post.</a></h1>

								</div>
								<div class="entry__excerpt">
									<p>
										Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
									</p>
								</div>
							</div> <!-- end entry__text -->

						</article> <!-- end article -->

						<article class="brick entry format-standard" style="position: absolute; left: 25%; top: 1486px;">

							<div class="entry__thumb">
								<a href="single-standard.html" class="thumb-link">
									<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/real-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/real-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/real-1200.jpg 2x" alt="">
								</a>
							</div> <!-- end entry__thumb -->

							<div class="entry__text">
								<div class="entry__header">

									<div class="entry__meta">
										<span class="entry__cat-links">
											<a href="#">Travel</a> 
											<a href="#">Vacation</a>
										</span>
									</div>

									<h1 class="entry__title"><a href="single-standard.html">How We Live Is What Makes Us Real.</a></h1>

								</div>
								<div class="entry__excerpt">
									<p>
										Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
									</p>
								</div>
							</div> <!-- end entry__text -->

						</article> <!-- end article -->

						<article class="brick entry format-standard" style="position: absolute; left: 0%; top: 1550px;">

							<div class="entry__thumb">
								<a href="single-standard.html" class="thumb-link">
									<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/beetle-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/beetle-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/beetle-1200.jpg 2x" alt="">
								</a>
							</div> <!-- end entry__thumb -->

							<div class="entry__text">
								<div class="entry__header">

									<div class="entry__meta">
										<span class="entry__cat-links">
											<a href="#">Lifestyle</a>
										</span>
									</div>

									<h1 class="entry__title"><a href="single-standard.html">Throwback To The Good Old Days.</a></h1>

								</div>
								<div class="entry__excerpt">
									<p>
										Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
									</p>
								</div>
							</div> <!-- end entry__text -->

						</article> <!-- end article -->

						<article class="brick entry format-standard" style="position: absolute; left: 50%; top: 1789px;">

							<div class="entry__thumb">
								<a href="single-standard.html" class="thumb-link">
									<img src="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/seashore-600.jpg" srcset="wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/seashore-600.jpg 1x, wp-content/themes/abstract-minimal/assets/images/thumbs/masonry/seashore-1200.jpg 2x" alt="">
								</a>
							</div> <!-- end entry__thumb -->

							<div class="entry__text">
								<div class="entry__header">

									<div class="entry__meta">
										<span class="entry__cat-links">
											<a href="#">Health</a> 
											<a href="#">Vacation</a>
										</span>
									</div>

									<h1 class="entry__title"><a href="single-standard.html">What The Beach Does to Your Brain.</a></h1>

								</div>
								<div class="entry__excerpt">
									<p>
										Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
									</p>
								</div>
							</div> <!-- end entry__text -->

						</article> <!-- end article -->

					</div> <!-- end brick-wrapper --> 

				</div> <!-- end masonry -->

				<div class="row">
					<div class="column large-12">
						<nav class="pgn">
							<ul>
								<li>
									<a class="pgn__prev" href="#0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg>
									</a>
								</li>
								<li><a class="pgn__num" href="#0">1</a></li>
								<li><span class="pgn__num current">2</span></li>
								<li><a class="pgn__num" href="#0">3</a></li>
								<li><a class="pgn__num" href="#0">4</a></li>
								<li><a class="pgn__num" href="#0">5</a></li>
								<li><span class="pgn__num dots">…</span></li>
								<li><a class="pgn__num" href="#0">8</a></li>
								<li>
									<a class="pgn__next" href="#0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
									</a>
								</li>
							</ul>
						</nav> <!-- end pgn -->
					</div> <!-- end column -->
				</div> <!-- end row -->

			</section> 
		</div> 

	</div><!-- #primary -->
	//Fetch the theme footer template 
	<?php get_footer(); ?>