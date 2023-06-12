<?php
class kependudukan extends Controller {

    public function __construct(){

        if($_SESSION['session_login'] != 'sudah_login') {
            
        Flasher::setMessage('Login','Tidak ditemukan.','danger');
        header('location: '. base_url . '/login');
        exit;
        
        }
    }

    public function index(){
        $data['title']='Data Kependudukan Daerah Mimika';
        $data['kependudukan']=$this->model('KependudukanModel')->getAllKependudukan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kependudukan/index', $data);
        $this->view('templates/footer');
    }




    public function tambahKependudukan(){
        $data['title'] = 'Tambah Data Kependudukan';
        $data['kecamatan']=$this->model('KecamatanModel')->getAllKecamatan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kependudukan/create', $data);
        $this->view('templates/footer');
    }
    public function simpanKependudukan(){
        if( $this->model('KependudukanModel')->tambahKependudukan($_POST) > 0 ){
            Flasher::setMessage('Berhasil','ditambahkan', 'success');
            header('location: ' . base_url . '/kependudukan');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/kependudukan');
            exit;
        }
    }  



    
    public function editKependudukan($id){
        $data['title'] = 'Detail Kependudukan';
        $data['kecamatan']=$this->model('KecamatanModel')->getAllKecamatan();
        $data['kependudukan'] = $this->model('KependudukanModel')->getKependudukanById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kependudukan/edit', $data);
        $this->view('templates/footer');
    }
    public function updateKependudukan(){
        if( $this->model('KependudukanModel')->updateDataKependudukan($_POST) > 0 ){
            Flasher::setMessage('Berhasil','diupdate', 'success');
            header('location: ' . base_url . '/kependudukan');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/kependudukan');
            exit;
        }
    }  


    

    public function cariKependudukan(){
        $data['title'] = 'Data Kependudukan Daerah Mimika';
        $data['kependudukan'] = $this->model('KependudukanModel')->cariKependudukan();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kependudukan/index', $data);
        $this->view('templates/footer');
    }
    public function hapusKependudukan($id){
        if( $this->model('KependudukanModel')->deleteKependudukan($id) > 0 ){
            Flasher::setMessage('Berhasil','dihapus', 'success');
            header('location: ' . base_url . '/kependudukan');
            exit;
        }else{
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/kependudukan');
            exit;
        }
    }  



}
