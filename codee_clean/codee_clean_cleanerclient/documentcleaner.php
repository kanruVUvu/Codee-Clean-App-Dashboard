<?php 
    include('database.php');
    session_start();
    if(!empty($_SESSION['user_name']) && $_SESSION['login_as_type'] == 'cleaner')
    {
        $mail=$_SESSION['user_name'];
		$cname=$_SESSION['cleaner_name'];
        $q="select * from cleanerlisttable where cleaner_username='$mail'";
        $rs=mysqli_query($con,$q);
        $row=mysqli_fetch_assoc($rs);
    }
    else
    {
      header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CODEE App CleanerDocuments</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="../assets/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
	<link rel="stylesheet" href="assets/css/stylus2.css">
</head>
<body class="best" style="width:1540px;margin:auto;">
	<div class="row">
      <!-- Navbar start -->
		<div class="col-12 col-md-12" style="height:60px;">
			<nav class="navbar">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <img src="assets/images/logo.png" id="arrange">
			    </div>
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="" style="color: white;text-decoration:none;background-color:transparent" class="pain" data-toggle="modal" data-target="#myModal2">Log out</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
		
        <!-- Navbar End -->

        <!-- Sidebar Start -->
		<div class="col-md-12">
		<div class="wrapper col-md-2">
			<div class="sidebar col-md-2" id="sideways">
		        <ul class="menu">
		            <li class="sidebar-item  active">
	                    <a href="taskcleaner.php" class='sidebar-link'>
	                       <img src="../assets/images/clipboard.png" class="taskicon"> 
	                        <a href="taskcleaner.php" class="taskinfo" style="color:#010101;text-decoration:none;">TASK</a>
	                    </a>
	                    
	                     <ul class="submenu">
	                        <li>
	                            <a href="taskcleaner.php" class="ong" style="text-decoration:none;color: #A6A6A6;">Ongoing Tasks 
	                            </a>
	                        </li>
	                        <li>
	                            <a href="taskcleanercompleted.php" class="cmp" style="text-decoration:none;color: #A6A6A6;">Completed Tasks
	                            </a>
	                        </li>
	                    </ul>
	                </li>
		            <li><img src="assets/images/notification 1.png" class="notificationicon"><a href="notificationcleaner.php" class="not" style="text-decoration:none;color:#000000">NOTIFICATION</a></li>
		            <li><img src="assets/images/docuhighlighted.png" class="documenticon"><a href="documentcleaner.php" class="dot" style="color: #FF6900;text-decoration:none;">DOCUMENTS<img src="assets/images/arrowiconsidebar.png" style="position: relative;
    width: 9.63px;
    height: 11.95px;
    right: -10px;
    top: -1px;"></a></li>
		        </ul> 
		    </div>
		</div>
        <!-- Sidebar end-->
        <!-- Header Nav -->
		<div class="col-md-10" id="taskmania">
        		<div class="header" style="height:106px;"> 
        			<h2 id="hello">DOCUMENTS<img src="assets/images/documentsline.png" style="position: relative;
    width: 82px;
    height: 1.6px;
    top: 15px;
    right: 124px;"></h2>
        		</div>
                <!-- Header Nav End -->

                <!-- CONTENT -->
                
                <!-- CONTENT END -->
				<?php
                    include("database.php");
                    $q="select * from cleanerlisttable where cleaner_name='$cname'";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<div class="col" style="width:51%;">
				<div class="rectdocumentarea" style="position: absolute;
    width: 276px;
    height: 43px;
    left: 56px;
    top: 152px;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgb(147 141 141 / 20%);
    border-radius: 10px;">
				<?php if ($row['cleaner_documentname']){ ?>
				<div style="position: relative;
    top: 12px;
    right: -16px;">
				<img src="assets/images/newfileimage.png" style="position:static;left:-8px"><a target="_blank" href="../documents/<?php echo $row['cleaner_documentname']; ?>" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 19px;
    color: #000000;text-decoration:none;"><?php echo $row['cleaner_documentname']; ?>
	             </div>
				 <img src="assets/images/eyesymbol.png" style="position: relative;
    right: -290px;
    top: -18px;
    width: 40px;
    height: 40px;"></a>
				<?php } ?>
				<?php if (!($row['cleaner_documentname'])) { ?>
				<div></div>
				<?php } ?>
				</div>
				</div>
					<?php } ?>
				</div>
				</div>
				</div>
	<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog cleanerlogout" style="margin-top: initial;
    height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">
    
      <!-- Modal content-->
      <div class="modal-content logout" style="width: 383px;
    height: 224px;">
        <div class="modal-header">
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
       <p class="texty">Amet minim mollit non deserunt ullamco<br/> est sit aliqua dolor do amet sint. </p>
	   <br/>
	   <br/>
        </div>
        <div class="modal-footer">
        <input type="button" id="tasksbutton2" class="btn btn-default" data-dismiss="modal" value="CANCEL" onclick="window.location.href='documentcleaner.php'">
		  <input type="button" id="tasksbutton3" class="btn btn-default" data-dismiss="modal" value="LOG OUT" onclick="window.location.href='logoutcleaner.php'">
        </div>
      </div>
      
    </div>
  </div>
        <!-- Header Nav End -->
        <!-- MODAL -->
        <!-- Modal -->
   <!-- Modal -->
    <!-- Content End -->
</body>
</html>