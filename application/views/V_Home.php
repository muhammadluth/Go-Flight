<div class="fh5co-hero">
<!-- <div class="fh5co-cover" data-stellar-background-ratio="0.5"> -->
<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo base_url() ?>_assets/images/airlines.jpg)">
		<div class="desc">
			<div class="container">
				<div class="row">
				<div class="desc2 animate-box">
						<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
							<h3><?php echo $setting['banner_description'] ?></h3>
							<span class="price"><?php echo $setting['banner_other'] ?></span>
							<h2 style="color: #ffffff">
								<b>GO-FLIGHT</b> <br>
							</h2> 
							<h3 style="color: #ffffff">
								Booking the Flight Ticket No.1 in the World <br>
								Cheap and Trusted <br>
							</h3>	
							<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
							<!-- <input type="datetime-local"> -->
						</div>
					</div>
					<div class="col-sm-5 col-md-5">
						<div class="tabulation animate-box">

							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Let's Fly</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<form action="<?php echo base_url() ?>search" method="GET">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
												<section>
													<label for="class">From</label>
													<select name="rute_from" class="cs-select cs-skin-border">
														<option disabled>Select</option>
														<?php foreach ($rute_all as $value) : ?>
															<option value="<?php echo $value['rute_from'] ?>"><?php echo $value['rute_from'] ?></option>
														<?php endforeach; ?>
													</select>
												</section>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
												<section>
													<label for="class">To</label>
													<select name="rute_to" class="cs-select cs-skin-border">
													<option disabled="" ="">Select</option>
														<?php foreach ($rute_all as $value) : ?>
															<option value="<?php echo $value['rute_to'] ?>"><?php echo $value['rute_to'] ?></option>
														<?php endforeach; ?>
													</select>
												</section>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Check In</label>
													<input name="depart_date" type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" />
												</div>
											</div>
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Class</label>
													<select name="flight_class" class="cs-select cs-skin-border">
														<option value="Economy">Economy</option>
														<option value="First">First</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Passengers</label>
													<select name="passengers" class="cs-select cs-skin-border">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xs-12">
												<input name="submit" type="submit" class="btn btn-primary btn-block" value="Search Flight">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url();?>_assets/js/wow.js"></script>
<div class="peta" style="background-color: #313131">
				<div class="tulisan wow fadeIn" data-wow-duration="3s" data-wow-delay="0s" >
				<h3 style="color: #ffffff; margin-left: 100px; padding-top: 20px;">Temukan Kami di sini!</h3>
				</div>
				<div class="container wow fadeIn" data-wow-duration="5s" data-wow-delay="0s">
					<!-- <div class="googleMape" id="googleMap" style="width:100%;height:450px;"></div> -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.270410663319!2d109.24712891420616!3d-7.4353014753159785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e9d1768e4d1%3A0x959269c10818fa0c!2sSMK+Telkom+Purwokerto!5e0!3m2!1sid!2sid!4v1555850027334!5m2!1sid!2sid" width="100%" height="380px" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				</div>
<!-- Menyisipkan library Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
	// fungsi initialize untuk mempersiapkan peta
	function initialize() {
	var propertiPeta = {
		center:new google.maps.LatLng(-8.5830695,116.3202515),
		zoom:9,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	
	var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
	}

	// event jendela di-load  
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
              new WOW().init();

			  wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                wow.init();
</script>