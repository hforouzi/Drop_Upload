<?php 

class Upload extends CI_Controller {

	public function do_upload() {
		error_reporting(E_ALL | E_STRICT);
		$this->load->library('UploadHandler');
	}

}

?>