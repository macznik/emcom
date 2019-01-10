<?php /* Template Name: Portfolio eM-COM */ ?>
<?php get_header(); ?>

<div class="head_title" style="margin-top:0px; padding-top:25px;background-color: #e8e8e8;">
	<?php if(get_locale() == 'en_GB') { ?>
		Realizations
	<?php } else { ?>
		Realizacje
	<?php } ?>
</div> 
<div class="realizacjeTlo">
	<?php if(have_rows('realizacje')): while(have_rows('realizacje')): the_row(); ?>

		<div class="col-md-4 col-xs-12 col-sm-12">
			<div class="realizacje">
				<a href="/<?php the_sub_field('link');?>">
					<div class="realizacje_img">
						<img class="realizacjeImg" src="<?php the_sub_field('obrazek');?>" />
						<p class="titleRealizacje"><?php the_sub_field('title');?></p>
					</div>
				</a>
			</div>
		</div>

	<?php endwhile; endif; ?>
</div>



<?php get_footer(); ?>
