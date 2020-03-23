<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Aplikasi Rujukan Gigi - Rupiah</title>

  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">

  <!-- jQuery -->
  <script src="<?= base_url(''); ?>./assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>

  <!-- Bootstrap4 files-->
  <script src="<?= base_url(''); ?>./assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <link href="<?= base_url(''); ?>./assets/css/bootstrap.css?v=1.0" rel="stylesheet" type="text/css" />
  <link href="<?= base_url(''); ?>./assets/css/custom.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url(''); ?>./assets/css/bootstrap-select.css" rel="stylesheet" type="text/css" />

  <!-- Font awesome 5 -->
  <link href="<?= base_url(''); ?>./assets/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- plugin: fancybox  -->
  <script src="<?= base_url(''); ?>./assets/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
  <link href="<?= base_url(''); ?>./assets/plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

  <!-- plugin: owl carousel  -->
  <link href="<?= base_url(''); ?>./assets/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url(''); ?>./assets/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  <script src="<?= base_url(''); ?>./assets/plugins/owlcarousel/owl.carousel.min.js"></script>

  <!-- custom style -->
  <link href="<?= base_url(''); ?>./assets/css/ui.css?v=1.0" rel="stylesheet" type="text/css" />
  <link href="<?= base_url(''); ?>./assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

  <!-- custom javascript -->
  <script src="<?= base_url(''); ?>./assets/js/script.js" type="text/javascript"></script>

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
        <div class="row align-items-center">
          <div class="col-lg-3">
            <div class="brand-wrap">
              <a href="<?= base_url('Kader'); ?>"><img class="logo" src="<?= base_url(''); ?>./assets/images/arenaku/rupiah.png"></a>
            </div> <!-- brand-wrap.// -->
          </div>

          <div class="col-lg-9 float-right">
            <div class="widgets-wrap d-flex justify-content-end">

              <div class="widget-header dropdown">
                <a href="#" class="ml-3 icontext" data-offset="20,10">
                  <button class="btn btn-primary btn-login"><i class="fa fa-user"></i> <span style="margin-left:1em"><?= $this->session->userdata('kader')['NAMA_KADER'] ?></span></button>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-login shadow-sm">
                  <div class="pt-2 pb-2">
                    <a href="<?= base_url(''); ?>kader/profile" class="dropdown-item"><i class="fas fa-edit"></i><span class="menu-hover">Profil</span></a>
                    <a href="<?= base_url('Auth/logout'); ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i><span class="menu-hover">Keluar</span></a>
                  </div>
                </div> <!--  dropdown-menu .// -->
              </div> <!-- widget  dropdown.// -->
            </div> <!-- widgets-wrap.// -->
          </div> <!-- col.// -->
        </div> <!-- row.// -->
      </div> <!-- container.// -->
    </section> <!-- header-main .// -->
  </header> <!-- section-header.// -->