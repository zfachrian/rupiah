<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Aplikasi Rujukan Gigi - @yield('title')</title>

  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">

  <!-- jQuery -->
  <script src="{{asset('front/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>

  <!-- Bootstrap4 files-->
  <script src="{{asset('front/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
  <link href="{{asset('front/css/bootstrap.css?v=1.0')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('front/css/custom.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('front/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />

  <!-- Font awesome 5 -->
  <link href="{{asset('front/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- plugin: fancybox  -->
  <script src="{{asset('front/plugins/fancybox/fancybox.min.js')}}" type="text/javascript"></script>
  <link href="{{asset('front/plugins/fancybox/fancybox.min.css')}}" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

  <!-- plugin: owl carousel  -->
  <link href="{{asset('front/plugins/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/plugins/owlcarousel/assets/owl.theme.default.css')}}" rel="stylesheet">
  <script src="{{asset('front/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

  <!-- custom style -->
  <link href="{{asset('front/css/ui.css?v=1.0')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

  <!-- custom javascript -->
  <script src="{{asset('front/js/script.js')}}" type="text/javascript"></script>

  <script type="text/javascript">
    function role(that) {
      if (that.value == "Dokter Gigi") {
        document.getElementById("show-dokter").style.display = "block";
        $('#show-dokter').show().find(':input').attr('required', true);
      } else {
        document.getElementById("show-dokter").style.display = "none";
        $('#show-dokter').hide().find(':input').attr('required', false);
      }
    }
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      //FANCYBOX
      //https://github.com/fancyapps/fancyBox
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });
    });

    //some script

    // jquery ready start
    $(document).ready(function() {
      // jQuery code

    });
    // jquery end
  </script>

</head>

<body>
  <header class="section-header">
    <section class="header-main">
      <div class="container">
        <div class="brand-wrap">
          <a href="#"><img class="logo" src="{{asset('front/images/arenaku/rupiah.png')}}"></a>
        </div> <!-- brand-wrap.// -->
      </div> <!-- container.// -->
    </section> <!-- header-main .// -->
  </header> <!-- section-header.// -->

  @yield('content')
