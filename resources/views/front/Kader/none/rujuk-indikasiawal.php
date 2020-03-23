<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-3">

    <article class="card-body mx-auto" style="max-width: 600px;">
      <h4 class="card-title mb-5 green-rujuk-no-hover text-center">Rujuk Pasien - Keterangan Penyakit Indikasi Awal</h4>
      <form action="./home.php" onsubmit="rujuk()">
        <div class="form-group">
          <label name="" disabled class="form-control" style="border:none;">Lokasi Gigi</label>
          <label name="" disabled class="form-control" style="border:none;"> A-21, B-43</label>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
        </div>
        <div class="form-group input-group">
          <textarea rows="6" class="form-control" placeholder="Keterangan Indikasi Awal" type="text" required></textarea>
        </div> <!-- form-group// -->
        <div class="form-group">
          <button type="submit" class="btn btn-fill">Rujuk </a> </button>
          <script>
            function rujuk() {
              alert('Pasien berhasil dirujuk ke Puskesmas/Rumah Sakit, silahkan pasien untuk datang ke tempat tersebut untuk tindakan lebih lanjut.');
              window.location = './home.php';
            }
          </script>
        </div> <!-- form-group// -->
      </form>
    </article>
  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->

</body>