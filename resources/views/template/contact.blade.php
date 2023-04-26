<x-main-layout>
	{{-- Selective header  --}}
    <x-layouts.header :wishlists=$wishlists  />


		<!-- main body - start
		================================================== -->
		<main>



			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="{{ asset('images/contact.jpg') }}">
				<div class="overlay" data-bg-color="#1d1d1d"></div>
				<div class="container">
					<h1 class="page_title text-white">Contact Us</h1>
					<ul class="breadcrumb_nav ul_li_center clearfix">
						<li><a href="#!">Home</a></li>
						<li>Contact Us</li>
					</ul>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- map_section - start
			================================================== -->
			{{-- <div class="map_section clearfix">
				<div id="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
				</div>
			</div> --}}
			<!-- map_section - end
			================================================== -->


			<!-- main_contact_section - start
			================================================== -->
			<section class="main_contact_section sec_ptb_100 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between">

						<div class="col-lg-5">
							<div class="main_contact_content">
								<h3 class="title_text mb_15">Get In Touch</h3>
								<p class="mb_50">
									If you are interested in working with us, please get in touch.
								</p>
								<ul class="main_contact_info ul_li_block clearfix">
									<li>
										<span class="icon">
											<i class="fal fa-map-marked-alt"></i>
										</span>
										<p class="mb-0">
											shop # 7 Avenue mall, Lahore, Pakistan
										</p>
									</li>
									<li>
										<span class="icon">
											<i class="fal fa-phone-volume"></i>
										</span>
										<p class="mb-0">8 800 567.890.11 - Central Office</p>
									</li>
									<li>
										<span class="icon">
											<i class="fal fa-paper-plane"></i>
										</span>
										<p class="mb-0">support@gmail.com</p>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-7">
							<div class="main_contact_form">
								<h3 class="title_text mb_30">Contact Us</h3>
								<form action="{{ route('contact.message') }}" method="post">
                                    @csrf
                                    @if(Auth::check())<input type="text" hidden name="user_id" value="{{ Auth::user()->id }}" >@else
                                        <h2>Please <a href="/login">login</a> to contact the admin</h2>
                                    @endif
									<div class="row">
										<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
											<div class="form_item">
												<input type="text" name="name" placeholder="Your Name">
											</div>
										</div>

										<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
											<div class="form_item">
												<input type="email" name="email" placeholder="Your Email">
											</div>
										</div>

										<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="form_item">
												<input type="text" name="subject" placeholder="Subject">
											</div>
										</div>
									</div>

									<div class="form_item">
										<textarea name="message" placeholder="Your Message"></textarea>
									</div>
									<button type="submit" class="custom_btn bg_default_red text-uppercase">Send</button>
								</form>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- main_contact_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->





</x-main-layout>
