<!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs">
    <div class="container">

      <div class="section-title">
        <h2>Our <span>Breweries</span></h2>
        <p>Here you can find all breweries </p>
      </div>

      <div class="row">
        @foreach($breweries as $brewery)
        <div class="col-lg-4 col-md-6">
          <div class="member">
            <div class="pic"><img src="{{$brewery->img}}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>{{$brewery->name}}</h4>
              <span>{{$brewery->capacity}}</span>
              <div class="social">
                
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Chefs Section -->