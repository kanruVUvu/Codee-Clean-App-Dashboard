<?php 
    include('database.php');
    session_start();
    if(!empty($_SESSION['user_name']) && $_SESSION['login_as_type'] == 'client')
    {
        $mail=$_SESSION['user_name'];
		$cname=$_SESSION['client_name'];
        $q="select * from clientlisttable where client_username='$mail'";
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
    <title>CODEE App ClientCompletedTasks2ndview</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="../assets/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
	<link rel="stylesheet" href="assets/css/stylus.css">
	<style>
	#birthday:not(:placeholder-shown) { background-image: none;}
input#birthday{
 background-image: url(assets/images/modalcalendar.png);
 background-repeat: no-repeat;
 background-position: 534px 20px;
}

input#birthday:focus{
 background-image:none;
}
</style>
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
	                    <a href="completedtaskview2.php" class='sidebar-link'>
	                        <img src="assets/images/taskimage.png" class="taskicon"> 
	                        <span class="taskinfo">TASK</span>
	                    </a>
	                    
	                    <ul class="submenu">
	                        <li>
	                            <a href="task2ndview.php" class="ong" style="text-decoration:none;color: #A6A6A6;">Ongoing Tasks
	                            </a>
	                        </li>
	                        <li>
	                            <a href="completedtaskview2.php" class="cmp" style="color: #FF6900;text-decoration:none;">Completed Tasks<img src="assets/images/arrowiconsidebar.png" style="position: relative;
    width: 9.63px;
    height: 11.95px;
    right: -10px;
    top: -1px;">
	                            </a>
	                        </li>
	                    </ul>
	                </li>
		             <li><img src="assets/images/notification 1.png" class="notificationicon"><a href="notification.php" class="not" style="text-decoration:none;color: #000000;">NOTIFICATION</a></li>
		            <li><img src="assets/images/document.png" class="documenticon"><a href="documents.php" class="dot"style="text-decoration:none;color: #000000;">DOCUMENTS</a></li>
		        </ul> 
		    </div>
		</div>
        <!-- Sidebar end-->
        <!-- Header Nav -->
		<div class="header col-md-10" id="taskmania">
         <div class="header" style="height:106px;"> 		
			<h2 id="hello" style="padding-bottom: 31px;
        border-bottom: 2px solid #FF6900;width: 88.26px;
height: 1.6px;">TASKS</h2>
			<a href="completedtaskview2.php"><img src="assets/images/listview2.png"class="list1"></a>
			<a href="completedtask.php"><img src="assets/images/gridview2.png" class="grid1"></a>
            <button class="add_t" data-toggle="modal" data-target="#myModal">+&nbsp&nbsp&nbspADD TASKS</button>
			</div>
			<?php
                    include("database.php");
                    $q="select * from cleanercompletedtasks where clientname='$cname'";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
                <div class="col">
                    <div class="rectangle1" style="left:15px;">
                        <div class="form-group">
                            <lable class="task"><?php print_r($row['Name_of_task']); ?></lable>
                        </div>
                        <div class="form-group">
                            <img src="assets/images/locationpin.png" style="margin-left: 5%; margin-top:19%;position: relative;top: 0px;"><lable class="site_address"><?php print_r($row['site_address']); ?></lable>
                        </div>
                        <div class="form-group">
                            <div class="line"></div>
                            <img src="assets/images/cleanercalendar.png" style="margin-left:5.5%; margin-top:6.5%;"><lable class="description333">COMPLETED ON</lable>
							<br/>
                           <lable class="description444"><?php print_r(date('d M Y' , strtotime($row['Date_of_completion']))); ?></lable>
                        </div>
						<div class="form-group">
                            <div class="line"></div>
                            <br><img src="assets/images/engineer 3.png" style="margin-left: 5%;position: relative;bottom: -31px;"><lable class="description555">ASSIGNED PERSON</lable>
                            <div class="apt25" data-toggle="modal" data-target="#myModal6" data-id="<?php echo $row['ID']; ?>"><img src="assets/images/<?php echo($row['cleanerimage']); ?>" style="height: 35px;padding:4px;">&nbsp;<?php print_r($row['cleanername']); ?></div>
                        </div>
                    </div>
					<img src="assets/images/messageicon.png" data-id="<?php echo $row['ID']; ?>" data-toggle="modal" data-target="#chatmodal" style="position: relative;top: -363px;right: -362px;height: 50px;">
					<br>
                </div>
                <?php
                    }
                ?>
		</div>
	</div>
	</div>
        <!-- Header Nav End -->
        <!-- MODAL -->
        <!-- Modal -->
   <!-- Modal -->
  <div class="modal fade" id="chatmodal" role="dialog">
    <div class="modal-dialog" style="margin-top: initial;
    height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">
    
      <!-- Modal content-->
	  
      <div class="modal-content" style="width: 808px;
    height: auto;">
        
        <div class="fetched-datachat"></div>
      </div>
      
    </div>
  </div>
 <script>
