<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

    <article class="card-body mx-auto" style="max-width: 600px;">
      <h4 class="card-title mb-4 green-rujuk-no-hover text-center">Detail Data Rujukan Pasien</h4>
      <form action="./history-aktif.php">
        <article>
          <dl class="row">
            <dt class="col-sm-4 black mb-3"><label>Nama</label></dt>
            <dd class="col-sm-8 mb-3"><label>: <?= $detSel['NAMA']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>NIK</label></dt>
            <dd class="col-sm-8 mb-3"><label>: <?= $detSel['NO_IDENTITAS']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Alamat</label></dt>
            <dd class="col-sm-8 mb-3"><label>: <?= $detSel['ALAMAT']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Nomor Ponsel</label></dt>
            <dd class="col-sm-8 mb-3"><label>: <?= $detSel['NO_TELP']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Keterangan Keluhan</label></dt>
            <dd class="col-sm-8 mb-3"><textarea disabled class="form-control" type="text"><?= $detSel['DIAGNOSA']; ?></textarea></dd>

            <dt class="col-sm-4 black mb-3"><label>Jenis Keluhan</label></dt>
            <dd class="col-sm-8 mb-3"><label>: <?= $detSel['JENIS_KELUHAN']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Posisi Sakit (Rahang)</label></dt>
            <dd class="col-sm-8 mb-3"><label>: <?= $detSel['POSISI_RAHANG']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Posisi Sakit (Gigi)</label></dt>
            <dd class="col-sm-8 mb-3"><label>: <?= $detSel['NAMA_GIGI']; ?></label></dd>

            <dt class="col-sm-4 black mb-3"><label>Waktu/Lama Sakit</label></dt>
            <dd class="col-sm-8 mb-3"><label>: <?= $detSel['WAKTU_SAKIT']; ?></label> </dd>
            <dt class="col-sm-4 black mb-3"><label>Tanggal Rujukan</label></dt>
            <dd class="col-sm-8 mb-3"><label>: <?= $detSel['TGL_RUJUKAN']; ?></label></dd>
            <dt class="col-sm-4 black mb-3"><label>Dirujuk ke</label></dt>
            <dd class="col-sm-8 mb-3"><label>: <?= $detSel['NAMA_TEMPAT_RUJUK']; ?></label></dd>

          </dl>
        </article>
      </form>
      <div class="form-group">
        <a type="button" href="<?= base_url('Kader/historiSelesai'); ?>" class="btn btn-fill"> Kembali ke History Rujukan </a>
      </div> <!-- form-group// -->
    </article>

  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->
</body>

</html>