<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

    <article class="card-body mx-auto" style="max-width: 400px;">
      <h4 class="card-title mb-4 green-rujuk-no-hover text-center">Rujukan - Input Data Rujukan</h4>
      <form method="POST" action="<?= base_url(); ?>Kader/rujuk">
        <div hidden class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
          </div>
          <input name="nikPasien" id="nikPasien" class="form-control" placeholder="NIK" value="<?= $this->session->userdata('nik') ?>" type="number" required>
        </div> <!-- form-group// -->
        <div hidden class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
          </div>
          <input name="nikKader" id="nikKader" class="form-control" placeholder="NIK Kader" value="<?= $this->session->userdata('kader')['NO_IDENTITAS_KADER'] ?>" type="number" required>
        </div> <!-- form-group// -->
        <div hidden class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fas fa-id-card"></i> </span>
          </div>
          <input name="nik" id="nik" class="form-control" placeholder="ID Pemeriksaan" type="number">
        </div> <!-- form-group// -->
        <div class=" form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
          </div>
          <input name="tglDaftar" id="tglDaftar" class="form-control" value="<?= date("Y-m-d") ?>" placeholder="Tgl Daftar" type="date" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-venus-mars"></i> </span>
          </div>
          <select name="tempat" id="tempat" class="form-control" required>
            <option value=""> Rujuk Ke</option>
            <?php
            $num = 1;
            foreach ($tempat as $tem) { ?>
              <option value="<?= $tem['ID_TEMPAT_RUJUK']; ?>"><?= $tem['NAMA_TEMPAT_RUJUK']; ?></option>
            <?php
              $num++;
            } ?>
          </select>
        </div> <!-- form-group end.// -->
        <div class="form-group">
          <button type="submit" value="submit" class="btn btn-fill">Next</button>
        </div> <!-- form-group// -->
      </form>
    </article>
  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->

</body>