whatchat();
        function whatchat(){
  $('#chatmodal').on('show.bs.modal', function(e) {
    var id2 = $(e.relatedTarget).data('id');
    $.ajax({
            type : 'post',
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/codee_clean_cleanerclient/chatpopuppageclient4.php', //Here you will fetch records
            data :  'id2='+ id2, //Pass $id
            success : function(data){
            $('.fetched-datachat').html(data);//Show fetched data from database
            }
        });
  });
}
</script>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="margin-top: initial;
    height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">
    
      <!-- Modal content-->
	   <form action="insert.php" method="POST" enctype="multipart/form-data">
      <div class="modal-content" style="width: 986px;
    height: 350px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="position: absolute;
    right: -37.5px;
    top: -26.5px;
    padding: 6px 9px;
    background: white;
    opacity: 1;
    border-radius: 20px;
    width: 41.49px;
    height: 41.49px;"><center><img src="assets/images/closeiconmodal.png" style="position: relative;
    top: -2px;"></center></button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
		<div class="form-group">
  <input type="text" id="tname" name="tname2" placeholder="Name of Task" required>
  </div>
  <div class="form-group">
  <input placeholder="Scheduled to be completed on" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="birthday" name="birthday2" required>
  </div>
  <div class="form-group">
  <input type="text" id="saddress" name="saddress2" placeholder="Site Address" required>
  </div>
  </div>
  <input type="hidden" name="task14" value="add103">
  <input type="hidden" name="cname" value="<?php echo $cname; ?>">
      <center>
		<div class="form-group">
		   <input type="submit" id="tasksbutton" class="btn btn-info" value="ADD TASKS">
		  </div>
		  </center>
      </div>
      
    </div>
	</form>
  </div>
   <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog cleanerinfo" style="margin-top: initial; 
    height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">
    
      <!-- Modal content-->
	  
      <div class="modal-content" style="width:431px;height:243px;">
        
        <div class="fetched-data"></div>
      </div>
      
    </div>
  </div>
  <script>
what();
        function what(){
  $('#myModal6').on('show.bs.modal', function(e) {
    var id1 = $(e.relatedTarget).data('id');
    $.ajax({
            type : 'post',
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/codee_clean_cleanerclient/popuppagecompletedclient.php', //Here you will fetch records
            data :  'id1='+ id1, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
  });
}
</script>  
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog clientlogout" style="margin-top: initial;
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
         <input type="button" id="tasksbutton2" class="btn btn-default" data-dismiss="modal" value="CANCEL" onclick="window.location.href='completedtaskview2.php'">
		  <input type="button" id="tasksbutton3" class="btn btn-default" data-dismiss="modal" value="LOG OUT" onclick="window.location.href='logoutclient.php'">
        </div>
      </div>
      
    </div>
  </div>
    <!-- Content End -->
</body>
</html>