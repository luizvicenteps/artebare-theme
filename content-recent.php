<li>
  <div class="media wow fadeInDown">
    <a href="#" class="media-left">
      <?php the_post_thumbnail(array(112,112), array('class' => 'img-responsive'));?>
    </a>
    <div class="media-body">
      <h4 class="media-heading">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h4>
      <p> <?php the_excerpt(); ?></p>
    </div>
  </div>
</li>
