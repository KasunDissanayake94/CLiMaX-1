

<!DOCTYPE html>

<?php
require_once('../model/Database.php');

// making connection
$db = new Database();
$connection = $db->connect();


// prepare database query
    $query = "SELECT c.cust_name,p.prob_description,p.rate,g.cat_name,p.prob_date FROM customer_problem p,customer c,category g WHERE c.cust_id=p.cust_id AND g.cat_id=p.cat_id ORDER BY p.prob_date DESC";

    $result_set = $db->executeQuery($query);


    $db->verifyQuery($result_set);
?>

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>CliMax-problems</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
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
                      <li class="dropdown" style="background-color:#4D0066;">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i style="font-size: 16px;" class="fa fa-user-circle" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                          <li style="background-color:#DCC6FF;"><a href="">Your Problems</a></li>
                          <li><a href="mydonations.php">Donation Plans</a></li>
                          <li><a href="">Settings</a></li>
                          <li><a href="../index.php">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                      <li>
                        <a href="userhome2.php"><i class="fa fa-home" style="font-size: 16px;" aria-hidden="true"></i> Home</a>
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
                      <!--<div class="col-md-6">
                       <img src="../img/bg.png" >
                    	  </div> 
                    	  <div class="col-md-5">
                       <img src="../img/bg.png" >
                    	  </div>-->
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
                                </div>
                         </div> 

                          <!-- main col right -->
                          <div class="col-sm-10 pull-right">
                                <?php

                                    $stock_list="";
                                  if (mysqli_num_rows($result_set)>0) {
                                      while($problem = mysqli_fetch_assoc($result_set)){
                                          $stock_list.= "<div class=\"panel panel-default\">";
                                          $stock_list.= "<div class=\"panel-heading\"><p class=\"pull-right\">{$problem['prob_date']}</p> <h4>"."{$problem['cust_name']}"." - "."{$problem['cat_name']}</h4></div>";
                                          $stock_list.= "<div class=\"panel-body\">";
                                          $stock_list.= "<p><!--<img src=\"//placehold.it/150x150\" class=\"img-circle pull-right\">-->{$problem['prob_description']}</p>";
                                          /*$stock_list.= "<td>{$problem['rate']}</td>";*/
                                          $stock_list.= "<div class=\"clearfix\"></div>
                                    <!--<hr>
                                    Design, build, test, and prototype using Bootstrap in real-time from your Web browser. 
                                    Bootply combines the power of hand-coded HTML, CSS and JavaScript with the benefits of responsive design using Bootstrap.
                                    Find and showcase Bootstrap-ready snippets in the 100% free Bootply.com code repository.-->
                                  </div>
                               </div>";
                                      }
                                      $stock_list .= "</tbody>
                                        </table>";
                                      echo $stock_list;

                                  } else {
                                      die("Something happen !!!");
                                  }
                              ?>
                            
                               

                            
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
            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
	
	
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>


	</body>
</html>