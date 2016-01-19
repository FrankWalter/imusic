<?php 
class Home extends CI_Controller {
	public function view($page = 'recommends') {
		if (!file_exists(APPPATH.'/views/explore/'.$page.'.php')) {
			show_404();
		}
		$this->load->view('header.php');
		$this->load->view('explore/'.$page);
		$this->load->view('footer.php');
	}
}
 ?>