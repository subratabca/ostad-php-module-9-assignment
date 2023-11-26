    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{ asset('frontend/img/subrata.jpg') }}" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>{{ $name }}</span></p>
                        <p><span class="title-s">Profile: </span> <span>{{ $profile }}</span></p>
                        <p><span class="title-s">Email: </span> <span>{{ $email }}</span></p>
                        <p><span class="title-s">Phone: </span> <span>{{ $phone }}</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Brief Summary
                      </h5>
                    </div>
                    <p class="lead">
                        {{ $summary }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>