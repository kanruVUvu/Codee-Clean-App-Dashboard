<?php 
    include('database.php');
    session_start();
    if(!empty($_SESSION['user_name']) && $_SESSION['login_as_type'] == 'cleaner')
    {
        $mail=$_SESSION['user_name'];
		$cleanername=$_SESSION['cleaner_name'];
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
    <title>CODEE App CleanerTasks</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="../assets/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
	<link rel="stylesheet" href="assets/css/stylus2.css">
</head>
<script>
  $(document).on("click", ".completed", function () {
     var Id = $(this).attr('data-id');
     $("#id").val( Id );
   })
   $(document).on("click", ".completed2", function () {
     var Id2 = $(this).attr('data-id');
     $("#id2").val( Id2 );
   })
</script>
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
	                        <img src="assets/images/taskimage.png" class="taskicon"> 
	                        <span class="taskinfo">TASK</span>
	                    </a>
	                    
	                    <ul class="submenu">
	                        <li>
	                            <a href="taskcleaner.php" class="ong" style="color: #FF6900;text-decoration:none;">Ongoing Tasks<img src="assets/images/arrowiconsidebar.png" style="position: relative;
    width: 9.63px;
    height: 11.95px;
    right: -10px;
    top: -1px;">
	                            </a>
	                        </li>
	                        <li>
	                            <a href="taskcleanercompleted.php" class="cmp" style="text-decoration:none;color: #A6A6A6;">Completed Tasks
	                            </a>
	                        </li>
	                    </ul>
	                </li>
		            <li><img src="assets/images/notification 1.png" class="notificationicon"><a href="notificationcleaner.php" class="not" style="text-decoration:none;color: #000000;">NOTIFICATION</a></li>
		            <li><img src="assets/images/document.png" class="documenticon"><a href="documentcleaner.php" class="dot" style="text-decoration:none;color: #000000;">DOCUMENTS</a></li>
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
			<a href="taskcleanerview.php"><img src="assets/images/List View.png"class="list1"></a>
			<a href="taskcleaner.php"><img src="assets/images/Grid View.png" class="grid1"></a>
		</div>
				<?php
                    include("database.php");
                    $q="select * from adminclientclean_task where cleaner='$cleanername'";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
                <div class="col-md-3">
                    <div class="rectangle1">
                        <div class="form-group">
                            <lable class="task"><?php print_r($row['Name_of_task']); ?></lable>
                        </div>
                        <div class="form-group">
                            <img src="assets/images/locationpin.png" style="margin-left: 5%; margin-top:19%;position: relative;top: 0px;"><lable class="site_address"><?php print_r($row['site_address']); ?></lable>
                        </div>
						<br>
                        <div class="form-group">
                            <div class="line"></div>
                            <img src="assets/images/cleanercalendar.png" style="margin-left:5.5%; margin-top:6.5%;"><lable class="description2">SCHEDULED TO BE COMPLETED ON</lable>
                            <div class="date"><?php print_r(date('d M Y' , strtotime($row['Date_of_completion']))); ?></div>
                        </div>
					<div class="form-group">
                            <div class="line"></div>
							<br>
							<?php if ($row['clock_in']){ ?>
							<img src="assets/images/clocksymbol.png" style="margin-left: 5%;position: relative;top: 15px;"><lable class="clockinput" style="position: absolute;left: 53px;top: 242px;font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;line-height: 25px;color: #262626;">CLOCK IN</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 22px;
    color: #393939;
    position: relative;
    top: -5px;
    right: -171px;"><?php print_r($row['clock_in']); ?></div>
                            <?php } ?>
							<?php if (!($row['clock_in'])){ ?>
							<img src="assets/images/clocksymbol.png" style="margin-left: 5%;position: relative;top: 15px;"><lable class="clockinput" style="position: absolute;left: 53px;top: 242px;font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;line-height: 25px;color: #262626;">CLOCK IN</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: italic;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    color: #A7A0A0;
    position: relative;
    top: -9px;
    right: -168px;">Not Updated</div>
                            <?php } ?>
							<br>
							<?php if ($row['clock_out']){ ?>
							<lable class="clockoutput" style="position: absolute;left: 53px;top: 294px;font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;line-height: 25px;color: #262626;">CLOCK OUT</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 22px;
    color: #393939;
    position: relative;
    top: 6px;
    right: -171px;"><?php print_r($row['clock_out']); ?></div>
							<?php } ?>
							<?php if (!($row['clock_out'])){ ?>
							<lable class="clockoutput" style="position: absolute;left: 53px;top: 294px;font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;line-height: 25px;color: #262626;">CLOCK OUT</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: italic;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    color: #A7A0A0;
    position: relative;
    top: -1px;
    right: -168px;">Not Updated</div>
							<?php } ?>
                        </div>
                    </div>
					<img src="assets/images/messageicon.png" data-id="<?php echo $row['ID']; ?>" data-toggle="modal" data-target="#chatmodal" style="position: relative;top: -365px;right: -347px;height: 50px;">
					<a href="#" class="completed2" style="text-decoration:none;"><img src="assets/images/clockicon.png" data-id="<?php echo $row['ID']; ?>" style="position: relative;top: -303px;right: -294px;height: 50px;" data-toggle="modal" data-target="#myModal5"></a>
					<br>
					<img src="assets/images/completedicon.png" style="position: relative;top: -287px;right: -348px;height: 50px;" class="completed" data-toggle="modal" data-target="#myModal3" data-id="<?php echo $row['ID']; ?>">
				</div>
                <?php
                    }
                ?>
				</div>
	</div>
	</div>
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
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/codee_clean_cleanerclient/chatpopuppagecleaner1.php', //Here you will fetch records
            data :  'id2='+ id2, //Pass $id
            success : function(data){
            $('.fetched-datachat').html(data);//Show fetched data from database
            }
        });
  });
}
</script>
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
          <input type="button" id="tasksbutton2" class="btn btn-default" data-dismiss="modal" value="CANCEL" onclick="window.location.href='taskcleaner.php'">
		  <input type="button" id="tasksbutton3" class="btn btn-default" data-dismiss="modal" value="LOG OUT" onclick="window.location.href='logoutcleaner.php'">
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog taskcompletediconview" style="margin-top: initial;
    height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 383px;
    height: 273px;">
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
        <form action="insert.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body44">
       <p class="texty45" style="position: absolute;
    left: 6.86%;
    right: 9.31%;
    top: 4.77%;
    bottom: 36.24%;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 30px;
    color: #000000;
    text-align: center;">This is to confirm that the cleaning task assigned has been completed as per the management and  client's specification and a photo has been uploaded of the task completed. </p>
       <input type="hidden" name="id" id="id" value=""/>
       <input type="hidden" name="delete" id="delete" value="task"/>
       <br/>
	   <br/>
        </div>
        <div class="modal-footer" style="padding: 15px;text-align: right;border-top:0px;position: relative;height: 64px;">
          <input type="button" id="tasksbutton5" style="left: 21.56%;
    bottom: 95.38%;
    border: 1px solid #0CAE26;
    box-sizing: border-box;
    border-radius: 8px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 25px;
    color: #0CAE26;
    background: #FFFFFF;" class="btn btn-default" data-dismiss="modal" value="CANCEL" onclick="window.location.href='taskcleaner.php'">
		  <input type="submit" id="tasksbutton6" style="position: absolute;
    right: 14.16%;
    bottom: 95.38%;
    background: #0CAE26;
    border: 1px solid #0CAE26;
    box-sizing: border-box;
    border-radius: 8px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 25px;
    color: #FFFFFF;" class="btn btn-default view" value="COMPLETED">
        </div>
        </form>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog clocktimer" style="margin-top: initial; 
    height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 383px;
    height: 273px;">
        
        <div class="fetched-dataclock"></div>
      </div>
      
    </div>
  </div>
  <script>
whatclock();
        function whatclock(){
  $('#myModal5').on('show.bs.modal', function(e) {
    var idclock1 = $(e.relatedTarget).data('id');
    $.ajax({
            type : 'post',
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/codee_clean_cleanerclient/clockcleaner1.php', //Here you will fetch records
            data :  'idclock1='+ idclock1, //Pass $id
            success : function(data){
            $('.fetched-dataclock').html(data);//Show fetched data from database
            }
        });
  });
}
</script>
        <!-- Header Nav End -->
        <!-- MODAL -->
        <!-- Modal -->
   <!-- Modal -->
    <!-- Content End -->
</body>
</html>