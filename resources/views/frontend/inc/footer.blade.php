<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<!-- <a href="index.html"><img src="images/logo2.png" alt="#"></a> -->
								<h2>Smooth Fation Bd</h2> 
							</div>
							<p class="text">{{$companyInfo->short_description}}</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:{{$companyInfo->telephone}}">{{$companyInfo->telephone}}</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="{{route('shop.about')}}">About Us</a></li>
								<li><a href="{{route('shop.faq')}}">Faq</a></li>
								<li><a href="{{route('shop.terms')}}">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<!-- <li><a href="#">Help</a></li> -->
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<!-- <li><a href="#">Payment Methods</a></li> -->
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="{{route('shop.privacy')}}">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>{{$companyInfo->address}}</li>
									<li>{{$companyInfo->city}}</li>
									<li>{{$companyInfo->email}}</li>
									<li>{{$companyInfo->phone}}</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="" target="_blank">Abu Nayem</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="{{asset('public/frontend/images/payments.png')}}" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>