<?php
Class User extends CI_Controller {
	public function login() {

	}
} 
 ?>

 					<?php
					$con = mysql_connect("localhost","root","");
					if (!$con){
					die('Could not connect: ' . mysql_error());
					} 
					mysql_query("use mydb");
					
					session_start();
					if(isset($_SESSION['user']) and isset($_SESSION['passwd'])){
						require "logedin.php";
					}
					else if(isset($_POST['user']) and isset($_POST['passwd'])){
						$res=mysql_query("select id from user where name='".$_POST['user']."' and passwd='".$_POST['passwd']."'");
						if ($res){
							$row=mysql_fetch_array($res);
						 	mysql_free_result($res);
						 	if ($row) {
						 		$_SESSION['user']=$_POST['user'];
								$_SESSION['passwd']=$_POST['passwd'];
								require "logedin.php";
						 	}
						 	else{
						 		echo "<script>alert('错误的用户名或密码')</script>";
						 		unset($_POST['user']);
								unset($_POST['passwd']);
								require "login.php";
							} 
						} 
						else echo "执行 $sql 错误:".mysql_error();
					}
					else{
						require "login.php";
					}
                    ?>