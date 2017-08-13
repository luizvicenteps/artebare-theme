    <li>
      	<div class="media wow fadeInDown">
      		<a class="media-left" href="<?php the_permalink(); ?>">
      			<?php the_post_thumbnail(array(112,75), array('class' => 'img-responsive'));?>
      		</a>
        <div class="media-body">
          	<h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          	<div class="comments_box">
          		<span class="meta_date"><?php echo get_the_date(); ?></span>
          		<span class="meta_comment"><a href="#"><?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></a></span>
      		</div>
        </div>
      </div>
    </li>