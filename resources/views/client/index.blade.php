@extends('client.layout')
@section('content')
	<!-- Primary Page Layout
	================================================== -->

	<div class="section background-dark over-hide">
	
		<div class="hero-center-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-10 col-sm-8 parallax-fade-top">
						<div class="hero-text">Discover your paradise under the Greek sky</div>
					</div>
					<div class="col-12 mt-3 mb-5 parallax-fade-top">
						<div class="hero-stars">
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>
					<div class="col-12 mt-3 parallax-fade-top">
						<div class="booking-hero-wrap">
							<div class="row justify-content-center">
								<div class="col-5 no-mob">
									<div class="input-daterange input-group" id="flight-datepicker">
										<div class="row">	
											<div class="col-6">
												<div class="form-item">
													<span class="fontawesome-calendar"></span>
													<input class="input-sm" type="text" autocomplete="off" id="start-date-1" name="start" placeholder="chech-in date" data-date-format="DD, MM d"/>
													<span class="date-text date-depart"></span>
												</div>
											</div>
											<div class="col-6">
												<div class="form-item">
													<span class="fontawesome-calendar"></span>
													<input class="input-sm" type="text" autocomplete="off" id="end-date-1" name="end" placeholder="check-out date" data-date-format="DD, MM d"/>
													<span class="date-text date-return"></span>
												</div>
											</div>
										</div>
									</div>	
								</div>
								<div class="col-5 no-mob">
									<div class="row">
										<div class="col-6">
											<select name="adults" class="wide">
												<option data-display="adults">adults</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
										<div class="col-6">
											<select name="children" class="wide">
												<option data-display="children">children</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-6  col-sm-4 col-lg-2">
									<a class="booking-button" href="search.html">book now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="slideshow">
			<div class="slide slide--current parallax-top">
				<figure class="slide__figure">
					<div class="slide__figure-inner">
						<div class="slide__figure-img" style="background-image: url({{asset('img/banners/banner1.jpg')}})"></div>
						<div class="slide__figure-reveal"></div>
					</div>
				</figure>
			</div>
			<div class="slide parallax-top">
				<figure class="slide__figure">
					<div class="slide__figure-inner">
						<div class="slide__figure-img" style="background-image: url({{asset('img/banners/banner2.jpg')}})"></div>
						<div class="slide__figure-reveal"></div>
					</div>
				</figure>
			</div>
			<div class="slide parallax-top">
				<figure class="slide__figure">
					<div class="slide__figure-inner">
						<div class="slide__figure-img" style="background-image: url({{asset('img/banners/banner3.jpg')}})"></div>
						<div class="slide__figure-reveal"></div>
					</div>
				</figure>
			</div>
			<div class="slide parallax-top">
				<figure class="slide__figure">
					<div class="slide__figure-inner">
						<div class="slide__figure-img" style="background-image: url({{asset('img/banners/banner4.jpg')}})"></div>
						<div class="slide__figure-reveal"></div>
					</div>
				</figure>
			</div>
			<div class="slide parallax-top">
				<figure class="slide__figure">
					<div class="slide__figure-inner">
						<div class="slide__figure-img" style="background-image: url({{asset('img/banners/banner5.jpg')}})"></div>
						<div class="slide__figure-reveal"></div>
					</div>
				</figure>
			</div>
			<!-- revealer -->
			<div class="revealer">
				<div class="revealer__item revealer__item--left"></div>
				<div class="revealer__item revealer__item--right"></div>
			</div>
			<nav class="arrow-nav fade-top">
				<button class="arrow-nav__item arrow-nav__item--prev">
					<svg class="icon icon--nav"><use xlink:href="#icon-nav"></use></svg>
				</button>
				<button class="arrow-nav__item arrow-nav__item--next">
					<svg class="icon icon--nav"><use xlink:href="#icon-nav"></use></svg>
				</button>
			</nav>
			<!-- navigation -->
			<nav class="nav fade-top">
				<button class="nav__button">
					<span class="nav__button-text"></span>
				</button>
				<h2 class="nav__chapter">discover your paradise</h2>
				<div class="toc">
					<a class="toc__item" href="#entry-1">
						<span class="toc__item-title">discover your paradise</span>
					</a>
					<a class="toc__item" href="#entry-2">
						<span class="toc__item-title">unpretentious comfort</span>
					</a>
					<a class="toc__item" href="#entry-3">
						<span class="toc__item-title">azure sea sparkling</span>
					</a>
				</div>
			</nav>
			<!-- little sides -->
			<div class="slideshow__indicator"></div>
			<div class="slideshow__indicator"></div>
		</div>
	</div>
	
	<div class="section padding-top-bottom over-hide">
		<div class="container">
			<div class="row">
				<div class="col-md-6 align-self-center">
					<div class="row justify-content-center">
						<div class="col-10">
							<div class="subtitle text-center mb-4">hotel Thalia</div>
							<h2 class="text-center">Nơi mang đến cho bạn một cuộc sống trong mơ.</h2>
							<p class="text-center mt-5">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4 mt-md-0">
					<div class="img-wrap">
						<img src="{{asset('img/home1.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section background-grey over-hide">
		<div class="container-fluid px-0">
			<div class="row mx-0">
				<div class="col-xl-6 px-0">
					<div class="img-wrap" id="rev-1">
						<img src="{{asset('img/home2.jpg')}}" alt="">
						<div class="text-element-over">Phòng Có Bể Bơi</div>
					</div>
				</div>
				<div class="col-xl-6 px-0 mt-4 mt-xl-0 align-self-center">
					<div class="row justify-content-center">
						<div class="col-10 col-xl-8 text-center">
							<h3 class="text-center">Phòng Có Bể Bơi</h3>
							<p class="text-center mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-5 btn btn-primary" href="search.html">check availability</a>
						</div>	
					</div>
				</div>
			</div>
			<div class="row mx-0">
				<div class="col-xl-6 px-0 mt-4 mt-xl-0 pb-5 pb-xl-0 align-self-center">
					<div class="row justify-content-center">
						<div class="col-10 col-xl-8 text-center">
							<h3 class="text-center">Phòng Có View Biển</h3>
							<p class="text-center mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-5 btn btn-primary" href="search.html">check availability</a>
						</div>	
					</div>
				</div>
				<div class="col-xl-6 px-0 order-first order-xl-last mt-5 mt-xl-0">
					<div class="img-wrap" id="rev-2">
						<img src="{{asset('img/home3.jpg')}}" alt="">
						<div class="text-element-over">Phòng Có View Biển</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section background-dark over-hide">
		<div class="container-fluid py-4">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="img/ser-1.jpg" alt="">
							<div class="services-text-over">spa salon</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-sm-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="img/ser-2.jpg" alt="">
							<div class="services-text-over">restaurant</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="img/ser-3.jpg" alt="">
							<div class="services-text-over">pool</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
					<a href="services.html">
						<div class="img-wrap services-wrap">
							<img src="img/ser-4.jpg" alt="">
							<div class="services-text-over">activities</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section padding-top-bottom over-hide">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 align-self-center">
					<div class="subtitle with-line text-center mb-4">elegant suites</div>
					<h3 class="text-center padding-bottom-small">Unpretentious luxury</h3>
				</div>
				<div class="section clearfix"></div>
				<div class="col-sm-6 col-lg-4">
					<div class="services-box text-center">
						<img src="img/1.svg" alt="">
						<h5 class="mt-2">smoking free</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="services.html">read more</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5 mt-sm-0">
					<div class="services-box text-center">
						<img src="img/2.svg" alt="">
						<h5 class="mt-2">king beds</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="services.html">read more</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5 mt-lg-0">
					<div class="services-box text-center">
						<img src="img/3.svg" alt="">
						<h5 class="mt-2">Yacht rental</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="services.html">read more</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5">
					<div class="services-box text-center">
						<img src="img/4.svg" alt="">
						<h5 class="mt-2">welcome drink</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="services.html">read more</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5">
					<div class="services-box text-center">
						<img src="img/5.svg" alt="">
						<h5 class="mt-2">swimming pool</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="services.html">read more</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mt-5">
					<div class="services-box text-center">
						<img src="img/6.svg" alt="">
						<h5 class="mt-2">food included</h5>
						<p class="mt-3">Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
						<a class="mt-1 btn btn-primary" href="services.html">read more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section padding-top-bottom-big over-hide">
		<div class="parallax" style="background-image: url('img/4.jpg')"></div>
		<div class="section z-bigger">		
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row justify-content-center">
							<div class="col-md-6 col-xl-4 px-sm-0">
								<div class="booking-sep-wrap">
									<div class="input-daterange input-group" id="flight-datepicker-1">
										<div class="form-item">
											<span class="fontawesome-calendar"></span>
											<input class="input-sm" type="text" autocomplete="off" id="start-date" name="start" placeholder="check-in" data-date-format="DD, MM d"/>
											<span class="date-text date-depart"></span>
										</div>
										<div class="form-item">
											<span class="fontawesome-calendar"></span>
											<input class="input-sm" type="text" autocomplete="off" id="end-date" name="end" placeholder="check-out" data-date-format="DD, MM d"/>
											<span class="date-text date-return"></span>
										</div>
									</div>	
								</div>
							</div>
							<div class="col-md-3 col-xl-2 px-sm-0">
								<div class="quantity">
									<input type="number" min="1" max="9999" step="1" value="1" >
								</div>	
							</div>	
							<div class="col-md-3 col-xl-2 px-sm-0">
								<a class="booking-button-big" href="search.html">check<br>availability</a>
							</div>	
						</div>	
					</div>
				</div>
			</div>					
		</div>
	</div>
	
	<div class="section padding-top-bottom over-hide background-grey">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 align-self-center">
					<div class="subtitle with-line text-center mb-4">luxury</div>
					<h3 class="text-center padding-bottom-small">Our rooms</h3>
				</div>
				<div class="section clearfix"></div>
				<div class="col-md-6">
					<div class="room-box background-white">
						<div class="room-name">suite tanya</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="img/room3.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">pool suite</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 130$</a>
							<div class="room-icons mt-4 pt-4">
								<img src="img/5.svg" alt="">
								<img src="img/2.svg" alt="">
								<img src="img/3.svg" alt="">
								<img src="img/1.svg" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4 mt-md-0">
					<div class="room-box background-white">
						<div class="room-name">suite helen</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<img src="img/room4.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">small room</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 80$</a>
							<div class="room-icons mt-4 pt-4">
								<img src="img/4.svg" alt="">
								<img src="img/2.svg" alt="">
								<img src="img/6.svg" alt="">
								<img src="img/3.svg" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4">
					<div class="room-box background-white">
						<div class="room-name">suite andrea</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="img/room5.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">Apartment</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 110$</a>
							<div class="room-icons mt-4 pt-4">
								<img src="img/5.svg" alt="">
								<img src="img/2.svg" alt="">
								<img src="img/3.svg" alt="">
								<img src="img/6.svg" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4">
					<div class="room-box background-white">
						<div class="room-name">suite diana</div>
						<div class="room-per">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<img src="img/room6.jpg" alt="">
						<div class="room-box-in">
							<h5 class="">big Apartment</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="rooms-gallery.html">book from 160$</a>
							<div class="room-icons mt-4 pt-4">
								<img src="img/5.svg" alt="">
								<img src="img/2.svg" alt="">
								<img src="img/3.svg" alt="">
								<img src="img/6.svg" alt="">
								<a href="rooms-gallery.html">full info</a>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>		
	</div>
	
	<div class="section padding-top-bottom-big over-hide">
		<div class="parallax" style="background-image: url('img/5.jpg')"></div>
		<div class="section z-bigger">		
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div id="owl-sep-1" class="owl-carousel owl-theme">								 
							<div class="item">						
								<div class="quote-sep">	
									<h4>"Chilling out on the bed in your hotel room watching television, while wearing your own pajamas, is sometimes the best part of a vacation."</h4>
									<h6>Jason Salvatore</h6>	
								</div>											
							</div>											
							<div class="item">					
								<div class="quote-sep">
									<h4>"Every good day starts off with a cappuccino, and there's no place better to enjoy some frothy caffeine than at the Thalia Hotel."</h4>
									<h6>Terry Mitchell</h6>	
								</div>									
							</div>											
							<div class="item">					
								<div class="quote-sep">
									<h4>"I still enjoy traveling a lot. I mean, it amazes me that I still get excited in hotel rooms just to see what kind of shampoo they've left me."</h4>
									<h6>Michael Brighton</h6>
								</div>										
							</div>								 
						</div>	
					</div>
				</div>
			</div>					
		</div>
	</div>
	
	<div class="section padding-top-bottom-small background-dark-2 over-hide">		
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">	
					<h5 class="color-grey">A new dimension of luxury.</h5>
					<p class="color-white mt-3 mb-3"><em>our presentation, 0:48 min</em></p>
					<a href="https://vimeo.com/54851233" class="video-button" data-fancybox><i class="fa fa-play"></i></a>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="section padding-top-bottom background-grey over-hide">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 align-self-center">
					<div class="subtitle with-line text-center mb-4">Excellent restaurant</div>
					<h3 class="text-center padding-bottom-small">Dining &amp; Bars</h3>
				</div>
				<div class="section clearfix"></div>
			</div>
			<div class="row background-white p-0 m-0">
				<div class="col-xl-6 p-0">
					<div class="img-wrap" id="rev-3">
						<img src="img/rest-1.jpg" alt="">
					</div>
				</div>
				<div class="col-xl-6 p-0 align-self-center">
					<div class="row justify-content-center">
						<div class="col-9 pt-4 pt-xl-0 pb-5 pb-xl-0 text-center">
							<h5 class="">beach restaurant</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="restaurant.html">explore</a>
						</div>
					</div>	
				</div>
			</div>
			<div class="row background-white p-0 m-0">
				<div class="col-xl-6 p-0 align-self-center">
					<div class="row justify-content-center">
						<div class="col-9 pt-4 pt-xl-0 pb-5 pb-xl-0 text-center">
							<h5 class="">pool restaurant</h5>
							<p class="mt-3">Sed ut perspiciatis unde omnis, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>
							<a class="mt-1 btn btn-primary" href="restaurant.html">explore</a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 order-first order-xl-last p-0">
					<div class="img-wrap" id="rev-4">
						<img src="img/rest-2.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section padding-top z-bigger">
		<div class="container">
			<div class="row justify-content-center padding-bottom-smaller">
				<div class="col-md-8">
					<div class="subtitle with-line text-center mb-4">get in touch</div>
					<h3 class="text-center padding-bottom-small">drop us a line</h3>
				</div>
				<div class="section clearfix"></div>
				<div class="col-md-6 col-lg-4">
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">Address:</p>
						</div>
						<div class="address-in text-right">
							<p>Avenue Str. 328</p>
						</div>
					</div>
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">City:</p>
						</div>
						<div class="address-in text-right">
							<p>Thessaloniki</p>
						</div>
					</div>
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">Check-In:</p>
						</div>
						<div class="address-in text-right">
							<p>14:00 pm</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">Phone:</p>
						</div>
						<div class="address-in text-right">
							<p>+21 60 374 7537</p>
						</div>
					</div>
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">Email:</p>
						</div>
						<div class="address-in text-right">
							<p>info@hotel.com</p>
						</div>
					</div>
					<div class="address">
						<div class="address-in text-left">
							<p class="color-black">Check-Out:</p>
						</div>
						<div class="address-in text-right">
							<p>11:00 am</p>
						</div>
					</div>
				</div>
				<div class="section clearfix"></div>
				<div class="col-md-8 text-center mt-5" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
					<p class="mb-0"><em>available at: 8am - 10pm</em></p>
					<h2 class="text-opacity">+21 60 374 7537</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="subscribe-home">
						<input type="text" placeholder="your email here"/>
						<button data-lang="en">subscribe</button>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="section">
		<div id="owl-sep-2" class="owl-carousel owl-theme">								 
			<div class="item">	
				<a href="img/gallery/1.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/1-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/2.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/2-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/3.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/3-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/4.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/4-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/5.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/5-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/6.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/6-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/7.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/7-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/8.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/8-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/9.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/9-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/10.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/10-s.jpg" alt="">
					</div>
				</a>
			</div>							 
			<div class="item">	
				<a href="img/gallery/1.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/1-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/2.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/2-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/3.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/3-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/4.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/4-s.jpg" alt="">
					</div>
				</a>
			</div>								 
			<div class="item">	
				<a href="img/gallery/5.jpg" data-fancybox="gallery">							 
					<div class="img-wrap gallery-small">
						<img src="img/gallery/5-s.jpg" alt="">
					</div>
				</a>
			</div>										 
		</div>
	</div>
@endsection