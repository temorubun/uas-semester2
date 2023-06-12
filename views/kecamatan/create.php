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
    
            <form role="form" action="<?= base_url; ?>/kecamatan/simpanKecamatan" method="POST" enctype="multipart/form-data">
    
                <div class="card-body">
    
                    <div class="form-group">
    
                        <label >Nama Kecamatan Daerah Mimika</label>
    
                        <input type="text" class="form-control" placeholder="masukkan kecamatan..." name="nama_kecamatan">
    
                    </div>
    
                </div>
    
                <div class="card-footer">
    
                    <button type="submit" class="btn btn-primary">Submit</button>
    
                </div>
    
            </form>
    
        </div>
    
    </section>

</div>
