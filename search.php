<?php get_header(); ?>
    <div id="container">


  <section id="mainContent">
    <div class="content_bottom">
      <div class="col-lg-12 col-md-12">
          <div class="single_page_area">
			<!-- Conteúdo Interno das Páginas -->
      <h1>  Resultados Encontrados</h1>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <!-- <h2 class="post_titile"><a href="<?php //the_permalink() ?>"><?php //the_title(); ?></a></h2> -->
              <?php get_template_part('content','search'); ?>

              <?php endwhile; 
              ?>
                <!-- Paginação -->
        <div class="post_pagination">
          <div class="prev">
              <a class="angle_left" href="">
                  <i class="fa fa-angle-double-left"></i>
              </a>
            <div class="pagincontent">
                <span>
                    <?php previous_posts_link("Mais Novos"); ?>
                </span>
                <!-- <a href="#">Aliquam quam orci in molestie a tempor nec</a> -->
            </div>
          </div>
          <div class="next">
            <div class="pagincontent">
                <span>
                        <?php next_posts_link("Mais Antigos"); ?>
                </span>
                <!-- <a href="#">Aliquam quam orci in molestie a tempor nec</a> --> 
            </div>
            <a class="angle_right" href="#"><i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
 

              <?php

              else: ?>
	                
	                    <h2>Nada Encontrado</h2>
	                    <p>Erro 404</p>
	                    <p>Lamentamos mas não foram encontrados artigos.</p>
	                           
	            <?php endif; ?>
                
                 
                
                     
            <!-- Conteúdo Interno das Páginas -->

              
            
         
        </div>
<!--         <div class="post_pagination">
  <div class="prev"> <a class="angle_left" href="#"><i class="fa fa-angle-double-left"></i></a>
    <div class="pagincontent"> <span>Previous Post</span> <a href="#">Aliquam quam orci in molestie a tempor nec</a> </div>
  </div>
  <div class="next">
    <div class="pagincontent"> <span>Next Post</span> <a href="#">Aliquam quam orci in molestie a tempor nec</a> </div>
    <a class="angle_right" href="#"><i class="fa fa-angle-double-right"></i></a> </div>
</div>
 -->
    </div>
</div>
<?php get_footer(); ?>