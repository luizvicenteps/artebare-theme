	<li>
    	<div class="catgimg2_container">
    		<a href="<?php the_permalink(); ?>">
    			<!-- <img alt="" src="<?php //the_post_thumbnail('large', array('class' => 'img-responsive')); ?>"> -->
                <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>"
			</a>
		</div>
    	<h2 class="catg_titile">
    		<a href="<?php the_permalink(); ?>">
    			<?php the_title(); ?>
			</a>
		</h2><br>
        <div class="comments_box">
        	<span class="meta_date"><?php echo get_the_date(); ?></span>
		<!--<span class="meta_comment"><a href="<?php //the_permalink(); ?>"><?php //the_tags('Tags: ', ', '); ?></a></span> -->
    		<span class="meta_comment"><?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></a></span>
    		<span class="meta_more">
    			<a  href="<?php the_permalink(); ?>">Leia mais...</a>
			</span>
		</div>
        <p> <?php the_excerpt(); ?></p>
    </li>
