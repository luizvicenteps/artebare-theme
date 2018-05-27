<?php get_header(); ?>
    <div id="container">


  <section id="mainContent">
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_page_area">
            <ol class="breadcrumb">
            <!--   <li><a href="#">Home</a></li>
              <li><a href="#">Technology</a></li>
              <li class="active">Duis quis erat non nunc fringilla </li> -->
              <?php bloglite_breadcrumb(); ?>
            </ol>
			<!-- Conteúdo Interno das Páginas -->
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <!-- <h2 class="post_titile"><a href="<?php //the_permalink() ?>"><?php //the_title(); ?></a></h2> -->
                  <h2 class=""><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                  <div class="single_page_content">
                    <div class="post_commentbox">
                        <a href="#"><i class="fa fa-user"></i><?php the_author() ?></a>
                        <span>
                        <i class="fa fa-calendar"></i><?php the_time('d/M/Y') ?>
          			        </span>
        			          <a href="#"><i class="fa fa-tags"></i>Technology</a>
          			        <a href="#"><i class="fa fa-tags"></i><?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></a>
          			        <a href="#"><i class="fa fa-tags"></i><?php edit_post_link('(Editar)'); ?></a>
      			       </div>
                   </div>
              <?php endwhile; else: ?>
	                
	                    <h2>Nada Encontrado</h2>
	                    <p>Erro 404</p>
	                    <p>Lamentamos mas não foram encontrados artigos.</p>
	                           
	            <?php endif; ?>
                
                 
                <?php comments_template(); ?>
                     
            <!-- Conteúdo Interno das Páginas -->

              
            
         </div>
        </div>
        <div class="post_pagination">
          <div class="prev"> <a class="angle_left" href="#"><i class="fa fa-angle-double-left"></i></a>
            <div class="pagincontent"> <span>Previous Post</span> <a href="#">Aliquam quam orci in molestie a tempor nec</a> </div>
          </div>
          <div class="next">
            <div class="pagincontent"> <span>Next Post</span> <a href="#">Aliquam quam orci in molestie a tempor nec</a> </div>
            <a class="angle_right" href="#"><i class="fa fa-angle-double-right"></i></a> </div>
        </div>

        <!-- INICIO Compartilhamento de POST -->
        <div class="share_post"> <a class="facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i>Twitter</a> <a class="googleplus" href="#"><i class="fa fa-google-plus"></i>Google+</a> <a class="linkedin" href="#"><i class="fa fa-linkedin"></i>LinkedIn</a> <a class="stumbleupon" href="#"><i class="fa fa-stumbleupon"></i>StumbleUpon</a> <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>Pinterest</a> </div>
        <!-- FIM Compartilhamento de POST -->

        <div class="similar_post">
          <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
          <ul class="small_catg similar_nav wow fadeInDown animated">
            <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="../images/112x112.jpg" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                  <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="../images/112x112.jpg" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                  <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="../images/112x112.jpg" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                  <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          <div class="single_bottom_rightbar wow fadeInDown">
        		<?php 
          			get_template_part( 'sidebar', 'singlerightRECENTES');
          	 	?>
          </div>
          <div class="single_bottom_rightbar">
          		<?php 
          			get_template_part( 'sidebar', 'singlerightABA');
          	 	?>
          </div>
          <div class="single_bottom_rightbar">
          		<?php 
          			//get_template_part( 'sidebar', 'singlerightABA');
          	 	?>
          </div>
          <div class="single_bottom_rightbar">
            <h2>Blog Archive</h2>
            <div class="blog_archive wow fadeInDown">
              <form action="#">
                <select>
                  <option value="">Blog Archive</option>
                  <option value="">October(20)</option>
                </select>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php get_footer(); ?>