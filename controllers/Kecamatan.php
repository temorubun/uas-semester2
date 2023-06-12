<?php
class kecamatan extends Controller {

    public function __construct(){

        if($_SESSION['session_login'] != 'sudah_login') {
            
        Flasher::setMessage('Login','Tidak ditemukan.','danger');
        header('location: '. base_url . '/login');
        exit;
        
        }
    }

    public function index(){
        $data['title']='Data Kecamatan Daerah Mimika';
        $data['kecamatan']=$this->model('KecamatanModel')->getAllKecamatan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kecamatan/index', $data);
        $this->view('templates/footer');
    }




    public function tambahKecamatan(){
        $data['title'] = 'Tambah Data Kecamatan';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kecamatan/create', $data);
        $this->view('templates/footer');
    }
    public function simpanKecamatan(){
        if( $this->model('KecamatanModel')->tambahKecamatan($_POST) > 0 ){
            Flasher::setMessage('Berhasil','ditambahkan', 'success');
            header('location: ' . base_url . '/kecamatan');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/kecamatan');
            exit;
        }
    }  



    
    public function editKecamatan($id){
        $data['title'] = 'Detail Kecamatan';
        $data['kecamatan'] = $this->model('KecamatanModel')->getKecamatanById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kecamatan/edit', $data);
        $this->view('templates/footer');
    }
    public function updateKecamatan(){
        if( $this->model('KecamatanModel')->updateDataKecamatan($_POST) > 0 ){
            Flasher::setMessage('Berhasil','diupdate', 'success');
            header('location: ' . base_url . '/kecamatan');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/kecamatan');
            exit;
        }
    }  


    

    public function cariKecamatan(){
        $data['title'] = 'Data Kecamatan Daerah Mimika';
        $data['kecamatan'] = $this->model('KecamatanModel')->cariKecamatan();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kecamatan/index', $data);
        $this->view('templates/footer');
    }
    public function hapusKecamatan($id){
        if( $this->model('KecamatanModel')->deleteKecamatan($id) > 0 ){
            Flasher::setMessage('Berhasil','dihapus', 'success');
            header('location: ' . base_url . '/kecamatan');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/kecamatan');
            exit;
        }
    }  



}
