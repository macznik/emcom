<?php wp_footer(); ?>

<div class="footer">
	<?php 
		$id = get_the_ID();
		if($id == 6 || $id == 86) {
	?>

	<div class="footer-back">
		<h2 class="footer-clients">
			<?php if(get_locale() == 'en_GB') { ?>
				clients
			<?php } elseif(get_locale() == 'pl_PL') { ?>
				klienci
			<?php } ?>
		</h2>
		<div class="container">
			<div class="clients-slider-footer">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
		    			<div class="item active">
		    				<div class="clients-div-footer">
		    					<img class="clients-img-footer" src="<?php echo get_template_directory_uri();?>/img/clients/bstrefa.jpg" />	
		    				</div>
		    				<div class="clients-div-footer">
		    					<img src="<?php echo get_template_directory_uri();?>/img/clients/ekofabryka.png" alt="" class="clients-img-footer" />
		    				</div>
		    				<div class="clients-div-footer">
		    					<img src="<?php echo get_template_directory_uri();?>/img/clients/grono-logo.png" alt="" class="clients-img-footer">
		    				</div>
		    				<div class="clients-div-footer">
		    					<img src="<?php echo get_template_directory_uri();?>/img/clients/julia.png" alt="" class="clients-img-footer">
		    				</div>
		    			</div>
		    			<div class="item">
							<div class="clients-div-footer">
		    					<img class="clients-img-footer" src="<?php echo get_template_directory_uri();?>/img/clients/witex.png" />	
		    				</div>
		    				<div class="clients-div-footer">
		    					<img src="<?php echo get_template_directory_uri();?>/img/clients/salsation.png" alt="" class="clients-img-footer" />
		    				</div>
		    				<div class="clients-div-footer">
		    					<img src="<?php echo get_template_directory_uri();?>/img/clients/l2m.png" alt="" class="clients-img-footer">
		    				</div>
		    				<div class="clients-div-footer">
		    					<img src="<?php echo get_template_directory_uri();?>/img/clients/adanza.png" alt="" class="clients-img-footer">
		    				</div>
		    			</div>
		    			<div class="item">
							<div class="clients-div-footer">
		    					<img class="clients-img-footer" src="<?php echo get_template_directory_uri();?>/img/clients/arete.png" />	
		    				</div>
		    				<div class="clients-div-footer">
		    					<img src="<?php echo get_template_directory_uri();?>/img/clients/lvd.png" style="width:auto !important; height:100%  !important;" alt="" class="clients-img-footer" />
		    				</div>
		    				<div class="clients-div-footer">
		    					<img src="<?php echo get_template_directory_uri();?>/img/clients/salsation.png" alt="" class="clients-img-footer">
		    				</div>
		    				<div class="clients-div-footer">
		    					<img src="<?php echo get_template_directory_uri();?>/img/clients/adanza.png" alt="" class="clients-img-footer">
		    				</div>
		    			</div>
		    		</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="fb-footer">
							<a href="#">
								<img src="<?php echo get_template_directory_uri();?>/img/facebook.svg" alt="" class="facebook-footer-img">
							</a>
						</div>
						<div class="instagram-footer">
							<a href="#">
								<img src="<?php echo get_template_directory_uri();?>/img/instagram.svg" alt="" class="instagram-footer-img">
							</a>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="copyright-text">
							&#9400; 2015 - <?php echo date('Y');?> eM-COM All rights reserved
						</div>
					</div>
					<div class="col-md-4 col-xs-6 col-sm-6">
						<img src="http://em-com.pl/wp-content/themes/em-com/img/grey-logo.png" class="footer-logo" />
					</div>
				</div>
			</div>
		</div>
	</div>	
	<?php } else { ?>
	<div class="footer-back-second">
		<div class="copyright">
			<div class="container">
				<div class="col-md-4 col-xs-6 col-sm-6">
					<div class="fb-footer">
						<a href="https://www.facebook.com/emcomwebsolutions/">
							<img src="<?php echo get_template_directory_uri();?>/img/facebook.svg" alt="" class="facebook-footer-img">
						</a>
					</div>
					<div class="instagram-footer">
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/img/instagram.svg" alt="" class="instagram-footer-img">
						</a>
					</div>
				</div>
				<div class="col-md-4 col-xs-6 col-sm-6">
					<div class="copyright-text">
						&#9400; 2015 - <?php echo date('Y');?> eM-COM All rights reserved
					</div>
				</div>
				<div class="col-md-4 col-xs-6 col-sm-6">
					<img src="http://em-com.pl/wp-content/themes/em-com/img/grey-logo.png" class="footer-logo" />
				</div>
			</div>
		</div>
	</div>

	<?php } ?>
</div>

</body></html>
