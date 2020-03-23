<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

    <article class="card-body mx-auto" style="max-width: 400px;">
      <h4 class="card-title mb-4 green-rujuk-no-hover text-center">Reset Password</h4>
      <form action="./akun.php" onsubmit="resetlogin()">
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input class="form-control" placeholder="Masukkan Password Lama" type="password" required>
        </div> <!-- form-group// -->
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
          <button type="submit" class="btn btn-fill"> Ubah Password </button>
          <script>
            function resetlogin() {
              alert('Selamat password anda berhasil di rubah.');
              window.location = './akun.php';
            }
          </script>
        </div> <!-- form-group// -->
      </form>
    </article>
    <p class="text-center mt-2"> <a href="<?= base_url('Kader'); ?>" style:="text-decoration:none;" class="green-rujuk">Kembali ke Home</a></p>
  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->
</body>

</html>