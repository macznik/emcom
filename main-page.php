	<?php /* Template Name: Strona Główna eM-COM */ ?>
<?php get_header(); ?>
	<div class="welcome">	    
	    	<?php if (get_locale() == 'en_GB') { ?>
	    		<h2 class="welcome_main">Welcome at eM-COM</h2>
	    	<?php } else { 	?>
	    		 <h2 class="welcome_main">Witamy w eM-COM</h2>
	    	<?php } ?>
	    <a href="realizacje"><div class="button_my">Portfolio</div></a>
	</div>
	<div class="container">
		<div class="how_we_do">
			<?php if (get_locale() == 'en_GB') { ?>
				<h2 class="header_how_we_do">How <strong>we work ?</strong></h2>
			<?php } else { ?>
				<h2 class="header_how_we_do">Jak <strong>działamy ?</strong></h2>
			<?php } ?>
			<div class="line3"></div>
			<div class="line4"></div>
			<div class="col-md-12 col-xs-12 col-sm-12">
				<div class="col-md-4 col-xs-12 col-sm-12">
					<div class="idea">						
						<img class="m_img_idea" src="<?php echo get_template_directory_uri();?>/img/idea.png" />
						<div class="line5"></div>					
						<div class="line6"></div>
						<div class="ideas">
							<?php if(get_locale() == 'en_GB') { ?>
								<h3 class="header_ideas">We Invent</h3>
							<?php } else { ?>
								<h3 class="header_ideas">Wymyślamy</h3>
							<?php } ?>
						</div>					
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-12">
					<div class="idea">						
						<img class="m_img_idea" src="<?php echo get_template_directory_uri();?>/img/hand.png" />
						<div class="line5"></div>					
						<div class="line6"></div>
						<div class="ideas">
							<?php if(get_locale() == 'en_GB') { ?>
								<h3 class="header_ideas">We talk with You</h3>
							<?php } else { ?>
								<h3 class="header_ideas">Rozmawiamy z Tobą</h3>
							<?php } ?>
						</div>					
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-12">
					<div class="idea">						
						<img class="m_img_idea" src="<?php echo get_template_directory_uri();?>/img/pc.png" />
						<div class="line5"></div>					
						<div class="line6"></div>
						<div class="ideas">
							<?php if(get_locale() == 'en_GB') { ?>
								<h3 class="header_ideas">We Implement</h3>
							<?php } else { ?>
								<h3 class="header_ideas">Wdrażamy</h3>
							<?php } ?>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-oferta" style="background:url('<?php echo get_template_directory_uri();?>/img/section-oferta.png">
		<div class="container">
			<h1 class="offer-header">
				<?php if(get_locale() == 'en_GB') { ?>
					OFFER
				<?php } else { ?>
					OFERTA
				<?php } ?>
			</h1>
			<div class="col-md-4 col-xs-12 col-sm-12">
				<?php 
					if(get_locale() == 'en_GB') {
				?>
					<a href="graphic-projects">
				<?php } else { ?>
					<a href="projekty-graficzne">
						<div class="main-offer">	
							<p class="pi-offer">
								<?php if(get_locale() == 'en_GB') { ?>
									Graphic projects
								<?php } else { ?>
									Projekty graficzne
								<?php }	?>
							</p>
							<div class="offer-svg">
								<img class="offer-img" src="<?php echo get_template_directory_uri();?>/img/vector-white.svg" />
								<img class="offer-img-hover" src="<?php echo get_template_directory_uri();?>/img/vector-red.svg" />
							</div>
						</div>
					</a>
				<?php } ?>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12">
				<?php 
					if(get_locale() == 'en_GB') {
				?>
					<a href="websites">
				<?php } else { ?>
					<a href="strony-internetowe">	
						<div class="main-offer">	
							<p class="pi-offer">
								<?php if(get_locale() == 'en_GB') { ?>
									Websites
								<?php } else { ?>
									Strony internetowe
								<?php }	?>
							</p>
							<div class="offer-svg">
								<img class="offer-img" src="<?php echo get_template_directory_uri();?>/img/responsive-white.svg" />
								<img class="offer-img-hover" src="<?php echo get_template_directory_uri();?>/img/responsive-red.svg" />
							</div>
						</div>
					</a>
				<?php } ?>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12">
				<?php 
					if(get_locale() == 'en_GB') {
				?>
					<a href="application">	
				<?php } else { ?>
					<a href="aplikacje">
						<div class="main-offer">	
							<p class="pi-offer">
								<?php if(get_locale() == 'en_GB') { ?>
									Web Application
								<?php } else { ?>
									Aplikacje webowe
								<?php }	?>
							</p>
							<div class="offer-svg">
								<img class="offer-img" src="<?php echo get_template_directory_uri();?>/img/web-solution-white.svg" />
								<img class="offer-img-hover" src="<?php echo get_template_directory_uri();?>/img/web-solution-red.svg" />
							</div>
						</div>
					</a>				
				<?php } ?>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12">
				<?php 
					if(get_locale() == 'en_GB') {
				?>
					<a href="dedicated-crm">	
				<?php } else { ?>
					<a href="dedykowany-crm">
						<div class="main-offer">	
							<p class="pi-offer">
								<?php if(get_locale() == 'en_GB') { ?>
									Dedicated CRM
								<?php } else { ?>
									Dedykowany CRM
								<?php }	?>
							</p>
							<div class="offer-svg">
								<img class="offer-img" src="<?php echo get_template_directory_uri();?>/img/crm-white.svg" />
								<img class="offer-img-hover" src="<?php echo get_template_directory_uri();?>/img/crm-red.svg" />
							</div>
						</div>
					</a>
				<?php } ?>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12">
				<?php 
					if(get_locale() == 'en_GB') {
				?>
					<a href="online-shop">
				<?php } else { ?>
					<a href="sklepy-internetowe">	
						<div class="main-offer">	
							<p class="pi-offer">
								<?php if(get_locale() == 'en_GB') { ?>
									Online Shop
								<?php } else { ?>
									Sklepy internetowe
								<?php }	?>
							</p>
							<div class="offer-svg">
								<img class="offer-img" src="<?php echo get_template_directory_uri();?>/img/shop-white.svg" />
								<img class="offer-img-hover" src="<?php echo get_template_directory_uri();?>/img/shop-red.svg" />
							</div>
						</div>
					</a>
				<?php } ?>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-12">
				<?php 
					if(get_locale() == 'en_GB') {
				?>
					<a href="mysql-database-support">
				<?php } else { ?>
					<a href="obsluga-baz-danych-mysql">	
						<div class="main-offer">	
							<p class="pi-offer">
								<?php if(get_locale() == 'en_GB') { ?>
									MySQL database support
								<?php } else { ?>
									Obsługa baz danych MySQL
								<?php }	?>
							</p>
							<div class="offer-svg">
								<img class="offer-img" src="<?php echo get_template_directory_uri();?>/img/mysql-white.svg" />
								<img class="offer-img-hover" src="<?php echo get_template_directory_uri();?>/img/mysql-red.svg" />
							</div>
						</div>
					</a>
				<?php } ?>
			</div>
		</div>			
	</div>	
	<div class="portfolio-main-page">
		<h2 class="portfolio-header">
			<?php if(get_locale() == 'en_GB') { ?>
				Our <span class="change-color">Portfolio</span>
			<?php } elseif (get_locale() == 'pl_PL') { ?>
				Nasze <span class="change-color">Portfolio</span>
			<?php } ?>
		</h2>
		<div class="line3"></div>
		<div class="line4"></div>
		<div class="portfolio-examples">
			<?php if(have_rows('portfolio_examples')): while(have_rows('portfolio_examples')): the_row(); ?>
				<div class="portfolio-block">
					<a href="realizacje/<?php the_sub_field('url_website');?>"  title="<?php the_sub_field('tytul_portfolio');?>">
						<div class="img-hidden-main-page">
							<img src="<?php the_sub_field('portfolio_img');?>" class="portfolio-img" alt="<?php the_sub_field('alt_portfolio');?> title="<?php the_sub_field('tytul_portfolio');?>" />
						</div>
						<div class="bottom_line">
							<div class="bottom_line_name">
								<?php the_sub_field('tytul_portfolio');?>	
							</div>
							<div class="bottom_line_logo">
								<img class="bottom_line_logo_img" src="<?php the_sub_field('bottom_line_logo');?>" />
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; endif; ?>			
		</div>
		<a href="realizacje">
			<div class="portfolio-button">
				<?php if(get_locale() == 'en_GB') { ?>
					MORE
				<?php } elseif (get_locale('pl_PL')) { ?>
					WIĘCEJ 
				<?php } ?>
			</div>
		</a>
	</div>


	
<?php get_footer(); ?>
