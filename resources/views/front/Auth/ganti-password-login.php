<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

    <article class="card-body mx-auto" style="max-width: 400px;">
      <h4 class="card-title mb-4 green-rujuk-no-hover text-center">Reset Password</h4>
      <?php
      if ($this->session->flashdata('message')) {
        ?>
        <div class="alert alert-danger text-center" style="margin-top:20px;">
          <?php echo $this->session->flashdata('message'); ?>
        </div>
      <?php
      } ?>
      <form method="POST" action="<?= base_url(); ?>Kader/gantiPass">
        <div hidden class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input class="form-control" placeholder="ID" name="id" id="id" value="<?= $this->session->userdata('kader')['NO_IDENTITAS_KADER'] ?>" type="text" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input class="form-control" placeholder="Masukkan Password Lama" name="passL" id="passL" type="password" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input class="form-control" placeholder="Masukkan Password Baru" name="passB" id="passB" type="password" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input class="form-control" placeholder="Ulangi password Baru" type="password" required>
        </div> <!-- form-group// -->
        <div class="form-group">
          <button type="submit" class="btn btn-fill"> Ubah Password </button>
        </div> <!-- form-group// -->
      </form>
    </article>
    <p class="text-center mt-2"> <a href="<?= base_url('Kader'); ?>" style:="text-decoration:none;" class="green-rujuk">Kembali ke Home</a></p>
  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->

</body>

</html>