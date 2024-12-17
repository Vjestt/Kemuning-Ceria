<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<meta charSet="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="shortcut icon" href="<?= base_url('assets/front/') ?>assets/png/LOGO.png" />
	
	<title>Wisata Kemuning - Outbound, Jeep Adventure dan River Tubing</title>
	<link rel="shortcut icon" href="<?= base_url('assets/front/') ?>assets/png/LOGO.png" />

	
	<link rel="stylesheet" href="<?= base_url('assets/front/_next/css/') ?>styles.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/_next/css/') ?>font-face.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .carousel img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }
    </style>
</head>

<body>
	
		<div class="css-1">
		
			<div class="container css-2">
				<a rel="home" href="<?= base_url('publik/home') ?>">
		
					<img alt="Kemuning Ceria" src="<?= base_url('assets/front/') ?>assets/png/LOGO.png" height="48px" width="55px" />
				</a>
				
				<div class="css-3">
					<?php foreach($paket as $pak) { ?>
					<a color="gray.900" href="<?= base_url('publik/content/detail/').$pak['id_paket'] ?>"><?= strtoupper($pak['nama_paket']) ?></a>
					<?php }?>
				</div>
				
				<div class="css-4">
					<a class="chakra-button css-5" target="_blank" href="https://wa.me/085326600685">
					
						<span class="chakra-button__icon css-6">
							<svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" aria-hidden="true" focusable="false" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M13.641 2.325c-1.497-1.5-3.488-2.325-5.609-2.325-4.369 0-7.925 3.556-7.925 7.928 0 1.397 0.366 2.763 1.059 3.963l-1.125 4.109 4.203-1.103c1.159 0.631 2.463 0.966 3.787 0.966h0.003c0 0 0 0 0 0 4.369 0 7.928-3.556 7.928-7.928 0-2.119-0.825-4.109-2.322-5.609zM8.034 14.525v0c-1.184 0-2.344-0.319-3.356-0.919l-0.241-0.144-2.494 0.653 0.666-2.431-0.156-0.25c-0.663-1.047-1.009-2.259-1.009-3.506 0-3.634 2.956-6.591 6.594-6.591 1.759 0 3.416 0.688 4.659 1.931 1.244 1.247 1.928 2.9 1.928 4.662-0.003 3.637-2.959 6.594-6.591 6.594zM11.647 9.588c-0.197-0.1-1.172-0.578-1.353-0.644s-0.313-0.1-0.447 0.1c-0.131 0.197-0.512 0.644-0.628 0.778-0.116 0.131-0.231 0.15-0.428 0.050s-0.838-0.309-1.594-0.984c-0.588-0.525-0.987-1.175-1.103-1.372s-0.013-0.306 0.088-0.403c0.091-0.088 0.197-0.231 0.297-0.347s0.131-0.197 0.197-0.331c0.066-0.131 0.034-0.247-0.016-0.347s-0.447-1.075-0.609-1.472c-0.159-0.388-0.325-0.334-0.447-0.341-0.116-0.006-0.247-0.006-0.378-0.006s-0.347 0.050-0.528 0.247c-0.181 0.197-0.694 0.678-0.694 1.653s0.709 1.916 0.809 2.050c0.1 0.131 1.397 2.134 3.384 2.991 0.472 0.203 0.841 0.325 1.128 0.419 0.475 0.15 0.906 0.128 1.247 0.078 0.381-0.056 1.172-0.478 1.338-0.941s0.166-0.859 0.116-0.941c-0.047-0.088-0.178-0.137-0.378-0.238z">
								</path>
							</svg>
						</span>WhatsApp
					</a>
				
					<button type="button" class="chakra-button button-nav"><svg stroke="currentColor" fill="currentColor"
							stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
						</svg></button>
                </div>
            </div>
           
			<style data-emotion="css-7">
				
			</style>
            
      
			<div class="css-7">
			
				<div class="container css-8">
				<?php foreach($paket as $pak) { ?>

					<a class="chakra-button css-9" href="<?= base_url('publik/content/detail/').$pak['id_paket'] ?>"><?= strtoupper($pak['nama_paket']) ?></a>
					<?php }?>

					
				</div>
			</div>
			
		</div>
	
		<div class="css-10">
			
			<div class="css-11">
				
