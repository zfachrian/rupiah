<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
    <div class="container mb-3">

        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mb-4 green-rujuk-no-hover text-center">Daftar Akun Puskesmas</h4>
            <form method="POST" action="<?= base_url(); ?>Auth/daftarPuskesmas">
                <input hidden type="text" name="tgl" id="tgl" value="<?= date("Y-m-d") ?>">
                <input hidden type="text" name="status" id="status" value="2">
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
                        <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                    </div>
                    <input name="lahir" id="lahir" class="form-control" placeholder="Tgl Lahir" type="date" required>
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
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" id="email" class="form-control" placeholder="Email" type="email" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
                    </div>
                    <input name="alamat" id="alamat" class="form-control" placeholder="Alamat" type="text" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="ponsel" id="ponsel" class="form-control" placeholder="Nomor Ponsel" type="number" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="passwd" id="passwd" class="form-control" placeholder="Password" type="password" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="passwd2" id="passwd2" class="form-control" placeholder="Ulangi password" type="password" required>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select name="jabatan" id="jabatan" class="form-control" required>
                        <!-- <option value=""> Daftar Sebagai</option>
                        <option value="1">Dokter Gigi</option> -->
                        <option value="4">Puskesmas</option>
                    </select>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
                    </div>
                    <input name="tempat" id="tempat" class="form-control" placeholder="Tempat" type="text" value="<?= $this->session->userdata('tempat_rujuk')['ID_TEMPAT_RUJUK'] ?>" required>
                </div> <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" name="submit" value="submit" class="btn btn-fill">Daftar Akun </a> </button>
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