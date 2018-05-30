<?php get_header(); ?>
    <!-- intentionally empty -->
	<div class="container" id="blog">

    </div>
	
    <div class="container-fluid" id="blogContainer">
		<div class="search-form-container">
			<div class="row">
				<div class="col-md-4" id="searchBack">
					<div id="blogBack">
						<a href="http://smart2.icoolshow.net/blog/"><i class="fas fa-arrow-left"></i>  Return to main page</a>			
					</div>
				</div>
				<div class="col-md-8">
					<?php get_search_form();
					$count = 0;?>					
				</div>
			</div>
		</div>
		<div id="searchResults">
				<?php 
					/* Search Count */ 
					$allsearch = &new WP_Query("s=$s&showposts=-1"); 
					$key = wp_specialchars($s, 1); 
					$count = $allsearch->post_count; 
					if($count != 0){
						_e('Search Result for '); 
						echo $key; 
						_e(' &mdash; '); 
						echo $count . ' '; _e('articles');
					}else{
						echo 'Sorry, no results found.';
					}					
					wp_reset_query(); 
				?>
		</div>
        <?php
			while(have_posts()) : the_post();
				$count++;
				$summary = get_post_meta(get_the_id(), 'Summary', true);
		?>
				<div class="row equal" id="blogRow">
					<div class="col-md-4" id="leftImg">
						<img class="featured" src="<?php echo the_post_thumbnail_url(" medium_large "); ?>">
					</div>
					<div class="col-md-8" id="textLeft">
							<h2>
								<?php the_title();?>
							</h2>
							<span class="blogDate"><?php echo get_the_date();?></span>
							<br>
							<span class="summary"><?php echo $summary;?></span>
							<p><a class="blogPost" href="<?php the_permalink() ?>">Continue Reading</a></p>
							<br>
					</div>
				</div>
		<?php
			endwhile;				
		?>
    </div>
<?php get_footer(); ?>
