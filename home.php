<?php get_header(); ?>
  <div class="content_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider">
              <div class="single_iteam"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>550x330x1.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>550x330x2.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>550x330x3.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
              <div class="single_iteam"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>550x330x4.jpg" alt="">
                <h2><a class="slider_tittle" href="pages/single.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="content_top_right">
            <ul class="featured_nav wow fadeInDown">
              <li><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>300x215x1.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>300x215x2.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>300x215x3.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>300x215x4.jpg" alt="">
                <div class="title_caption"><a href="pages/single.html">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <!-- MÚSICA -->
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Música</a> </h2>


              <!-- DESTAQUE -->
              <div class="business_category_left wow fadeInDown">
                  <?php 
                    $args = array(
                      'post_type'     =>  'post',
                      'posts_per_page'  =>  1,
                      //'category__not_in'  =>  array(7),
                      'category__in'    =>  array(4)
                      //'offset'      =>  0
                    );
                    $destaque = new WP_Query($args);

                      if($destaque->have_posts()):
                        while($destaque->have_posts()):
                          $destaque->the_post();
                          get_template_part('content','destaque'); 
                        endwhile;
                      wp_reset_postdata();
                      endif;
                  ?>
              </div>
            <div class="business_category_right wow fadeInDown">
              <ul class="small_catg">
                  <?php 
                    $args = array(
                      'post_type'     =>  'post',
                      'posts_per_page'  =>  3,
                      //'category__not_in'  =>  array(7),
                      'category__in'    =>  array(4),
                      'offset'      =>  1
                    );
                    $secundaria = new WP_Query($args);

                      if($secundaria->have_posts()):
                        while($secundaria->have_posts()):
                          $secundaria->the_post();
                          get_template_part('content','secundaria'); 
                        endwhile;
                      wp_reset_postdata();
                      endif;
                  ?>
              </ul>
            </div>
          </div>
          <!--  FIM Tudo sobre Música -->


          <div class="games_fashion_area">
            <div class="games_category">
              <div class="single_category">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Games</a> </h2>
                <ul class="fashion_catgnav wow fadeInDown">
                  <li>
                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>390x240x1.jpg"></a> </div>
                    <h2 class="catg_titile"><a href="#">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                  </li>
                </ul>
                <ul class="small_catg wow fadeInDown">
                  <li>
                    <div class="media"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="fashion_category">
              <div class="single_category">
                <div class="single_category wow fadeInDown">
                  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Fashion</a> </h2>
                  <ul class="fashion_catgnav wow fadeInDown">
                    <li>
                      <div class="catgimg2_container"> <a href="#"><img alt="" src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>390x240x1.jpg"></a> </div>
                      <h2 class="catg_titile"><a href="#">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                    </li>
                  </ul>
                  <ul class="small_catg wow fadeInDown">
                    <li>
                      <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                          <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                          <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="technology_catrarea">
            <div class="single_category">
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Technology</a> </h2>
              <div class="business_category_left">
                <ul class="fashion_catgnav wow fadeInDown">
                  <li>
                    <div class="catgimg2_container"> <a href="#"><img alt="" src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>390x240x1.jpg"></a> </div>
                    <h2 class="catg_titile"><a href="#">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                  </li>
                </ul>
              </div>
              <div class="business_category_right">
                <ul class="small_catg wow fadeInDown">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          
        <!-- POSTS RECENTES -->
          <div class="single_bottom_rightbar">
            <h2>Últimos Posts</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
                  <?php 
                    $args = array(
                      'posts_per_page'  =>  6, //'numberposts' => 6,
                      'offset' => 0,
                      'category' => 0,
                      'orderby' => 'post_date',
                      'order' => 'DESC',
                      'include' => '',
                      'exclude' => '',
                      'meta_key' => '',
                      'meta_value' =>'',
                      'post_type' => 'post',
                      'post_status' => 'publish', //'draft, publish, future, pending, private',
                      'suppress_filters' => true
                    );
                    $recent_posts = new WP_Query($args);

                      if($recent_posts->have_posts()):
                        while($recent_posts->have_posts()):
                          $recent_posts->the_post();
                          get_template_part('content','recent'); 
                        endwhile;
                      wp_reset_postdata();
                      endif;
                  ?>
            </ul>
          </div>
          

          <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Most Popular</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Recent Comment</a></li>
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/"; ?>112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
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
          <div class="single_bottom_rightbar wow fadeInDown">
            <h2>Popular Lnks</h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Blog Home</a></li>
              <li><a href="#">Error Page</a></li>
              <li><a href="#">Social link</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>