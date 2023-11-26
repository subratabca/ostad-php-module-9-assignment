<section id="blog" class="blog-mf sect-pt4 route">
  <div class="container">
    <div class="row mt-4">
      <div class="col-sm-12">
        <div class="title-box text-center">
          <h3 class="title-a">
            My Working Experiences
          </h3>
          <div class="line-mf"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card card-blog" style="padding: 20px;">
          <div class="card-body">
            
            <div class="row">
              @foreach($experiences as $item)
                    <div class="col-md-6" style="margin-right: 2px solid #000;">
                        <p><span class="title-s">Company Name: </span> <span>{{ $item['company'] }}</span></p>
                        <p><span class="title-s">Job Duration: </span> <span>{{ $item['duration'] }}</span></p>
                        <p><span class="title-s">Company Location: </span> <span>{{ $item['location'] }}</span></p>
                        <p><span class="title-s">Designation: </span> <span>{{ $item['designation'] }}</span></p>
                        <p><span class="title-s">Department: </span> <span>{{ $item['department'] }}</span></p><hr>
                    </div>
                               @endforeach

                    </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>