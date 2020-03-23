<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

    <article class="card-body mx-auto" style="max-width: 400px;">
      <h4 class="card-title mb-4 green-rujuk-no-hover text-center">Rujukan Pasien - Input Data Pasien</h4>
      <p class="text-center mt-2"> <a href="" style:="text-decoration:none colour:black;" class="red-rujuk">Pastikan data yang anda inputkan benar, karena anda tidak dapat kembali pada proses ini</a></p>
      <form method="POST" action="<?= base_url('Kader/dataPasien'); ?>">
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
          </div>
          <input name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" type="text" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
          </div>
          <input name="nik" id="nik" class="form-control" placeholder="NIK" type="number" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-map-marked"></i> </span>
          </div>
          <input name="alamat" id="alamat" class="form-control" placeholder="Alamat" type="text" required>
        </div> <!-- form-group// -->
        <div hidden class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
          </div>
          <input name="tglDaftar" id="tglDaftar" class="form-control" value="<?= date("Y-m-d") ?>" placeholder="Tgl Daftar" type="date" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
          </div>
          <input name="tglLahir" id="tglLahir" class="form-control" placeholder="Tgl Lahir" type="date" required data-toggle="tooltip" data-placement="top" title="Tanggal Lahir Pasien">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-venus-mars"></i> </span>
          </div>
          <select name="kelamin" id="kelamin" class="form-control" required>
            <option value=""> Jenis Kelamin</option>
            <option value="1">Laki-laki</option>
            <option value="0">Perempuan</option>
          </select>
        </div> <!-- form-group end.// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-briefcase"></i> </span>
          </div>
          <input name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Pekerjaan" type="text" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
          </div>
          <input name="hp" id="hp" class="form-control" placeholder="Nomor Ponsel" type="number" required>
        </div> <!-- form-group// -->
        <div class="form-group">
          <button type="submit" value="submit" class="btn btn-fill">Next</button>
        </div> <!-- form-group// -->
      </form>
      <p class="text-center mt-2"> <a href="<?= base_url('Kader'); ?>" style:="text-decoration:none;" class="green-rujuk">Kembali ke Home</a></p>
    </article>
  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->

</body>