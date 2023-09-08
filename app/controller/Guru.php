<?php
class Guru extends Controller{
    public function index(){
        $data['judul']="Guru";
        $data['Guru']=$this->model('Guru_model')->getAllBlog();
        $this->view('templates/header',$data);
        $this->view('Guru/index',$data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judul']="Detail Guru";
        $data['Guru']=$this->model('Guru_model')->getBlogById($id);
        $this->view('templates/header',$data);
        $this->view('Guru/detail',$data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if($this->model('Guru_model')->tambahData($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASE_URL . '/Guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: '.BASE_URL . '/Guru');
            exit;
        }

    }
    public function hapus($id)
    {
        if ($this->model('Guru_model')->hapusDataGuru($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model(Guru_model)->getBlogById($_POST));
    }

    public function ubah()
    {
        if($this->model('Guru_model')->ubahDataGuru($data) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        }
    }
}
?>