<?php

class Mahasiswa extends Controller {
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('template/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('template/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByid($id);
        $this->view('template/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('template/footer');
    }

    public function tambah (){
        // var_dump($_POST);
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlah('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function hapus ($id){
        // var_dump($_POST);
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlah('gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function getUbah(){
    // echo 'ok';
    //   echo $_POST['id'];
    echo json_encode($this->model('Mahasiswa_model')->getMahasiswaByid
    ($_POST['id']));
    }

    public function ubah(){
        if($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger'); // Perhatikan penulisan nama metode di sini
            header('location: ' . BASEURL . '/mahasiswa');
            exit;
        }
        
    }

    public function cari(){

        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('template/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('template/footer');
    }
}

?>  