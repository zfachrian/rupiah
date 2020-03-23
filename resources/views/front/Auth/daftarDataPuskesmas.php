<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
    <div class="container mb-3">

        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mb-4 green-rujuk-no-hover text-center">Daftar Akun Puskesmas</h4>
            <form method="POST" action="<?= base_url(); ?>Auth/daftarDataPuskesmas">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="puskesmas" id="puskesmas" class="form-control" placeholder="Nama Puskesmas" type="text" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <input name="ket" id="ket" class="form-control" placeholder="Keterangan Puskesmas" type="text" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
                    </div>
                    <input name="alamat" id="alamat" class="form-control" placeholder="Alamat Puskesmas" type="text" required>
                </div> <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" name="submit" value="submit" class="btn btn-fill">Lanjut </a> </button>
                </div>
            </form>
            <script>
                function daftar() {
                    alert('Selamat anda telah berhasil mendaftarkan akun, sementara akun anda belum aktif tungga hingga tim kami untuk menghubungi anda guna verifikasi data. Terima kasih.');
                    window.location = '<?= base_url(); ?>Auth';
                }
            </script>
            <p class="text-center">Sudah punya akun? <a href="<?= base_url(''); ?>Auth/index" style="text-decoration:none;" class="green-rujuk">Masuk</a> </p>
        </article>
    </div> <!-- container .//  -->
</section>


<!-- ========================= SECTION CONTENT END// ========================= -->
</body>

</html>