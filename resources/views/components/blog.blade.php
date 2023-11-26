    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($data as $item)
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{ asset('frontend/img/'.$item['image']) }}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">{{ $item['category'] }}</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="{{ url('blog/'.$item['id']) }}">{{ $item['title'] }}</a></h3>
                <p class="card-description">
                  {{ $item['description'] }}
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{ asset('frontend/img/'.$item['author_image']) }}" alt="" class="avatar rounded-circle">
                    <span class="author">{{ $item['author'] }}</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> {{ $item['time'] }} min
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>