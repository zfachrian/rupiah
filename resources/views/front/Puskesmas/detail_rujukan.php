<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Detail Data</h2>
                                    <span>Detail Data Pasien Rujukan </span>
                                    <hr>
                                </div>
                                <div class="card-block table-border-style">
                                    <!--<div class="table-responsive">-->
                                    <article class="card-body mx-auto" ;">
                                        <!-- <h4 class="card-title mb-4 green-rujuk-no-hover text-left">Detail Data Rujukan Pasien</h4> -->

                                        <article>
                                            <dl class="row">
                                                <dt class="col-sm-4 black mb-3"><label>Nama</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $detRujukan['NAMA']; ?></label></dd>

                                                <dt class="col-sm-4 black mb-3"><label>NIK</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $detRujukan['NO_IDENTITAS']; ?></label></dd>

                                                <dt class="col-sm-4 black mb-3"><label>Alamat</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $detRujukan['ALAMAT']; ?></label></dd>

                                                <dt class="col-sm-4 black mb-3"><label>Nomor Ponsel</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $detRujukan['NO_TELP']; ?></label></dd>

                                                <dt class="col-sm-4 black mb-3"><label>Keterangan Keluhan</label></dt>
                                                <dd class="col-sm-8 mb-3"><textarea disabled class="form-control" type="text"><?= $detRujukan['DIAGNOSA']; ?></textarea></dd>

                                                <dt class="col-sm-4 black mb-3"><label>Jenis Keluhan</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $detRujukan['JENIS_KELUHAN']; ?></label></dd>

                                                <dt class="col-sm-4 black mb-3"><label>Posisi Sakit (Rahang)</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $detRujukan['POSISI_RAHANG']; ?></label></dd>

                                                <dt class="col-sm-4 black mb-3"><label>Posisi Sakit (Gigi)</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $detRujukan['NAMA_GIGI']; ?></label></dd>

                                                <dt class="col-sm-4 black mb-3"><label>Waktu/Lama Sakit</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $detRujukan['WAKTU_SAKIT']; ?></label> </dd>
                                                <dt class="col-sm-4 black mb-3"><label>Tanggal Rujukan</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $detRujukan['TGL_RUJUKAN']; ?></label></dd>
                                                <dt class="col-sm-4 black mb-3"><label>Dirujuk ke</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $detRujukan['NAMA_TEMPAT_RUJUK']; ?></label></dd>

                                            </dl>
                                        </article>
                                        <hr>
                                        <div class="col-md 12">
                                            <a href="<?= base_url(''); ?>Puskesmas/rujukan">
                                                <button class="btn btn-danger"><i class="icofont icofont-edit"></i>Kembali</button>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>