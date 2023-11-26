    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('frontend/img/portfolio-details-1.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('frontend/img/portfolio-details-2.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('frontend/img/portfolio-details-3.jpg') }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{ $category }}</li>
                <li><strong>Client</strong>: {{ $client }}</li>
                <li><strong>Project Date</strong>: {{ $date }}</li>
                <li><strong>Project URL</strong>: <a href="#">{{ $url }}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Project Details</h2>
              <p>
                 {{ $description }}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>