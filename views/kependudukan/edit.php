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

            <form role="form" action="<?= base_url; ?>/kependudukan/updateKependudukan" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $data['kependudukan']['id']; ?>">

                <div class="card-body">

                    <div class="form-group">

                        <label >Kecamatan</label>

                        <select class="form-control" name="kecamatan_nama">

                            <option value="">Pilih</option>

                            <?php foreach ($data['kecamatan'] as $row) :?>

                                <option value="<?= $row['nama_kecamatan']; ?>" <?php if($data['kependudukan']['kecamatan_nama'] == $row['nama_kecamatan']) { echo "selected"; } ?>><?= $row['nama_kecamatan']; ?></option>

                            <?php endforeach; ?>

                        </select>

                    </div>

                    <div class="form-group">

                        <label >Jumlah Laki-laki (Jiwa)</label>

                        <input type="number" class="form-control" placeholder="masukkan jumlah jiwa..." name="laki_laki" value="<?= $data['kependudukan']['laki_laki'];?>">

                    </div>

                    <div class="form-group">

                        <label >Jumlah Perempuan (Jiwa)</label>

                        <input type="number" class="form-control" placeholder="masukkan jumlah jiwa..." name="perempuan" value="<?= $data['kependudukan']['perempuan'];?>">

                    </div>

                    <div class="form-group">

                        <label >Tahun</label>

                        <input type="number" class="form-control" placeholder="masukkan tahun..." name="tahun" value="<?= $data['kependudukan']['tahun'];?>">

                    </div>

                </div>

                <div class="card-footer">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>

    </section>

</div>