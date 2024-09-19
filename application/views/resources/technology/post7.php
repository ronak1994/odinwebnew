<div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead pt-large pb-small" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container">
              <header class="row section-masthead__header justify-content-center">
                <div class="col">
                  <div class="section-masthead__meta small-caps mt-0 mb-2">
                    <div class="section-masthead__meta-item split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines"><a href="#">16 Jan 2020</a></div>
                    <div class="section-masthead__meta-item">
                      <ul class="section-masthead__meta-categories split-text js-split-text" data-split-text-type="lines" data-split-text-set="lines">
                        <li><a href="#">Products</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                    <h1 class="h2 mt-0 mb-0">Got a Great Product Idea? Here’s How to Turn It Into Reality!</h1>
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
                      <p class="has-drop-cap">The D2C space thrives on innovation, and product development is at the core of building a successful brand. Here's how to go from idea to market-ready product.</p>
                     
                      <h2>Conducting Market Research</h2>
                      <p>Before you develop a product, conduct thorough market research to understand your customers' needs, preferences, and pain points.</p>
                      <h2>Prototyping and Testing</h2>
                      <p>Start with a prototype, test it with a small group of customers, and iterate based on feedback. This process helps you refine your product and ensures that it meets customer expectations.</p>
                      
                      <h2>Scaling Production</h2>
                      
                      <p>Once you’ve finalized your product, plan for production and logistics. Focus on maintaining quality while scaling to meet demand.<br>
                      Need help with product development? (Explore Odin’s product development consultancy.)
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
   