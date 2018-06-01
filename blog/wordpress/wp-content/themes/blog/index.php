<?php get_header(); ?>
<!-- intentionally empty -->
<div class="container" id="blog">

</div>

<div class="container-fluid" id="blogContainer">
    <div class="row" id="blogRow">
        <div class="col-md-12">
            <div class="search-form-container">
                <?php get_search_form(); ?>
            </div>
            <hr class="search-hr">
        </div>
    </div>
    <?php
			$count = 1;
			while(have_posts()) : the_post();
				$summary = get_post_meta(get_the_id(), 'Summary', true);
				if($count % 2 != 0){?>
        <div class="row" id="blogRow">
            <div class="col-md-4 col-sm-4" id="leftImg">
                <img class="featured" src="<?php echo the_post_thumbnail_url(" large "); ?>">
            </div>
            <div class="col-md-8 col-sm-8" id="textLeft">
                <h2>

                    <?php the_title();?>
                </h2>
                <span class="blogAuthor"><?php the_author();?></span>
                <br>
                <span class="blogDate"><?php echo get_the_date();?></span>
                <br>
                <span class="summary"><?php echo $summary;?></span>
                <p><a class="blogPost" href="<?php the_permalink() ?>">Continue Reading</a></p>
                <br>
            </div>
        </div>
        <?php
				}else{ ?>
            <div class="row" id="blogRow">
                <div class="col-md-4 col-sm-4 col-sm-push-8" id="rightImg">
                    <img class="featured" src="<?php echo the_post_thumbnail_url(" large "); ?>">
                </div>
                <div class="col-md-8 col-sm-8 col-sm-pull-4" id="textRight">
                    <h2>
                        <?php the_title();?>
                    </h2>
                    <span class="blogAuthor"><?php the_author();?></span>
                    <br>
                    <span class="blogDate"><?php echo get_the_date();?></span>
                    <br>
                    <span class="summary"><?php echo $summary;?></span>
                    <p><a class="blogPost" href="<?php the_permalink() ?>">Continue Reading</a></p>
                </div>

            </div>
            <?php }
					$count++;
					endwhile;					
				?>
            <div class="col-md-12 pagination">
                <?php base_pagination() ?>
            </div>
</div>
<?php get_footer(); ?>
