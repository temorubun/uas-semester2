<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1><?= $data['title']; ?></h1>

                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="card card-primary">

            <div class="card-header">

                <h3 class="card-title"><?= $data['title']; ?></h3>

            </div>

            <form role="form" action="<?= base_url; ?>/kependudukan/simpanKependudukan" method="POST" enctype="multipart/form-data">

                <div class="card-body">

                    <div class="form-group">

                        <label >Kecamatan</label>

                        <select class="form-control" name="kecamatan_nama">

                            <option value="">Pilih Kecamatan</option>

                            <?php foreach ($data['kecamatan'] as $row) :?>

                                <option value="<?= $row['nama_kecamatan']; ?>"><?= $row['nama_kecamatan']; ?></option>

                            <?php endforeach; ?>

                        </select>

                    </div>

                    <div class="form-group">

                        <label >Jumlah Laki-laki (Jiwa)</label>

                        <input type="number" class="form-control" placeholder="masukkan jumlah jiwa..." name="laki_laki" required>

                    </div>

                    <div class="form-group">

                        <label >Jumlah Perempuan (Jiwa)</label>

                        <input type="number" class="form-control" placeholder="masukkan jumlah jiwa..." name="perempuan" required>

                    </div>

                    <div class="form-group">

                        <label >Tahun</label>

                        <input type="number" class="form-control" placeholder="masukkan tahun..." name="tahun" required>

                    </div>

                </div>

                <div class="card-footer">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>

    </section>

</div>
