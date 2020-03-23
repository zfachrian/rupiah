<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm pb-5 slider-search">
  <div class="container mb-5 pb-3">

    <article class="card-body mx-auto" style="max-width: 600px;">
      <h4 class="card-title mb-5 green-rujuk-no-hover text-center">Rujuk Pasien - Keluhan Pasien</h4>
      <form method="POST" action="<?= base_url('Kader/diagnosa'); ?>">
        <article>
          <dl class="row">
            <dt class="col-sm-4 black mb-3"><label>Keterangan Keluhan:</label></dt>
            <dd class="col-sm-8 mb-3"><textarea rows="6" name="keluhan" id="keluhan" class="form-control" placeholder="Keterangan Keluhan Pasien" type="text" required></textarea></dd>

            <dt class="col-sm-4 black mb-3"><label>Jenis Keluhan:</label></dt>
            <dd class="col-sm-8 mb-3"><select name="jenis" id="jenis" class="form-control" required>
                <option value=""> Jenis Keluhan</option>
                <?php
                $num = 1;
                foreach ($jenis as $jen) { ?>
                  <option value="<?= $jen['ID_JENIS_KELUHAN']; ?>"><?= $jen['JENIS_KELUHAN']; ?></option>
                <?php
                  $num++;
                } ?>
              </select></dd>

            <dt class="col-sm-4 black mb-3"><label>Posisi Sakit (Rahang):</label></dt>
            <dd class="col-sm-8 mb-3"><select name="rahang" id="rahang" class="form-control" required>
                <option value=""> Posisi Rahang</option>
                <?php
                $num = 1;
                foreach ($rahang as $rah) { ?>
                  <option value="<?= $rah['ID_RAHANG']; ?>"><?= $rah['POSISI_RAHANG']; ?></option>
                <?php
                  $num++;
                } ?>
              </select></dd>

            <dt class="col-sm-4 black mb-3"><label>Posisi Sakit (Gigi):</label></dt>
            <dd class="col-sm-8 mb-3"><select name="gigi" id="gigi" class="form-control" required>
                <option value=""> Posisi Gigi</option>
                <?php
                $num = 1;
                foreach ($gigi as $gi) { ?>
                  <option value="<?= $gi['ID_GIGI']; ?>"><?= $gi['NAMA_GIGI']; ?></option>
                <?php
                  $num++;
                } ?>
              </select></dd>

            <dt class="col-sm-4 black mb-3"><label>Waktu/Lama Sakit:</label></dt>
            <dd class="col-sm-8 mb-3"><select name="waktu" id="waktu" class="form-control" required>
                <option value=""> Waktu Sakit</option>
                <?php
                $num = 1;
                foreach ($waktu as $wak) { ?>
                  <option value="<?= $wak['ID_WAKTU_SAKIT']; ?>"><?= $wak['WAKTU_SAKIT']; ?></option>
                <?php
                  $num++;
                } ?>
              </select></dd>
            <dt hidden class="col-sm-4 black mb-3"><label>ID Rujukan:</label></dt>
            <dd hidden class="col-sm-8 mb-3">
              <!-- <?php
                    // $id_rujuk = $this->session->userdata('rujuk')['ID_RUJUKAN'];
                    // $rujuk = $id_rujuk + 1;
                    ?> -->
              <input class="form-control" name="rujuk" id="rujuk" value="<?= $this->session->userdata('rujuk')['ID_RUJUKAN'] ?>" placeholder="" required>
            </dd>
          </dl>
        </article>
        <div class="form-group">
          <div class="row">
            <!-- <div class="col-sm-6">
              <button class="btn btn-fill" onclick="history.back(-1)">Kembali</button>
            </div> -->
            <div class="col-sm-12">
              <button type="submit" value="submit" class="btn btn-fill">Lanjut</button>
            </div>
          </div>
        </div> <!-- form-group// -->
      </form>
    </article>
  </div> <!-- container .//  -->
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->
</body>