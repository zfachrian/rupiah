@extends('front.templates.header')
@section('title') Login @endsection
@section('script')


@section('content')
<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mt-2 mb-5">
    <div class="row-sm">
      <div class="col-md-8">
        <div id="carousel1_indicator" class="carousel slide inherit shadow-lg" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1_indicator" data-slide-to="1"></li>
            <li data-target="#carousel1_indicator" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item carousel-home active">
              <img class="d-block w-100" src="{{ asset('front/images/1.png')}}">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('front/images/2.png')}}">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('front/images/3.png')}}">
            </div>
          </div>
          <a class="carousel-control-prev navigasi-home" href="#carousel1_indicator" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon btn-nav-slide" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next navigasi-home" href="#carousel1_indicator" role="button" data-slide="next">
            <span class="carousel-control-next-icon btn-nav-slide" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- ============== main slidesow .end // ============= -->

      </div> <!-- col.// -->
      <aside class="col-md-4">

        <div class="card mt-3">
          <article class="card-body">
            <a href="#>" style="text-decoration:none;" class="float-right btn btn-outline-primary btn-fill-standart">Daftar </a>
            <a href="#" style="text-decoration:none;" class="float-right btn btn-outline-primary btn-daftar mr-2">Daftar Puskesmas</a>
            <h4 class="card-title green-rujuk-no-hover mb-4 mt-1">Masuk</h4>
            <form method="post" action="">

              <div class="form-group">
                <label class=" green-rujuk-no-hover">Email</label>
                <input name="email" id="email" class="form-control" placeholder="Masukkan Email" type="email">
              </div> <!-- form-group// -->
              <div class="form-group">
                <label class=" green-rujuk-no-hover">Password</label>
                <input name="passwd" id="passwd" class="form-control" placeholder="Masukkan Password" type="password">
              </div> <!-- form-group// -->
              <div class="form-group">
                <div class="checkbox">
                  <!-- <label class="green-rujuk"> <input type="checkbox"> Save password </label> -->
                </div> <!-- checkbox .// -->
              </div> <!-- form-group// -->
              <div class="form-group">
                <button type="submit" class="btn btn-fill"> Login </button>
              </div> <!-- form-group// -->
            </form>
          </article>
        </div> <!-- card.// -->
      </aside>
    </div>
  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->
</body>

</html>

@endsection

@extends('front.templates.footer')
