<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

    <article class="card-body mx-auto" style="max-width: 800px;">
      <h4 class="card-title mb-4 green-rujuk-no-hover text-center">History Rujukan</h4>
      <div class="row nav-histori pt-3">
        <div class="col-md-6 col-xs-6 text-center">
          <a href="" class="nav-link active" style="text-decoration:none;">Aktif</a>
        </div>
        <div class="col-md-6 col-xs-6 text-center">
          <a href="<?= base_url('Kader/historiSelesai'); ?>" class="nav-link" style="text-decoration:none;">Selesai</a>
        </div>
      </div>
      <table class="table-history">
        <tr class="text-center green-rujuk-no-hover">
          <th>NIK</th>
          <th>NAMA</th>
          <th>STATUS</th>
          <th></th>
        </tr>
        <?php
        $num = 1;
        foreach ($histori as $his) { ?>
          <tr class="text-center">
            <td><label><?= $his['NO_IDENTITAS']; ?></td>
            <td><label><?= $his['NAMA']; ?></label></td>
            <td><label class="green-rujuk-no-hover">Dirujuk</td>
            <td><a type="button" class="btn-fill detail-btn" href='<?= base_url(''); ?>Kader/detailHistori/<?= $his['ID_RUJUKAN']; ?>'>Lihat Detail</a></td>
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