<div class="carousel owl-carousel">
        <?php foreach ($galeri as $galeris): ?>
            <div class="item">
                <img src="<?= base_url('assets/img/paket/').$galeris['galeri'] ?>" alt="<?= $galeris['id_galeri'] ?>">
            </div>
        <?php endforeach; ?>
    </div>
			</div>
	
			<div class="css-12"></div>
			
			<div class="container css-13">
				
				<div class="chakra-stack css-14">
					
					<h1 class="chakra-heading css-15">WISATA DAN OUTBOUND KEMUNING PALING SERU!</h1>
				
					<p class="chakra-text css-16">Ayo bermain dan seru-seruan bareng dalam outbound kemuning karanganyar,
						nikmati layanan berwisata yang seru dan asyik!</p>
				</div>
				
				<div class="container css-17">
					
					<div class="css-18">
					<?php foreach($paket as $pak) { ?>

						<a class="chakra-button css-19" href="<?= base_url('publik/content/detail/').$pak['id_paket'] ?>">
							<span class="chakra-button__icon css-20">
								
							</span><?= $pak['nama_paket'] ?>
						</a>

						<?php }?>


					</div>
				</div>
			<a class="chakra-button css-21" href="https://wa.me/085326600685">Booking sekarang
					<span class="chakra-button__icon css-22"><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" aria-hidden="true" focusable="false" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M9.707 13.707l5-5c0.391-0.39 0.391-1.024 0-1.414l-5-5c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l3.293 3.293h-9.586c-0.552 0-1 0.448-1 1s0.448 1 1 1h9.586l-3.293 3.293c-0.195 0.195-0.293 0.451-0.293 0.707s0.098 0.512 0.293 0.707c0.391 0.391 1.024 0.391 1.414 0z">
							</path>
						</svg>
					</span>
			</a>
			</div>
		</div>
	
		<div class="css-23">
		
			<div class="css-24">
		
				<div class="chakra-stack css-25">
					
					<h2 class="chakra-heading css-26">Paket Wisata Kemuning Ceria</h2>
				
					<p class="chakra-text css-27"><span>Kami menyediakan Lengkap Paket Outbound Kemuning, River tubing & Wisata Jeep Kemuning Adventure berkeliling desa kemuning menikmati keindahan kebun teh kemuning karanganyar.</span></p>
				</div>
			</div>
			
			<div class="container-content">
				
				<div class="content">
					<?php foreach($paket as $index => $pak) :?>
					<?php if($index % 2 == 0 ): ?>

				
						<div class="paket-putih">
						
						<div class="chakra-aspect-ratio css-41">
							<img alt="" 
								style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent;layout:fill"
								sizes="100vw"
								src="<?= base_url('assets/img/paket/').$pak['foto_paket'] ?>" />
						</div>
							
						
						<div class="chakra-stack css-42">
							
							<div class="chakra-stack css-43">
						
								<h3 class="chakra-heading css-44"><?= $pak['nama_paket']?></h3>
								
								<p class="chakra-text css-45"><?= $pak['deskripsi'] ?></p>
								
								<div class="css-46"></div>
							</div>

							
							<a class="chakra-button css-47" href="<?= base_url('publik/content/detail/'.$pak['id_paket'])?>">Lihat Detail
								
								<span class="chakra-button__icon css-32"><svg stroke="currentColor" fill="currentColor"
										stroke-width="0" version="1.1" viewBox="0 0 16 16" aria-hidden="true" focusable="false" height="1em"
										width="1em" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M9.707 13.707l5-5c0.391-0.39 0.391-1.024 0-1.414l-5-5c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l3.293 3.293h-9.586c-0.552 0-1 0.448-1 1s0.448 1 1 1h9.586l-3.293 3.293c-0.195 0.195-0.293 0.451-0.293 0.707s0.098 0.512 0.293 0.707c0.391 0.391 1.024 0.391 1.414 0z">
										</path>
									</svg>
								</span>
							</a>
						</div>
					</div>

					<?php else : ?>

					<div class="paket-hijau">
						
						<div class="container css-48">
							
							<div class="chakra-aspect-ratio css-49">
								<img alt="" 
									style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent;layout:fill"
									sizes="100vw"
									src="<?= base_url('assets/img/paket/').$pak['foto_paket'] ?>" />
									</div>
							<div class="chakra-stack css-42">
								<div class="chakra-stack css-43">
									
									<h3 class="chakra-heading css-50"><?= $pak['nama_paket'] ?></h3>
									<p class="chakra-text css-45"><?= $pak['deskripsi'] ?></p>
									<!-- <div class="css-46">
										<span class="css-51">
										<span class="css-52">Welcome drink + snack</span>
										</span><span class="css-51">
											<span class="css-52">Outbond/fungame</span>
										</span>
										<span class="css-51">
											<span class="css-52">River tubing</span>
										</span>
										<span class="css-51">
											<span class="css-52">Spot foto</span>
										</span>
										<span class="css-51">
											<span class="css-52">Makan siang + minum</span>
										</span>
										<span class="css-51">
											<span class="css-52">Trainer</span>
										</span>
										<span class="css-51">
											<span class="css-52">
												Air mineral
											</span>
										</span>
										<span class="css-51">
										<span class="css-52">Oleh - oleh teh kemuning</span>
										</span>
									</div> -->
								</div>
								<a class="chakra-button css-52" href="<?= base_url('publik/content/detail/'.$pak['id_paket'])?>">Lihat Detail<span
										class="chakra-button__icon css-32"><svg stroke="currentColor" fill="currentColor"
											stroke-width="0" version="1.1" viewBox="0 0 16 16" aria-hidden="true" focusable="false" height="1em"
											width="1em" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M9.707 13.707l5-5c0.391-0.39 0.391-1.024 0-1.414l-5-5c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l3.293 3.293h-9.586c-0.552 0-1 0.448-1 1s0.448 1 1 1h9.586l-3.293 3.293c-0.195 0.195-0.293 0.451-0.293 0.707s0.098 0.512 0.293 0.707c0.391 0.391 1.024 0.391 1.414 0z">
											</path>
										</svg></span></a>
							</div>
						
							<div class="chakra-aspect-ratio css-53">
								<img alt="" 
									style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent;layout:fill"
									sizes="100vw"
									src="<?= base_url('assets/img/paket/').$pak['foto_paket'] ?>" />
						</div>
					</div>
					</div>
					<?php endif; ?>
					<?php endforeach; ?>

				</div>
				
			</div>
		</div>
	
		<!-- <div class="css-promo">
			<img alt="" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent;layout:fill" sizes="100vw"/>
			
			<div class="css-54"> ddddddddddddddddd</div>
			
			<div class="container css-28">
			<text class="chakra-heading css-29">Peserta lebih dari 30 akan medapatkan potongan harga!</text>
				<a class="chakra-button css-30" target="_blank" href="https://api.whatsapp.com/send?phone=6285326600685&amp;text=Halo%20admin%20Kemuning%20Ceria.%20Saya%20mau%20booking%20Paket%20Wisata%20Kemuning.%20Bisa%20minta%20infonya%3F">Booking
					Sekarang
					<span class="chakra-button__icon css-32"><svg stroke="currentColor" fill="currentColor"
							stroke-width="0" version="1.1" viewBox="0 0 16 16" aria-hidden="true" focusable="false" height="1em"
							width="1em" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M9.707 13.707l5-5c0.391-0.39 0.391-1.024 0-1.414l-5-5c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l3.293 3.293h-9.586c-0.552 0-1 0.448-1 1s0.448 1 1 1h9.586l-3.293 3.293c-0.195 0.195-0.293 0.451-0.293 0.707s0.098 0.512 0.293 0.707c0.391 0.391 1.024 0.391 1.414 0z">
							</path>
						</svg>
					</span>
				</a>
			</div>
		</div> -->
	
		<div class="galeri">
			
			<div class="container css-33">
			
			<div class="css-36">
						<?php foreach($galeri as $galeris) :?>
						<div class="chakra-aspect-ratio css-37"><img alt="" loading="lazy" decoding="async" data-nimg="fill"
								style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent;layout:fill"
								sizes="100vw"
								src="<?= base_url('assets/img/paket/').$galeris['galeri'] ?>" /></div>
						<?php endforeach; ?>
					</div>
				
					<div class="css-video">
					
						<div class="container css-38">
							
							<div class="chakra-aspect-ratio css-39">
								<iframe src="https://www.youtube.com/embed/ZnBH1iR0mU8"></iframe>
							</div>
						</div>
					</div>
			</div>
		</div>
		
		<div class="css-40">
			
		<div class="container css-55">
			
				<div class="css-56">
					
					<div class="chakra-stack css-43">
					<span class="chakra-heading css-57">Peta</span>
						
						<div class="css-58"><iframe
								src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15819.08733527817!2d111.123363!3d-7.5997924!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9057b283d3b6a2c5!2sKemuning%20Ceria%20Outbound%20Jeep%20Adventure!5e0!3m2!1sid!2sid!4v1672319772444!5m2!1sid!2sid"
								referrerPolicy="no-referrer-when-downgrade" loading="lazy" height="200px" width="100%"
								allowfullscreen=""></iframe>
                        </div>
                        <?php foreach($konfigurasi as $config){?>

					</div>
					<div class="chakra-stack css-43"><span class="chakra-heading css-57">Alamat</span>
						
						<!-- <p class="chakra-text text-white">Ngadirejo, RT.02/RW.02,</p> -->
						<p class="chakra-text text-white"><?= $config['alamat'] ?></p>
						<!-- <p class="chakra-text text-white">Kabupaten Karanganyar, Jawa Tengah 57793</p> -->
					</div>
					<div class="chakra-stack css-43"><span class="chakra-heading css-57">Kontak</span>
						<a class="chakra-text css-59" href="https://wa.me/<?=$config['no_wa']?>"><svg stroke="currentColor"
								fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
								</path>
							</svg>WhatsApp</a><a class="chakra-text css-59"
							href="https://instagram.com/<?=$config['instagram']?>"><svg stroke="currentColor" fill="none"
								stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em"
								width="1em" xmlns="http://www.w3.org/2000/svg">
								<rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
								<path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
								<line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
							</svg>Instagram</a><a class="chakra-text css-59"
							href="https://facebook.com/<?=$config['facebook']?>"><svg stroke="currentColor" fill="none"
								stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em"
								width="1em" xmlns="http://www.w3.org/2000/svg">
								<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
							</svg>Facebook</a>
					</div>
                    <?php }?>

					<div class="chakra-stack css-43">
                        <span class="chakra-heading css-57">Menu</span>
                        <?php foreach($paket as $pak){?>
                        <a class="chakra-text css-59" href="<?= base_url('publik/content/detail/').$pak['id_paket'] ?>"><?= $pak['nama_paket'] ?></a>
                        <?php }?>
                        
                    </div>
				</div>
			</div>
		</div>
		
	</div>
	<script rel="stylesheet" src="<?= base_url('assets/front/_next/js/') ?>script.js"></script>
	 <!-- Include jQuery -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Include Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
        $(document).ready(function () {
			$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000, 
    autoplayHoverPause: true,
    animateOut: 'fadeOut', 
    animateIn: 'fadeIn',   
    smartSpeed: 800, 
    responsive: {
        0: { items: 1 },
        600: { items: 1 },
        1000: { items: 1 }
    }
});
        });
    </script>

</body>

</html>
