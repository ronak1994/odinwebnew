 <!-- sidebar -->
 <div class="col-lg-3 section-blog__sidebar">
            <aside class="sidebar sidebar_no-margin-last-widget widget-area">
              <!-- widget SEARCH -->
              <section class="widget widget_search">
                <!-- header -->
                <!-- - header -->
                <!-- content -->
                <form class="search-form" action="index.html" method="get">
                  <div class="input-float input-search js-input-float">
                    <input class="input-float__input input-search__input" type="search" /><span class="input-float__label">Search...</span>
                    <button class="input-search__submit material-icons" type="submit">search</button>
                  </div>
                </form>
                <!-- - content -->
              </section>
              <!-- - widget SEARCH -->
              <!-- widget CATEGORIES LIST -->
              <section class="widget widget_categories">
                <!-- header -->
                <h2 class="widgettitle">Categories</h2>
                <!-- - header -->
                <!-- content -->
                <ul>
                  <li class="cat-item"><a href="#">Interior Design</a><span>10</span></li>
                  <li class="cat-item"><a href="#">Development</a><span>5</span></li>
                  <li class="cat-item"><a href="#">Creative Life</a><span>8</span></li>
                  <li class="cat-item"><a href="#">Travel</a><span>2</span></li>
                  <li class="cat-item"><a href="#">Interviews</a><span>4</span>

                  </li>
                </ul>
                <!-- - content -->
              </section>
              <!-- - widget CATEGORIES LIST -->
              <!-- widget RECENT POSTS -->
              <section class="widget widget_recent_entries">
                <!-- header -->
                <h2 class="widgettitle">Recent Posts</h2>
                <!-- - header -->
                <!-- content -->
                <ul>
                <?php for ($i = 0; $i < sizeof($posts); $i++) { ?>
                  <li><a href="<?php echo base_url() . 'Resources/post/' . $posts[$i]['id'] . '/' . $posts[$i]['url'] ?>"><span><?php echo $posts[$i]['name']; ?></span></a>
                    <div class="post-date"><?php                                    
                                                $createdAt = DateTime::createFromFormat('Y-m-d', $posts[$i]['created_at']);
                                                if ($createdAt) {
                                                    echo $createdAt->format('d M Y'); // Output in dd/mm/yyyy format
                                                } else {
                                                    echo "Invalid date format"; // Handle the case where the date cannot be parsed
                                                } ?></div>
                  </li>
                 
                  <?php } ?>
                </ul>
                <!-- - content -->
              </section>
              <!-- - widget RECENT POSTS -->
              <!-- widget TAGS -->
              <section class="widget widget_tag_cloud">
                <!-- header -->
                <h2 class="widgettitle">Tags</h2>
                <!-- - header -->
                <!-- content -->
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
                <!-- - content -->
              </section>
              <!-- - widget TAGS -->
            </aside>
          </div>
          <!-- - sidebar -->