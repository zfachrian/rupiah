<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

    <article class="card-body mx-auto" style="max-width: 800px;">
      <h4 class="card-title mb-4 green-rujuk-no-hover text-center">History Rujukan</h4>
      <div class="row nav-histori pt-3">
        <div class="col-md-6 col-xs-6 text-center">
          <a href="<?= base_url('Kader/histori'); ?>" class="nav-link" style="text-decoration:none;">Aktif</a>
        </div>
        <div class="col-md-6 col-xs-6 text-center">
          <a href="" class="nav-link active" style="text-decoration:none;">Selesai</a>
        </div>
      </div>
      <!-- <form method="POST" action="<?= base_url('Kader/historiSelesai'); ?>" class="float-right mt-4 mb-5">
        <div class="form-group input-group">
          <input type="text" size="30" placeholder="cari dengan NIK">
          <input type="submit" class="btn btn-fill-standart shadow" value="Search" name="cari1" id="cari1">
        </div>
      </form> -->

      <table class="table-history">
        <tr class="text-center green-rujuk-no-hover">
          <th>NIK</th>
          <th>NAMA</th>
          <th>STATUS</th>
          <th></th>
        </tr>
        <?php
        $num = 1;
        foreach ($selesai as $sel) { ?>
          <tr class="text-center">
            <td><label><?= $sel['NO_IDENTITAS']; ?></td>
            <td><label><?= $sel['NAMA']; ?></label></td>
            <td><label class="green-rujuk-no-hover">Selesai</td>
            <td><a type="button" class="btn-fill detail-btn" href='<?= base_url(''); ?>Kader/detailSelesai/<?= $sel['ID_RUJUKAN']; ?>'>Lihat Detail</a></td>
          </tr>
        <?php
          $num++;
        } ?>
      </table>
    </article>
    <p class="text-center mt-2"> <a href="<?= base_url('Kader'); ?>" style:="text-decoration:none;" class="green-rujuk">Kembali ke Home</a></p>
  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->
</body>

</html>