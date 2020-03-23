<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

    <article class="card-body mx-auto" style="max-width: 600px;">
      <h4 class="card-title mb-4 green-rujuk-no-hover text-center">Akun Saya</h4>
      <?php
      if ($this->session->flashdata('berhasil')) {
        ?>
        <div class="alert alert-success text-center" style="margin-top:20px;">
          <?php echo $this->session->flashdata('berhasil'); ?>
        </div>
      <?php
      } ?>
      <form action="<?= base_url(''); ?>Kader">
        <article>
          <dl class="row">
            <dt class="col-sm-3 mt-3">
              <h6>Nama<h6>
            </dt>
            <dd class="col-sm-9 mt-3"><label id="nama-kader"><?= $profil['NAMA_KADER']; ?></label></dd>
            <dt class="col-sm-3 mt-2">
              <h6>NIK<h6>
            </dt>
            <dd class="col-sm-9 mt-2"><label id="nik"><?= $profil['NO_IDENTITAS_KADER']; ?></label></dd>
            <dt class="col-sm-3 mt-2">
              <h6>Nomor Ponsel<h6>
            </dt>
            <dd class="col-sm-9 mt-2"><label id="ponsel-perujuk"><?= $profil['NO_TELP_KADER']; ?></label></dd>
            <dt class="col-sm-3 mt-2">
              <h6>Email<h6>
            </dt>
            <dd class="col-sm-9 mt-2"><label id="email-perujuk"><?= $profil['EMAIL_KADER']; ?></label></dd>
            <dt class="col-sm-3 mt-2">
              <h6>Password<h6>
            </dt>
            <dd class="col-sm-9 mt-2"><label id="ubah-password"><a href="<?= base_url(''); ?>Kader/gantiPass" class="green-rujuk" style="text-decoratiion:none">Ubah Password</a></label></dd>
            <dt class="col-sm-12 mt-4">
              <h6>Jika ada data yang akan dirubah, selain password, silahkan <a href="mailto:maul.ardiansyahh@gmail.com" class="green-rujuk" style="text-decoratiion:none">kontak kami</a>
                <h6>
            </dt>
          </dl>
        </article>
        <div class="form-group">
          <button type="submit" class="btn btn-fill"> Kembali ke Home </button>
        </div> <!-- form-group// -->
      </form>
    </article>

  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->
</body>

</html>