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
    <title>CODEE App CleanerCompletedTasks2ndview</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="../assets/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
	<link rel="stylesheet" href="assets/css/stylus2.css">
</head>
<script>
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
	                    <a href="taskcleanercompletedview.php" class='sidebar-link'>
	                       <img src="assets/images/taskimage.png" class="taskicon"> 
	                        <span class="taskinfo">TASK</span>
	                    </a>
	                    
	                    <ul class="submenu">
	                        <li>
	                            <a href="taskcleanerview.php" class="ong" style="text-decoration:none;color: #A6A6A6;">Ongoing Tasks
	                            </a>
	                        </li>
	                        <li>
	                            <a href="taskcleanercompletedview.php" class="cmp" style="color: #FF6900;text-decoration:none;">Completed Tasks<img src="assets/images/arrowiconsidebar.png" style="position: relative;
    width: 9.63px;
    height: 11.95px;
    right: -10px;
    top: -1px;">
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
			<a href="taskcleanercompletedview.php"><img src="assets/images/listview2.png"class="list1"></a>
			<a href="taskcleanercompleted.php"><img src="assets/images/gridview2.png" class="grid1"></a>
		</div>
		<?php
                    include("database.php");
                    $q="select * from cleanercompletedtasks where cleanername='$cleanername'";
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
						<br>
                        <div class="form-group">
                            <div class="line"></div>
                            <img src="assets/images/cleanercalendar.png" style="margin-left:5.5%; margin-top:6.5%;"><lable class="description2">COMPLETED ON</lable>
                            <div class="date"><?php print_r(date('d M Y' , strtotime($row['Date_of_completion']))); ?></div>
                        </div>
                    <div class="form-group">
                            <div class="line"></div>
							
							<br>
							<?php if ($row['clock_in']){ ?>
							<img src="assets/images/clocksymbol.png" style="margin-left: 5%;position: relative;top: 11px;"><lable class="clockinput" style="position: absolute;left: 53px;top: 237px;font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;line-height: 25px;color: #262626;">CLOCK IN</lable><div class="apt" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 22px;
    color: #393939;
    position: relative;
    top: -9px;
    right: -162px;"><?php print_r($row['clock_in']); ?></div><?php } ?>
	<?php if (!($row['clock_in'])){ ?>
	<img src="assets/images/clocksymbol.png" style="margin-left: 5%;position: relative;top: 11px;"><lable class="clockinput" style="position: absolute;left: 53px;top: 237px;font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;line-height: 25px;color: #262626;">CLOCK IN</lable><div class="apt" style="font-family: Nunito Sans;
    font-style: italic;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    color: #A7A0A0;
    position: relative;
    top: -14px;
    right: -162px;">Not Updated</div>
                            <?php } ?>
							<?php if ($row['clock_out']){ ?>
                            <br><lable class="clockoutput" style="position: absolute;left: 53px;top: 294px;font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;line-height: 25px;color: #262626;">CLOCK OUT</lable><div class="apt" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 22px;
    color: #393939;
    position: relative;
    top: 6px;
    right: -162px;"><?php print_r($row['clock_out']); ?></div><?php } ?>
	<?php if (!($row['clock_out'])){ ?>
							<lable class="clockoutput" style="position: absolute;left: 53px;top: 294px;font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;line-height: 25px;color: #262626;">CLOCK OUT</lable><div class="apt" style="font-family: Nunito Sans;
    font-style: italic;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    color: #A7A0A0;
    position: relative;
    top: 19px;
    right: -162px;">Not Updated</div>
							<?php } ?>
                        </div>
						</div>
					<img src="assets/images/messageicon.png" data-id="<?php echo $row['ID']; ?>" data-toggle="modal" data-target="#chatmodal" style="position: relative;top: -365px;right: -362px;height: 50px;">
					<a href="#" class="completed2" style="text-decoration:none;"><img src="assets/images/clockicon.png" data-id="<?php echo $row['ID']; ?>" style="position: relative;top: -303px;right: -309px;height: 50px;" data-toggle="modal" data-target="#myModal5"></a>
					<br>
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
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/codee_clean_cleanerclient/chatpopuppagecleaner4.php', //Here you will fetch records
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
          <input type="button" id="tasksbutton2" class="btn btn-default" data-dismiss="modal" value="CANCEL" onclick="window.location.href='taskcleanercompletedview.php'">
		  <input type="button" id="tasksbutton3" class="btn btn-default" data-dismiss="modal" value="LOG OUT" onclick="window.location.href='logoutcleaner.php'">
        </div>
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
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/codee_clean_cleanerclient/clockcleaner4.php', //Here you will fetch records
            data :  'idclock1='+ idclock1, //Pass $id
            success : function(data){
            $('.fetched-dataclock').html(data);//Show fetched data from database
            }
        });
  });
}
</script>
  </div>
        <!-- Header Nav End -->
        <!-- MODAL -->
        <!-- Modal -->
   <!-- Modal -->
    <!-- Content End -->
</body>
</html>