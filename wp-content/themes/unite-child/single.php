<?php get_header(); ?>


<?php 
        $films = new WP_Query(array(
          'post_type' =>'films',
          'posts_per_page' => 1
        ));

        while($films->have_posts()) : $films->the_post(); ?>
        <div class="col-md-8 offset-md-2">
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


<?php get_footer(); ?>