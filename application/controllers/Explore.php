<?php
Class Explore extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('getdata_model');
        $this->load->helper('url_helper');
    }
	public function recommends() {
		if (!file_exists(APPPATH.'/views/explore/recommends.php')) {
			show_404();
		}
		$singers = $this->getdata_model->getHottestSingers();
          //输出row头
          echo '<div class="row">';
         foreach($singers as $row){
         	echo $row;
   //        	$singer_id=$row["singer_id"];
   //        	$singer_name=$row["name"];
			// $note=$row["note"];
			// $str=sprintf('<div class="col-md-4">
			// 		<div class="thumbnail">
			// 			<img alt="300x200" src="img/singers/%s.jpg" width="300px" height="200px"/>
			// 			<div class="caption">
			// 				<h3>
			// 					%s
			// 				</h3>
			// 				<p>
			// 					%s
			// 				</p>
			// 				<p>
			// 					 <a class="btn btn-primary" href="/imusic/view/music/singers/s_index.php?singer_id=%s">传送门</a>
			// 				</p>
			// 			</div>
			// 		</div>
			// 	</div>
			// 	',$singer_id,$singer_name,$note,$singer_id);
			// echo $str;
		  }	


		  //输出row尾
		  echo "</div>";
		$this->load->view('header.php');
		// $this->load->view('explore/recommends');
		$this->load->view('footer.php');
	}
}
 ?>