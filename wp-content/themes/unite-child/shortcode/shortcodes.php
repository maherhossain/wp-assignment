<?php

// Short for displaying last 5 films
add_shortcode('films', 'unite_film_scode');
function unite_film_scode($attr, $content){
	$attributes = extract(shortcode_atts(
		array(
			'title' => 'Films',
		),
		$attr
	));

	ob_start();
	?>

	<section id="films">	
		<?php 
        $films = new WP_Query(array(
          'post_type'		=>'films',
          'orderby' 		=> 'date',
          'order' 			=> 'DESC',
          'posts_per_page'  	=> 5
        ));

        while($films->have_posts()) : $films->the_post(); ?>

			<div class="media">
			  <div class="media-left" style="width: 25%;">
			    <a href="#">
			      <?php the_post_thumbnail(); ?>
			    </a>
			  </div>
			  <div class="media-body">
			    <h4 class="media-heading"><?php the_title(); ?></h4>
			    <p><?php the_excerpt(); ?></p>
			  </div>
			</div>

          <?php endwhile; ?>
    </section>

<?php return ob_get_clean();  } ?>


<!-- display all post -->

<?php
add_shortcode('all-films', 'unite_all_film_scode');
function unite_all_film_scode($attr, $content){
	$attributes = extract(shortcode_atts(
		array(
			'title' => 'Films',
		),
		$attr
	));

	ob_start();

    $films = new WP_Query(array(
		  'post_type' =>'films',
	      'orderby' => 'date',
	      'order' => 'ASC',
	      'posts_per_page' => -1
    ));

    while($films->have_posts()) : $films->the_post(); ?>

        <div class="col-md-4 col-sm-6">
			<div class="thumbnail">
		      <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
		      <div class="caption">
		        <h3><?php the_title(); ?></h3>
		        <p><?php the_content(); ?></p>
				<p><b>Country:</b> 
		            <?php 
		            $terms = get_the_terms(get_the_id(),'country');
		               foreach($terms as $term){
		                echo $term->name. "&nbsp; ";}             
		            ?>
		        </p> 
		        <p><b>Genera:</b> 
			        <?php 
			        $terms = get_the_terms(get_the_id(),'genre');
			           foreach($terms as $term){
			            echo $term->name. "&nbsp; ";}             
			        ?>
		        </p>
		        <p><b>Ticket Price:</b> <?php echo get_post_meta($post->ID,'ticketPrice', true); ?></p>
		        <p><b>Release Date:</b> <?php echo get_post_meta($post->ID,'releaseDate', true); ?></p>
		      </div>
		    </div>
		</div>
		
        <?php endwhile; ?>

<?php return ob_get_clean();  } ?>