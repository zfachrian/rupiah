<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

    <article class="card-body mx-auto" style="max-width: 400px;">
      <h4 class="card-title mb-4 green-rujuk-no-hover text-center">Reset Password</h4>
      <form action="./index.php" onsubmit="resetbeforelogin()">
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input class="form-control" placeholder="Masukkan Password Baru" type="password" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input class="form-control" placeholder="Ulangi password Baru" type="password" required>
        </div> <!-- form-group// -->
        <div class="form-group">
          <button type="submit" class="btn btn-fill"> Reset Password </button>
          <script>
            function resetbeforelogin() {
              alert('Selamat password anda berhasil di reset, silahkan login kembali.');
              window.location = './index.php';
            }
          </script>
        </div> <!-- form-group// -->
      </form>
    </article>

  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->
</body>

</html>