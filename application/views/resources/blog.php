<div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead pt-large pb-small" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container">
              <header class="row section-masthead__header justify-content-center">
                <div class="col">
                  <div class="section-masthead__meta small-caps mt-0 mb-2">
                    <div class="section-masthead__meta-item split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines"><a href="#"><?php                                    
                                                $createdAt = DateTime::createFromFormat('Y-m-d', $post['created_at']);
                                                if ($createdAt) {
                                                    echo $createdAt->format('d M Y'); // Output in dd/mm/yyyy format
                                                } else {
                                                    echo "Invalid date format"; // Handle the case where the date cannot be parsed
                                                } ?></a></div>
                    <div class="section-masthead__meta-item">
                      <ul class="section-masthead__meta-categories split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                        <li><a href="#"><?php echo  $post['blog_tag'] ?></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="h2 mt-0 mb-0"><?php echo  $post['name'] ?></h1>
                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-1 mt-md-2 mr-auto"></div>
                </div>
              </header>
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- SINGLE POST -->
          <section class="section section-blog pb-medium">
            <div class="container">
              <div class="row justify-content-between">
                <!-- post content -->
                <div class="col-lg-8 section-blog__post">
                  <article class="post">
                    <!-- post featured image -->
                    <div class="post__media"><img src="img/assets/sectionBlog/post-4-1.jpg" alt=""/></div>
                    <!-- - post featured image -->
                    <!-- post content -->
                    <div class="post__content clearfix">
                      <p class="has-drop-cap"><?php echo  $post['content'] ?>
</p>
                    </div>
                    <!-- - post content-->
                    <!-- post tags -->
                    <div class="post__tags mt-small">
                      <div class="tagcloud">
                        <ul>
                          <li><a class="tag-cloud-link" href="#">Premium</a></li>
                          <li><a class="tag-cloud-link" href="#">Creative</a></li>
                          <li><a class="tag-cloud-link" href="#">UX</a></li>
                          <li><a class="tag-cloud-link" href="#">Interior</a></li>
                          <li><a class="tag-cloud-link" href="#">Corporate</a></li>
                          <li><a class="tag-cloud-link" href="#">Motion</a></li>
                          <li><a class="tag-cloud-link" href="#">Photography</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- - post tags -->
                    <!-- post comments -->
                    
                   <?php $this->load->view('resources/comment'); ?>
                    <!-- - post comments -->
                  </article>
                </div>
                <!-- - post content -->
                <!-- sidebar -->
                <?php $this->load->view('resources/side');; ?>
                <!-- - sidebar -->
              </div>
            </div>
          </section>
          <!-- - SINGLE POST -->
        </main>
   