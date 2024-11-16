<div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
  <main class="page-wrapper__content">
    <!-- section BLOG GRID SIDEBAR -->
    <section class="section section-blog section-grid section-content overflow pb-medium" data-arts-os-animation="data-arts-os-animation" data-grid-columns="2" data-grid-columns-tablet="2" data-grid-columns-mobile="1">
      <div class="container">
        <header class="row pb-small pt-small section-masthead__header">
          <div class="col-12">
            <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
              <h2 class="mt-0 mb-0 h2">We Believe in Continuous Learning</h2>
              <p>We have curated an exclusive collection of resources covering diverse aspects of entrepreneurship. Our goal is to promote ongoing learning within our community. Feel free to reach out if you'd like to explore a specific topic.</p>
            </div>
          </div>
        </header>

        <div class="row justify-content-between">
          <div class="col-lg-8 section-blog__posts">
            <!-- posts -->
            <div class="grid grid_fluid-3 js-grid">
              <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 grid__sizer js-grid__sizer"></div>
              
              <?php for ($i = 0; $i < sizeof($posts); $i++) { ?>
              <div class="grid__item grid__item_desktop-6 grid__item_tablet-6 grid__item_mobile-12 grid__item_fluid-3 js-grid__item">
                <div class="section-grid__item">
                  <article class="figure-post">
                    <!-- post featured image -->
                    <div class="figure-post__media">
                      <a class="lazy" href="<?php echo base_url() . 'Resources/post/' . $posts[$i]['id'] . '/' . $posts[$i]['url'] ?>"><img data-src="<?php echo base_url() . 'admin' . $posts[$i]['image_path'] ?>" width="960" height="960" src="#" alt="" />
                        <!-- post date -->
                        <time class="figure-post__date figure-post__date_small" datetime="2020-02-01T04:16:44+00:00"><span class="figure-post__date-day h4">
                        <?php                                    
                                              $createdAt = DateTime::createFromFormat('Y-m-d', $posts[$i]['created_at']);
                                              if ($createdAt) {
                                                  echo $createdAt->format('d'); // Output only the day (e.g., 16)
                                              } else {
                                                  echo "Invalid date format"; // Handle the case where the date cannot be parsed
                                              } ?>  
                        
                        </span><span class="figure-post__date-month">  <?php                                    
                                              $createdAt = DateTime::createFromFormat('Y-m-d', $posts[$i]['created_at']);
                                              if ($createdAt) {
                                                  echo $createdAt->format('M'); // Output only the day (e.g., 16)
                                              } else {
                                                  echo "Invalid date format"; // Handle the case where the date cannot be parsed
                                              } ?>  </span></time>
                        <!-- - post date --></a>
                    </div>
                    <!-- - post featured image -->
                    <!-- post header & info  -->
                    <div class="figure-post__header pt-1"><a class="d-block" href="<?php echo base_url() . 'Resources/post/' . $posts[$i]['id'] . '/' . $posts[$i]['url'] ?>">
                        <h2 class="h4 mt-0"><?php echo $posts[$i]['name']; ?></h2>
                      </a>
                      <ul class="figure-post__categories small-caps">
                        <li><a href="#"><?php echo $posts[$i]['blog_tag']; ?></a></li>
                      </ul>
                    </div>
                    <!-- - post header & info -->
                  </article>
                </div>
              </div>
              <?php } ?>
             
            </div>
            <!-- - posts -->
            <!-- pagination-->
            <div class="section-blog__wrapper-pagination mt-small">
              <nav class="pagination">
                <div class="nav-links">
                  <!-- prev --><a class="page-numbers prev material-icons" href="#">keyboard_arrow_left</a>
                  <!-- - prev  -->
                  <!-- numbers container -->
                  <div class="nav-links__container"><span class="page-numbers current">1</span><a class="page-numbers" href="#">2</a><span class="page-numbers dots">...</span><a class="page-numbers" href="#">4</a></div>
                  <!-- - numbers container -->
                  <!-- next --><a class="page-numbers next material-icons" href="#">keyboard_arrow_right</a>
                  <!-- - next -->
                </div>
              </nav>
            </div>
            <!-- - pagination -->
          </div>
          <?php $this->load->view('resources/side'); ?>
        </div>
      </div>
    </section>
    <!-- - section BLOG GRID SIDEBAR -->
  </main>