<section id="blog" class="blog-mf sect-pt4 route">
  <div class="container">
    <div class="row mt-4">
      <div class="col-sm-12">
        <div class="title-box text-center">
          <h3 class="title-a">
            My Education
          </h3>
          <div class="line-mf"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card card-blog" style="padding: 20px;">
          <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  <th>Exam Title</th>
                  <th>Concentration/Major</th>
                  <th>Institute</th>
                  <th>Result</th>
                  <th>Pass. Year</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $item)
                <tr>
                  <td>{{ $item['exam'] }}</td>
                  <td>{{ $item['major'] }}</td>
                  <td>{{ $item['institute'] }}</td>
                  <td>{{ $item['result'] }}</td>
                  <td>{{ $item['year'] }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>