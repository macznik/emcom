<?php /* Template Name: O firmie eM-COM */ ?>
<?php get_header(); ?>

<?php 
	$id = get_the_ID();
	if ($id == 10) {
?>
<?php if(get_locale() == 'en_GB') { ?>
<div class="head_title">ABOUT US</div>
<div class="container">
	<div class="about-us">
		Our main goal is to create projects for the 21st century - modern, unconventional, that will meet the expectations of even the most demanding customers. We approach each project with great care and full commitment - trying to focus on the innovative side, taking into account the customer's instructions.
	</div>
	<div class="col-md-6 col-xs-12 col-sm-12">
		<div class="responsive_about">
			<img class="responsive_img_about" src="<?php echo get_template_directory_uri();?>/img/responsive.svg" />
			<h2 class="h2_title">Full responsiveness</h2>
			<p class="responsive_about_text">
				In 2015, 33% of the websites browsed use mobile devices such as smarphone and tablets.
			</p>
		</div>
	</div>
	<div class="col-md-6 col-xs-12 col-sm-12">
		<div class="responsive_about">
			<img class="responsive_img_about" src="<?php echo get_template_directory_uri();?>/img/diamond.svg" />
			<h2 class="h2_title">Pure code</h2>
			<p class="responsive_about_text">
				If the company ordering the project wishes to have the source code of the page after completing the order with a full description of its activities - it is prepared with due diligence - so that any company that takes over the website can work with the code without any problems.
			</p>
		</div>
	</div>
	<div class="col-md-6 col-xs-12 col-sm-12">
		<div class="responsive_about">
			<img class="responsive_img_about" src="<?php echo get_template_directory_uri();?>/img/monitor.svg" />
			<h2 class="h2_title">One Page website</h2>
			<p class="responsive_about_text">
				The popular form of websites today is the so-called "one page" option, where the website consists of one long page divided into sections.
			</p>
		</div>
	</div>
	<div class="col-md-6 col-xs-12 col-sm-12">
		<div class="responsive_about">
			<img class="responsive_img_about" src="<?php echo get_template_directory_uri();?>/img/mobile.svg" />
			<h2 class="h2_title"></h2>
			<p class="responsive_about_text">
				Today's computer telephony technology can not imagine telephone calls without the use of smartphones. Every company operating on the Internet has a mobile application in its offer that allows direct connection with a given service, information, product on the internet - without the need to open and search the page in the browser.
			</p>
		</div>
	</div>
</div>

<?php } else { ?>
<div class="head_title">O NAS</div>
<div class="container">
	<div class="about-us">
		Naszym głównym celem jest tworzenie projektów, na miarę XXI wieku - nowoczesnych, nieszablonowych, które będą spełniały oczekiwania nawet najbardziej wymagającym klientom. Do każdego zlecenia podchodzimy z ogromną starannoscią i pełnym zaangażowaniem - starając się przy tym ukierunkować w stronę nowatorską, biorąc pod uwagę wskazówki klienta.
	</div>

	<div class="col-md-6 col-xs-12 col-sm-12">
		<div class="responsive_about">
			<img class="responsive_img_about" src="<?php echo get_template_directory_uri();?>/img/responsive.svg" />
			<h2 class="h2_title">Pełna responsywność</h2>
			<p class="responsive_about_text">
				W roku 2015 33 % przeglądanych stron internetowych korzysłało z urzadzeń mobilnych, typu smarphone, tablet.
			</p>
		</div>

	</div>
	<div class="col-md-6 col-xs-12 col-sm-12">
		<div class="responsive_about">
			<img class="responsive_img_about" src="<?php echo get_template_directory_uri();?>/img/diamond.svg" />
			<h2 class="h2_title">Czysty kod</h2>
			<p class="responsive_about_text">
				Jeżeli firma zlecająca projekt pragnie po zakończeniu zlecenia posiadać kod źródłowy strony z pełnym opisem jego działań - jest to przygotowane z należytą starannością - by każda firma przejmująca opiekę nad stroną - była w stanie bez problemów pracować z kodem.
			</p>
		</div>
	</div>
	<div class="col-md-6 col-xs-12 col-sm-12">
		<div class="responsive_about">
			<img class="responsive_img_about" src="<?php echo get_template_directory_uri();?>/img/monitor.svg" />
			<h2 class="h2_title">Jedna strona "One Page"</h2>
			<p class="responsive_about_text">
				Popularną dzisiaj formą stron internetowych,jest opcja tzw "one page", gdzie strona www składa się z jednej długiej strony podzielonej na sekcje.
			</p>
		</div>
	</div>
	<div class="col-md-6 col-xs-12 col-sm-12">
		<div class="responsive_about">
			<img class="responsive_img_about" src="<?php echo get_template_directory_uri();?>/img/mobile.svg" />
			<h2 class="h2_title">Aplikacje mobilne</h2>
			<p class="responsive_about_text">
				Dzisiejsza technologia telefonii komputerowej nie wyobraża sobie połączeń telefonicznych bez użycia smartphonów. Każda firma działająca w internecie, ma w swojej ofercie aplikacje mobilną, która umozliwia bezpośrednie połączenie z daną usługą, informacją, produktem w internecie - bez potrzeby otwierania i wyszukiwania strony w przeglądarce.
			</p>
		</div>
	</div>

</div>

<?php } ?>

<?php } else { ?>
	

<?php } ?>

<?php get_footer(); ?>
