<?php
class blog extends controller
{
    public function index()
    {
        $data['judul'] = "Guru";
        $data['blog'] = $this->model("blog_model")->getAllGuru();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = "Detail_Guru";
        $data['guru'] = $this->model("blog_model")->getGuruById($id);
        $this->view('templates/header', $data);
        $this->view('blog/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('blog_model')->tambahDataguru($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location: ' . BASE_URL . '/blog');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' . BASE_URL . '/blog');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('blog_model')->hapusDataguru($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location: ' . BASE_URL . '/blog');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: ' . BASE_URL . '/blog');
            exit;
        }
    }
    public function getubah()
    {
        echo json_encode($this->model('blog_model')->getGuruById($_POST['id']));
    }
    public function ubah()
    {
        if ($this->model('blog_model')->ubahDataGuru($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }

    }
}