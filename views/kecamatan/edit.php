<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Detail Kecamatan</h1>

                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="card card-primary">

            <div class="card-header">

                <h3 class="card-title"><?= $data['title']; ?></h3>

            </div>

            <form role="form" action="<?= base_url; ?>/kecamatan/updateKecamatan" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $data['kecamatan']['id']; ?>">

                <div class="card-body">

                    <div class="form-group">

                        <label >Nama Kecamatan</label>

                        <input type="text" class="form- control" placeholder="masukkan kecamatan..." name="nama_kecamatan" value="<?= $data['kecamatan']['nama_kecamatan']; ?>">

                    </div>

                </div>

                <div class="card-footer">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>

    </section>

</div>
