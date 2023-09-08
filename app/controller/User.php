<?php
class User extends Controller{

    public function index($n ="", $pekerjaan = "Pelajar",$nama =" Renata "){
        $data['judul']="User";
        $data['nama']=$this->model('User_model')->getUser();
        $data['pekerjaan']=$pekerjaan;
        $this->view('templates/header',$data);
        $this->view('user/index',$data);
        $this->view('templates/footer');
    }
}
