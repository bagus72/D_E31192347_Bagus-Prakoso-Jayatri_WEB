<?php
	defined('BASEPATH')OR exit('No direct script access allowed');
	class Mahasiswa extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this -> load -> model('Mahasiswa_model'); //load file model dengan nama Mahasiswa_model
		}

		public function index(){
			$data['user'] = $this->Mahasiswa_model->getAll()->result(); //mengambil data array dari database melalui model
			$this->template->views('crud/home_mahasiswa',$data); //menampilkan file view home_mahasiswa dengan menggunakan library template
		}
		
		public function tambah(){
			$this->template->views('crud/tambah_mahasiswa');
			//menampilkan halaman tambah_mahassiwa untuk input data
		}

		public function input(){
			$username = $this->input->post('username');
			//membuat delerasi $username untuk menampung data dari inputan yang memiliki name username
			$password = $this->input->post('pass');
			//membuat delerasi $password untuk menampung data dari inputan yang memiliki name pass
			$nama = $this->input->post('nama');
			//membuat delerasi $nama untuk menampung data dari inputan yang memiliki name nama
			$grup = $this->input->post('grup');
			//membuat delerasi $grup untuk menampung data dari inputan yang memiliki name grup

			$data = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'grup' => $grup,
				);
			//mengatur atribut yang sesuai dengan tabel yang aka ditambahkan nilainya
			//dengan nilai masing - masing atribut telah disimpan dalam variabel sebelumnya
			$this->Mahasiswa_model->input_data($data,'tm_user');
			//input data dengan nilai data pada $data dan tabelnya tn_user
			redirect('Mahasiswa/index');
			//jika sudah maka akan menuju function index pada controller mahasiswa
		}
	}
	
?>
