<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Profil</h2>
                                    <span>Profil Puskesmas </span>
                                    <hr>
                                </div>
                                <div class="card-block table-border-style">
                                    <!--<div class="table-responsive">-->
                                    <article class="card-body mx-auto" ;">
                                        <!-- <h4 class="card-title mb-4 green-rujuk-no-hover text-left">Detail Data Rujukan Pasien</h4> -->

                                        <article>
                                                                      <dl class="row">
                                                <dt class="col-sm-4 black mb-3"><label>Nama</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $profil['NAMA_KADER']; ?></label></dd>

                                                <dt class="col-sm-4 black mb-3"><label>Alamat</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $profil['ALAMAT_KADER']; ?></label></dd>

                                                <dt class="col-sm-4 black mb-3"><label>Email</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $profil['EMAIL_KADER']; ?></label></dd>

                                                <dt class="col-sm-4 black mb-3"><label>Nomor Ponsel</label></dt>
                                                <dd class="col-sm-8 mb-3"><label>: <?= $profil['NO_TELP_KADER']; ?></label></dd>

                                            </dl>
                                        </article>
                                        <hr>
                                        <div class="col-md 12">
                                            <a href="<?= base_url(''); ?>Puskesmas/index">
                                                <button class="btn btn-danger"><i class="icofont icofont-edit"></i>Beranda</button>
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