<!DOCTYPE html>
<html>
<head>
   <title>imusic 您的私人音乐收藏夹</title>
   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
   <meta charset="utf-8">
   <script>
	$(document).ready(function(){
	  $("#button1").click(function(){
	    $("#options").load("/imusic/view/personal/dynamic/mysinger.php");
	  });
	   $(".slist").click(function(){
	   	// alert($(this).attr("id"));
	    $("#options").load("/imusic/view/personal/dynamic/song_list.php?list="+$(this).attr("id"));
	  });
	    $(".insert_record").click(function(){
	    $("#insert_record").load("/imusic/view/personal/dynamic/insert_record.php?song_id="+$(this).attr("song_id")+"&user_name="+$(this).attr("user_name"));
	  });
	   	$("#my_record").click(function(){
	    $("#options").load("/imusic/view/personal/dynamic/my_record.php");
	  });
	   $(".add_to_list").click(function(){
	   	alert("成功加入歌单");
	    $("#add_song").load("/imusic/view/personal/dynamic/add_to_list.php?song_list="+$(this).attr("id")+"&song_id="+$(this).attr("song_id"));
	  });
	   $(".show_list").click(function(){
	    $("#show_list").load("/imusic/view/ffriends/show_list.php?user_name="+$(this).attr("user_name"));
	  });
	   $(".follow_user").click(function(){
	   	alert("您将关注用户"+$(this).attr("user_name"));
	    $("#follow_user").load("/imusic/view/ffriends/follow_user.php?user_name="+$(this).attr("user_name")+"&user_id="+$(this).attr("user_id"));
	  });
	});
	</script>
	<style type="text/css"> 
	img,a img{    
	border:0;    
	margin:0;    
	padding:0;    
	max-width:600px;    
	width:expression(this.width>600?"600px":this.width);    
	max-height:600px;    
	height:expression(this.height>600?"600px":this.height);    
	}   
	</style>
	
</head>
<body>
	<div id="insert_record"></div>
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-2 column">
				<h1>
					爱音乐
				</h1>
			</div>
			<div class="col-md-6 column">
			</div>
			<div class="col-md-4 column">
				<div class="row clearfix">
					<div class="col-md-11 column">
					</div>
					<div class="col-md-1 column">
					<br/>

					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">

				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							 <a data-toggle="dropdown" class="btn dropdown-toggle" href="/imusic/index.php/explore/recommends">发现音乐</a>
							 <ul class="dropdown-menu">
								<li>
									<a href="/imusic/index.php/explore/recommends">推荐</a>
								</li>
								<li>
									<a href="/imusic/index.php/explore/lists">歌单</a>
								</li>
								<li>
									<a href="/imusic/index.php/explore/singers">歌手</a>
								</li>
								<li>
									<a href="/imusic/index.php/explore/categories">类别</a>
								</li>
							</ul>
						</li>

						<li>
							 <a href="/imusic/view/ffriends/ff_index.php">发现朋友</a>
						</li>

						<li>
							 <a href="/imusic/view/personal/p_index.php">我的音乐</a>
						</li>
						<li>
							 <a href="/imusic/view/friends/f_index.php">我的朋友</a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left" role="search" method="POST" action="/imusic/view/search_result.php">
						<div class="form-group">
							<input type="text" class="form-control" id="ssearch" name="ssearch"/>
						</div> <button type="submit" class="btn btn-default">搜索</button>
					</form>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
</div>