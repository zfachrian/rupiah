<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Data Rujukan</h2>
                                    <span>Rujukan Kader</span>
                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <?php
                                            if ($this->session->flashdata('success')) {
                                                ?>
                                                <div class="alert alert-success text-center" style="margin-top:20px;">
                                                    <?php echo $this->session->flashdata('success'); ?>
                                                </div>
                                            <?php
                                            } ?>
                                            <?php
                                            if ($this->session->flashdata('edit')) {
                                                ?>
                                                <div class="alert alert-success text-center" style="margin-top:20px;">
                                                    <?php echo $this->session->flashdata('edit'); ?>
                                                </div>
                                            <?php
                                            } ?>
                                            <?php
                                            if ($this->session->flashdata('hapus')) {
                                                ?>
                                                <div class="alert alert-danger text-center" style="margin-top:20px;">
                                                    <?php echo $this->session->flashdata('hapus'); ?>
                                                </div>
                                            <?php
                                            } ?>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>No</th>
                                                    <th>NIK</th>
                                                    <th>NAMA</th>
                                                    <th>TGL RUJUKAN</th>
                                                    <th>STATUS</th>
                                                    <th>DETAIL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($rujukan as $rujuk) { ?>
                                                    <tr>
                                                        <th class="text-center">
                                                            <div class="btn-group">
                                                                <a href="<?= base_url(''); ?>Puskesmas/tambah_rujukan/<?= $rujuk['ID_RUJUKAN']; ?>" data-toggle="tooltip" title="periksa" class="btn btn-sm btn-success" data-original-title="Edit"><i class="icofont icofont-edit"></i></a>
                                                            </div>
                                                        </th>
                                                        <td><?= $num ?></td>
                                                        <td><?= $rujuk['NO_IDENTITAS']; ?></td>
                                                        <td><?= $rujuk['NAMA']; ?></td>
                                                        <td><?= $rujuk['TGL_RUJUKAN']; ?></td>
                                                        <td>dirujuk</td>
                                                        <th class="text-left">
                                                            <div class="btn-group">
                                                                <a href="<?= base_url(''); ?>Puskesmas/detailRujukan/<?= $rujuk['ID_RUJUKAN']; ?>" data-toggle="tooltip" title="detail" class="btn btn-sm btn-primary" data-original-title="detail"><i class="icofont icofont-info-square"></i></a>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                <?php
                                                    $num++;
                                                } ?>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <div class="card-body">
                                            <hr>
                                            <div class="col-md 12">
                                                <a href="<?= base_url(''); ?>Puskesmas/selesai?>">
                                                    <button class="btn btn-primary"><i class="icofont icofont-edit"></i>Data Selesai Diperiksa</button>
                                                </a>
                                            </div>
                                        </div>
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