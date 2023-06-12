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

        <div class="row">

            <div class="col-sm-12">

                <?php Flasher::Message(); ?>

            </div>

        </div>

        <div class="card">

            <div class="card-header">

                <h3 class="card-title"><?= $data['title'] ?></h3> 

                <div class="btn-group float-right">

                    <a href="<?= base_url; ?>/kependudukan/tambahKependudukan" class="btn float-right btn-xs btn btn-primary">Tambah Kependudukan</a>
        
                    <a href="<?= base_url; ?>/kependudukan/laporanKependudukan" class="btn float-right btn-xs btn btn-info">Laporan Kependudukan</a>

                </div>
            
            </div>


            <div class="card-body">

                <form action="<?= base_url; ?>/kependudukan/cariKependudukan" method="post">

                    <div class="row mb-3">

                        <div class="col-lg-6">

                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="" name="key" >

                                <div class="input-group-append">

                                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>

                                    <a class="btn btn-outline-danger" href="<?= base_url; ?>/kependudukan" >Reset</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </form>

                <table class="table table-bordered">

                    <thead>

                        <tr>

                            <th style="width: 10px">#</th>

                            <th>Kecamatan</th>

                            <th>Laki-laki</th>

                            <th>Perempuan</th>

                            <th>Tahun</th>

                            <th>Total</th>
                            
                            <th style="width: 150px">Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php $no=1; ?>

                        <?php foreach ($data['kependudukan'] as $row) :?>

                            <tr>

                                <td><?= $no; ?></td>

                                <td><?= $row['kecamatan_nama'];?></td>

                                <td><?= $row['laki_laki'];?> Jiwa</td>

                                <td><?= $row['perempuan'];?> Jiwa</td>

                                <td><?= $row['tahun'];?></td>

                                <td><div class="badge badge-warning"><?=$row['total'];?> Jiwa</div></td>

                                <td>

                                    <a href="<?= base_url; ?>/kependudukan/editKependudukan/<?= $row['id'] ?>" class="badge badge-info">Edit</a> 

                                    <a href="<?= base_url; ?>/kependudukan/hapusKependudukan/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>

                                </td>

                            </tr>

                        <?php $no++; endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

</div>
