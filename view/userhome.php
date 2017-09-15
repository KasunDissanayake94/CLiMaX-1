<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>CliMax-Home</title>
        <style>
            img{
                max-width:180px;
            }
            input[type=file]{
                padding:10px;
                background:#2d2d2d;}
        </style>
        <link href="css/popup.css" rel="stylesheet">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="../js/popup.js"></script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body>
<div class="wrapper" >
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">

            <!-- main right col -->
            <div class="column col-sm-12 col-xs-12" id="main" onscroll="myFunction()">
                
                <!-- top nav -->
              	<div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>
                      <a href="/" class="navbar-brand logo">CLiMaX</a>
                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                          </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i style="font-size: 16px;" class="fa fa-user-circle" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="myProblems.php">My Problems</a></li>
                          <li><a href="mydonations.php">Donation Plans</a></li>
                          <li><a href="">Settings</a></li>
                          <li><a href="../index.php">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                      <li style="background-color:#4D0066;">
                        <a href=""><i class="fa fa-home" style="font-size: 16px; " aria-hidden="true"></i> Home</a>
                      </li>
  
                      <li>
                        <a href="../index.php"><span class="badge">Log out</span></a>
                      </li>
                    </ul>
                    
                  	</nav>
                </div>
                <!-- /top nav -->
              
                <div class="padding">
                
                    <div class="full col-sm-9" style="padding: 50px;">
                      <div class="col-md-6">
                       <img src="../img/bg.png" >
                    	  </div> 
                    	  <div class="col-md-5">
                       <img src="../img/bg.png" >
                    	  </div>
                     	 <!-- content -->                      
                      	<div class="row">
                          <!-- Categories -->


                            <div class="categories col-sm-2" id="sticky">

                                <div class="col-xs-12" id="sticky-anchor">
                                    <img src="../images/transport_logo.jpg" class="category-items">
                                </div>
                                <div class="col-xs-12 ">
                                    <img src="../images/technology_logo.jpg" class="category-items">
                                </div>
                                <div class=" col-xs-12 ">
                                    <img src="../images/education_logo.jpg" class="category-items">
                                </div>
                                <div class="col-xs-12 ">
                                    <img src="../images/social_logo.jpg" class="category-items">
                                </div>
                                <div class="col-xs-12 ">
                                    <img src="../images/other_logo.jpg" class="category-items">
                                </div>>
                         </div> 

                          <!-- main col right -->
                          <div class="col-sm-10 pull-right" style="padding-top: 10px">
                                <div class="row	"> 
                                  <div class="well  col-sm-5"> 
                                   <form class="form-horizontal" role="form">
                                    <h4>Tell us your problem</h4>
                                     <div class="form-group" style="padding:14px;">
                                      <textarea class="form-control" placeholder="Describe your problem" id="uploadFile"></textarea>
                                    </div>
                                       <button class="btn btn-primary pull-right" type="button">Post</button><ul class="list-inline"><li><input type="file" id="selectedFile" style="display: none;" class="upload" /><button type="button" value="" onclick="document.getElementById('selectedFile').click(); "><i class="fa fa-picture-o" aria-hidden="true"></i></button></a></li><li><a href=""><i class="fa fa-video-camera" aria-hidden="true"></i></a></li><li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a></li></ul>
                                  </form>
                              </div>
                              <div class="well col-sm-6 pull-right"> 
                                   <form class="form-horizontal" role="form">
                                    <h4>Tell What us you have</h4>
                                     <div class="form-group" style="padding:14px;">
                                      <textarea class="form-control" placeholder="Describe what you got"></textarea>
                                    </div>
                                    <button class="btn btn-primary pull-right" type="button">Post</button><ul class="list-inline"><li><input type="file" id="selectedFile" style="display: none;" /><button type="button" value="" onclick="document.getElementById('selectedFile').click();" ><i class="fa fa-picture-o" aria-hidden="true"></i></button></a></li><li><a href=""><i class="fa fa-video-camera" aria-hidden="true"></i></a></li><li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a></li></ul>
                                  </form>
							  </div></div>
                            
                               <div class="panel panel-default">
                                 <div class="panel-heading">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <h4>Stackoverflow</h4>
                                      </div>
                                      <div class="col-md-5">
                                        <i class="fa fa-star-o pull-right" aria-hidden="true"></i>
                                      </div>
                                      <div class="col-md-1">
                                        <a href="#" class="pull-right">View all</a>
                                      </div>
                                    </div>
                                  
                                   
                                  
                                  
                                 </div>
                                  <div class="panel-body">
                                    <img src="//placehold.it/150x150" class="img-circle pull-right"> <a href="#">Keyword: Bootstrap</a>
                                    <div class="clearfix"></div>
                                    <hr>
                                    
                                    <p>If you're looking for help with Bootstrap code, the <code>twitter-bootstrap</code> tag at <a href="http://stackoverflow.com/questions/tagged/twitter-bootstrap">Stackoverflow</a> is a good place to find answers.</p>
                                    
                                    <hr>
                                    <form>
                                    <div class="input-group">
                                      <div class="input-group-btn">
                                      <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Add a comment..">
                                      <span class="input-group-addon" id="basic-addon2">Submit</span>
                                    </div>
                                    </form>
                                    
                                  </div>
                               </div>

                               <div class="panel panel-default">
                                 <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Portlet Heading</h4></div>
                                  <div class="panel-body">
                                    <ul class="list-group">
                                    <li class="list-group-item">Modals</li>
                                    <li class="list-group-item">Sliders / Carousel</li>
                                    <li class="list-group-item">Thumbnails</li>
                                    </ul>
                                  </div>
                               </div>
                            
                               <div class="panel panel-default">
                                <div class="panel-thumbnail"><img src="/assets/example/bg_4.jpg" class="img-responsive"></div>
                                <div class="panel-body">
                                  <p class="lead">Social Good</p>
                                  <p>1,200 Followers, 83 Posts</p>
                                  
                                  <p>
                                    <img src="https://lh6.googleusercontent.com/-5cTTMHjjnzs/AAAAAAAAAAI/AAAAAAAAAFk/vgza68M4p2s/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                    <img src="https://lh4.googleusercontent.com/-6aFMDiaLg5M/AAAAAAAAAAI/AAAAAAAABdM/XjnG8z60Ug0/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                    <img src="https://lh4.googleusercontent.com/-9Yw2jNffJlE/AAAAAAAAAAI/AAAAAAAAAAA/u3WcFXvK-g8/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                  </p>
                                </div>
                              </div>
                            
                          </div>
                       </div><!--/row-->
              
                        <div class="row" id="footer">    
                          <div class="col-sm-6">
                            
                          </div>
                          <div class="col-sm-6">
                            <p>
                            <a href="#" class="pull-right">TryCatch++ �Copyright 2017</a>
                            </p>
                          </div>
                        </div>
                      
                     
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>



<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
			Update Status
      </div>
      <div class="modal-body">
          <form class="form center-block">
            <div class="form-group">
              <textarea class="form-control input-lg" autofocus placeholder="What do you want to share?"></textarea>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div>
          <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href="" onClick="return popup(this, 'notes')"><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
		  </div>	
      </div>
  </div>
  </div>
</div>


	</body>
<script>
    document.getElementById("selectedFile").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
</script>
</html>