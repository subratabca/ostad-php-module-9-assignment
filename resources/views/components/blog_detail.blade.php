    <section class="blog-wrapper sect-pt4" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="post-box">
              <div class="post-thumb">
                <img src="{{ asset('frontend/img/post-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="post-meta">
                <h1 class="article-title">{{ $title }}</h1>
                <ul>
                  <li>
                    <span class="bi bi-person"></span>
                    <a href="#">{{ $author }}</a>
                  </li>
                  <li>
                    <span class="bi bi-tag"></span>
                    <a href="#">{{ $category }}</a>
                  </li>
                  <li>
                    <span class="bi bi-chat-left-text"></span>
                    <a href="#">{{ $comment }}</a>
                  </li>
                </ul>
              </div>
              <div class="article-content">
                <p>
                  {{ $description }}
                </p>

                <p>
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Praesent
                  sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at
                  sem. Donec rutrum congue leo eget malesuada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget-sidebar sidebar-search">
              <h5 class="sidebar-title">Search</h5>
              <div class="sidebar-content">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary btn-search" type="button">
                        <span class="bi bi-search"></span>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Recent Post</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                  <li>
                    <a href="#">Atque placeat maiores.</a>
                  </li>
                  <li>
                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                  <li>
                    <a href="#">Atque placeat maiores nam quo autem</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="widget-sidebar widget-tags">
              <h5 class="sidebar-title">Tags</h5>
              <div class="sidebar-content">
                <ul>
                  <li>
                    <a href="#">Web.</a>
                  </li>
                  <li>
                    <a href="#">Design.</a>
                  </li>
                  <li>
                    <a href="#">Travel.</a>
                  </li>
                  <li>
                    <a href="#">Photoshop</a>
                  </li>
                  <li>
                    <a href="#">Corel Draw</a>
                  </li>
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>