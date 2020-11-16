<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function beranda()
	{
		$data = array('title' => 'Visualisasi Data' ,
					  'isi'	  => 'home/analisis' );

		$this->load->view('home/templates/templates', $data, FALSE);		
	}

	public function kontak()
	{
		$data = array('title' => 'Kontak Kami' ,
					  'isi'	  => 'home/kontak' );

		$this->load->view('home/templates/templates', $data, FALSE);		
	}

	public function analisis()
	{
		$data = array(
			'title' => 'Analisis' ,
			'isi'	=> 'home/index' 
		);

		$this->load->view('home/templates/templates', $data, FALSE);

	}

}

/* End of file C_home.php */
/* Location: ./application/controllers/C_home.php */