<?php 
/*Template Name: Events*/

get_header();
?>
<div class="upcoming-events">
<h2>Upcoming Event</h2>
<?php 
$loop = new WP_Query( array( 'post_type' => 'event', 'meta_key' => 'event_date', 'orderby' => 'meta_value', 'order' => 'ASC' ) ); 
while ( $loop->have_posts() ) { $loop->the_post();
	$event = get_field('event_date');
	$event_date = (int)strtotime(get_field('event_date'));
	$present_date = (int)strtotime(date("F j, Y"));
	$event_title = get_field('event_title');
	$event_details = get_field('event_details');
	$event_stiming = get_field('event_start_timing');
	$event_etiming = get_field('event_end_timing');

if ($present_date <= $event_date) {?>
	<div class="upcoming-container">
		<?php if ($event_title) {?><div class="event-title"> <?php  echo $event_title;?> </div> <?php }?>
		<?php if($event_details) {?><div class="event-details"> <?php  echo $event_details; ?> </div><?php }?>
		<?php if($event_stiming) {?><div class="event-start-timing"> <?php  echo $event_stiming; ?> </div><?php }?>
		<?php if($event_etiming) {?><div class="event-end-timing"> <?php echo $event_etiming;?> </div><?php }?>
		<?php if($event_date) {?><div class="event-date"><?php  echo $event; ?></div><?php }?>
		<?php $postid = get_the_ID();?>
		<?php wp_set_post_categories( $postid, array( 2 ) ); ?>
	</div>
	<?php }?>

	<?php }
	wp_reset_postdata();?>
</div>


<div class="past-events">
<h2>Past Events</h2>
<?php 
while ( $loop->have_posts() ) { $loop->the_post();
	$event = get_field('event_date');
	$event_date = (int)strtotime(get_field('event_date'));
	$present_date = (int)strtotime(date("F j, Y"));
	$event_title = get_field('event_title');
	$event_details = get_field('event_details');
	$event_stiming = get_field('event_start_timing');
	$event_etiming = get_field('event_end_timing');

if ($present_date > $event_date) {?>
	<div class="past-container">
	<?php if ($event_title) {?><div class="event-title"> <?php  echo $event_title;?> </div> <?php }?>
		<?php if($event_details) {?><div class="event-details"> <?php  echo $event_details; ?> </div><?php }?>
		<?php if($event_stiming) {?><div class="event-start-timing"> <?php  echo $event_stiming; ?> </div><?php }?>
		<?php if($event_etiming) {?><div class="event-end-timing"> <?php echo $event_etiming;?> </div><?php }?>
		<?php if($event_date) {?><div class="event-date"><?php  echo $event; ?></div><?php }?>
		<?php $postid = get_the_ID();?>
		<?php wp_set_post_categories( $postid, array( 3 ) ); ?>
	</div>
	<?php }?>
		<?php }
	wp_reset_postdata();?>
</div>



<?php


get_footer();
