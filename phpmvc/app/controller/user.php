<?php 
class user extends controller{
    public function index(){
        $data['judul'] = "Homee";
        $this->view("templates/header",$data);
        $this->view("user/index");
        $this->view("templates/footer");
        // echo "user/index.php";
    }
    public function profile($nama = "Farhan",$pekerjaan = "Pelajar"){
        $data['judul'] = "user";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view("templates/header",$data);
        $this->view("user/profile",$data);
        $this->view("templates/footer");
    }



    // public function profile($nama = "Farhan",$pekerjaan = "Pelajar"){
    //     echo "salam kenal saya $nama, saya serorang $pekerjaan";
    // }
    // public function pp($nama = "fmh",$pekerjaan = "Pelajar"){
    //     echo "salam kenal saya $nama, saya serorang $pekerjaan";
    // }
}