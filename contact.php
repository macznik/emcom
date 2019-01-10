<?php /* Template Name: Contact eM-COM */ ?>
<?php get_header(); ?>
<div class="head_title">
	<?php if(get_locale() == 'en_GB') { ?>
		Contact
	<?php } else { ?>
		Kontakt
	<?php } ?>
</div>
<div class="container">
	<div class="col-md-6 col-xs-12 col-sm-12">
		<?php echo do_shortcode('[contact-form-7 id="106" title="Formularz 1"]');?>
	</div>
</div>
<?php get_footer(); ?>
