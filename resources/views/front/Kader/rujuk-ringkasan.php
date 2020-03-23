<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-5 pb-3">

    <article class="card-body mx-auto" style="max-width: 600px;">
      <h4 class="card-title mb-5 green-rujuk-no-hover text-center">Rujuk Pasien - Ringkasan Rujukan</h4>
      <form>
        <article>
          <dl class="row">
            <dt class="col-sm-4 black mb-3"><label>Nama:</label></dt>
            <dd class="col-sm-8 mb-3"><label><?= $ringkasan['NAMA']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>NIK:</label></dt>
            <dd class="col-sm-8 mb-3"><label><?= $ringkasan['NO_IDENTITAS']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Alamat:</label></dt>
            <dd class="col-sm-8 mb-3"><label><?= $ringkasan['ALAMAT']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Nomor Ponsel:</label></dt>
            <dd class="col-sm-8 mb-3"><label><?= $ringkasan['NO_TELP']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Keterangan Keluhan:</label></dt>
            <dd class="col-sm-8 mb-3"><textarea disabled class="form-control" type="text"><?= $ringkasan['DIAGNOSA']; ?></textarea></dd>

            <dt class="col-sm-4 black mb-3"><label>Jenis Keluhan:</label></dt>
            <dd class="col-sm-8 mb-3"><label><?= $ringkasan['JENIS_KELUHAN']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Posisi Sakit (Rahang):</label></dt>
            <dd class="col-sm-8 mb-3"><label><?= $ringkasan['POSISI_RAHANG']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Posisi Sakit (Gigi):</label></dt>
            <dd class="col-sm-8 mb-3"><label><?= $ringkasan['NAMA_GIGI']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Waktu/Lama Sakit:</label></dt>
            <dd class="col-sm-8 mb-3"><label><?= $ringkasan['WAKTU_SAKIT']; ?></label> </dd>
            <dt class="col-sm-4 black mb-3"><label>Tanggal Rujukan:</label></dt>
            <dd class="col-sm-8 mb-3"><label><?= $ringkasan['TGL_RUJUKAN']; ?></label></dd>
            <dt class="col-sm-4 black mb-3"><label>Dirujuk ke:</label></dt>
            <dd class="col-sm-8 mb-3"><label><?= $ringkasan['NAMA_TEMPAT_RUJUK']; ?></label></dd>

          </dl>
        </article>
      </form>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-6">
            <button class="btn btn-fill" onclick="window.location.href='<?= base_url('Kader'); ?>'">Beranda</button>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-fill" onclick="window.location.href='<?= base_url('Kader/histori'); ?>'">Riwayat Rujukan</button>
          </div>
        </div>
      </div> <!-- form-group// -->
    </article>
  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->
</body>