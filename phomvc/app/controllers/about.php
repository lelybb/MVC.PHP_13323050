<?php
class About extends Controller{
    public function index($nama ='D3TK', $pekerjaan = 'BELAJAR', $umur = 19){
        //echo 'About/index';
        //echo "Halo saya $nama , Saya adalah seorang $pekerjaan. Saya berumur $umur tahun";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] ='About Me';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
}

    public function page(){
        //echo 'About/page';
        $data['judul'] = 'Pages';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}

?>