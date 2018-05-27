<div class="single_page_content">
<h2 class="post_titile">
	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
	<div class="post_commentbox">
		<span>
			<i class="fa fa-calendar"></i><?php the_time('d/M/Y') ?>
		</span>
		<a href="#">
			<?php the_category('- ') ?>
		</a>
	<p>	<?php 	the_excerpt();  ?></p>
	</div>
</div>
