<?php 
    include('database.php');
    session_start();
    if(!empty($_SESSION['user_name']) && $_SESSION['login_as_type'] == 'admin')
    {
        $mail=$_SESSION['user_name'];
        $q="select * from login_adminclientcleaner where username='$mail'";
        $rs=mysqli_query($con,$q);
        $row=mysqli_fetch_assoc($rs);
    }
    else
    {
       header("location:../codee_clean/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CODEE AdminCompletedTasks</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
	<style>
	#calendardetailsdecode4:not(:placeholder-shown) { background-image: none;}
	input#calendardetailsdecode4{
 background-image: url(assets/images/modalcalendar.png);
 background-repeat: no-repeat;
 background-position: 534px 20px;
}

input#calendardetailsdecode4:focus{
 background-image:none;
}
	.bb
	{
	margin: 0 0 10px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 27px;
    color: #393939;
    position: relative;
    top: -29px;
    left: 61px;
	}
	.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
    flex-direction: column;
    align-items: flex-start;
    padding: 15.3788px;
    position: absolute;
    width: 292px;
    height: auto;
    left: 93px;
    top: 13.11px;
    background: #FFFFFF;
    border-radius: 6.15153px;
    background: #F1F1F1;
    border: 1px solid #9E9C9C;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px rgb(130 130 130 / 25%);
}

.dropdown:hover .dropdown-content {
  display: block;
}
.bb:hover
{
font-family: Nunito Sans;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 27px;
}
</style>
</head>
<script>
  $(document).on("click", ".completed", function () {
     var Id = $(this).attr('data-id');
     $("#id").val( Id );
   })
   $(document).on("click", ".completed2", function () {
     var Id2 = $(this).attr('data-id');
	 console.log(Id2);
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
        <div class="col-md-12">
            <!-- Sidebar Start -->
    		<div class="wrapper col-md-2">
    			<div class="sidebar col-md-2" id="sideways">
    		        <ul class="menu">
    		            <li class="sidebar-item  active">
    	                    <a href="completed_task.php" class='sidebar-link'>
    	                        <img src="assets/images/clipboard 2.png" style="margin-left:30px; margin-top:-6px;"> 
    	                        <a href="completed_task.php" class="taskinfo" style="color:#FF6900;text-decoration:none;">TASK</a>
    	                    </a>
    	                    
    	                    <ul class="submenu">
    	                        <li>
    	                            <a href="task.php" class="ong" style="text-decoration:none;">Added by Admin
    	                            </a>
    	                        </li>
    	                        <li>
    	                            <a href="client_task.php" class="cmp" style="text-decoration:none;">Added by Client
    	                            </a>
    	                        </li>
                                <li>
                                    <a href="completed_task.php" class="completed_task" style="color:#FF6900;text-decoration:none;">Completed Tasks<img src="assets/images/arrowiconsidebar.png" style="position: relative;
    width: 9.63px;
    height: 11.95px;
    right: -10px;
    top: -1px;">
                                    </a>
                                </li>
    	                    </ul>
    	                </li>
    		            <li><img src="assets/images/notification 1.png" style="margin-left:25px; margin-top:-6px;position: relative;
    top: 10px;"><a href="notification.php" class="not" style="color:black;text-decoration:none;">NOTIFICATION</a></li>
    		            <li><img src="assets/images/man 1.png" style="margin-left:25px; margin-top:-6px;position: relative;
    top: 13px;"><a href="client_list.php" class="dot" style="color:black;text-decoration:none;">CLIENTS LIST</a></li>
                        <li><img src="assets/images/engineer 3.png" style="margin-left:23px; margin-top:-6px;position: relative;
    top: 13px;"><a href="cleaner_list.php" class="cleaner_list" style="color:black;text-decoration:none;">CLEANERS LIST</a></li>
    		        </ul> 
    		    </div>
    		</div>
            <!-- Sidebar end-->          
        
            <!-- Header Nav -->
            <div class="col-md-10" id="taskmania">
        		<div class="header" style="height:106px;"> 
        			<h2 id="hello" style="padding-bottom: 31px;
        border-bottom: 2px solid #FF6900;width: 88.26px;
height: 1.6px;">TASKS</h2>
					<a href="completedtask2ndview.php"><img src="assets/images/List View.png" class="list1"></a>
			<a href="completed_task.php"><img src="assets/images/Grid View.png" class="grid1"></a>
                     <button class="add_t" data-toggle="modal" data-target="#Modal" style="color:#FFFFFF;">+&nbsp&nbsp&nbspADD TASKS</button>
        		</div>
                <!-- Header Nav End -->

                <!-- CONTENT -->
                
                <!-- CONTENT END -->
                <?php
                    include("database.php");
                    $q="select * from cleanercompletedtasks";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php 
				if(!($row['clientname']))
				{
				?>
                <div class="col-md-3">
                    <div class="rectangle1">
                        <div class="form-group">
                            <lable class="task"><?php print_r($row['Name_of_task']); ?></lable>
                        </div>
                        <div class="form-group">
                            <img src="assets/images/location.png" style="margin-left: 5%; margin-top:19%;position: relative;top: 0px;"><lable class="site_addressadmin"><?php print_r($row['site_address']); ?></lable>
                        </div>
						<br>
                        <div class="form-group">
                            <div class="line"></div>
                            <img src="assets/images/calendar.png" style="margin-left:5%; margin-top:6%;"><lable class="description1">COMPLETED ON</lable>
                            <div class="date"><?php print_r(date('d M Y' , strtotime($row['Date_of_completion']))); ?></div>
                        </div>
						<div class="form-group">
                            <div class="line"></div>
                            <br><img src="assets/images/engineer 3.png" style="margin-left:5%;"><lable class="cleaner">ASSIGNED PERSON</lable>
                            <div class="apt" data-toggle="modal" data-target="#myModal6" data-id="<?php echo $row['ID']; ?>"><img src="assets/images/<?php echo($row['cleanerimage']); ?>" style="width: 28%;">&nbsp;<?php print_r($row['cleanername']); ?></div>
                        </div>
                     <div class="form-group">
                            <div class="line"></div>
							<a href="#" class="completed2" style="text-decoration:none;"><img src="assets/images/edit.png" data-id="<?php echo $row['ID']; ?>" style="position: relative;width: 19px;height: 19px;left: 256px;top: 2px;" data-toggle="modal" data-target="#myModal5"><p class="changeb" data-id="<?php echo $row['ID']; ?>" data-toggle="modal" data-target="#myModal5">Edit</p>
							<br>
							<?php if ($row['clock_in']){ ?>
							<img src="assets/images/clocksymbol.png" style="margin-left: 5%;position: relative;top: -30px;"><lable class="clockinput">CLOCK IN</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 22px;
    color: #393939;
    position: relative;
    top: -49px;
    right: -171px;"><?php print_r($row['clock_in']); ?></div>
                            <?php } ?>
							<?php if (!($row['clock_in'])){ ?>
							<img src="assets/images/clocksymbol.png" style="margin-left: 5%;position: relative;top: -30px;"><lable class="clockinput">CLOCK IN</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: italic;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    color: #A7A0A0;
    position: relative;
    top: -53px;
    right: -168px;">Not Updated</div>
                            <?php } ?>
							<br>
							<?php if ($row['clock_out']){ ?>
							<lable class="clockoutput">CLOCK OUT</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 22px;
    color: #393939;
    position: relative;
    top: -56px;
    right: -171px;"><?php print_r($row['clock_out']); ?></div>
							<?php } ?>
							<?php if (!($row['clock_out'])){ ?>
							<lable class="clockoutput">CLOCK OUT</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: italic;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    color: #A7A0A0;
    position: relative;
    top: -60px;
    right: -168px;">Not Updated</div>
							<?php } ?>
                        </div>
                    </div>
					<img src="assets/images/messageicon.png" data-id="<?php echo $row['ID']; ?>" data-toggle="modal" data-target="#chatmodal" style="position: relative;top: -500px;right: -347px;height: 50px;">
                </div>
                <?php
                    }
                ?>
                <!-- CONTENT END -->
                
				<?php 
				if ($row['clientname']){
				?>
				<div class="col-md-3">
                    <div class="rectangle1">
                        <div class="form-group">
                            <lable class="task"><?php print_r($row['Name_of_task']); ?></lable>
                        </div>
                        <div class="form-group">
                            <img src="assets/images/location.png" style="margin-left: 5%; margin-top:19%;position: relative;top: 0px;"><lable class="site_addressadmin2"><?php print_r($row['site_address']); ?></lable>
                        </div>
						<br>
						<div class="form-group">
						<div class="line"></div>
                            <img src="assets/images/man 1.png" style="margin-left: 5%;margin-top: 6%;position: relative;top: 0px;"><lable class="descriptionadd">ADDED BY</lable>
							<div class="manj">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print_r($row['clientname']); ?></div>
                        </div>
                        <div class="form-group">
                            <div class="line"></div>
                            <img src="assets/images/calendar.png" style="margin-left:5%; margin-top:6%;"><lable class="cleaner29">COMPLETED ON</lable>
                            <div class="date"><?php print_r(date('d M Y' , strtotime($row['Date_of_completion']))); ?></div>
                        </div>
						<div class="form-group">
                            <div class="line"></div>
                            <br><img src="assets/images/engineer 3.png" style="margin-left:5%;"><lable class="cleaner">ASSIGNED PERSON</lable>
                            <div class="apt" data-toggle="modal" data-target="#myModal6" data-id="<?php echo $row['ID']; ?>"><img src="assets/images/<?php echo($row['cleanerimage']); ?>" style="width: 28%;">&nbsp;<?php print_r($row['cleanername']); ?></div>
                        </div>
                    <div class="form-group">
                            <div class="line"></div>
							<a href="#" class="completed2" style="text-decoration:none;"><img src="assets/images/edit.png" data-id="<?php echo $row['ID']; ?>" style="position: relative;width: 19px;height: 19px;left: 256px;top: 2px;" data-toggle="modal" data-target="#myModal5"><p class="changeb" data-id="<?php echo $row['ID']; ?>" data-toggle="modal" data-target="#myModal5">Edit</p>
							<br>
							<?php if ($row['clock_in']){ ?>
							<img src="assets/images/clocksymbol.png" style="margin-left: 5%;position: relative;top: -30px;"><lable class="clockinput">CLOCK IN</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 22px;
    color: #393939;
    position: relative;
    top: -49px;
    right: -171px;"><?php print_r($row['clock_in']); ?></div>
                            <?php } ?>
							<?php if (!($row['clock_in'])){ ?>
							<img src="assets/images/clocksymbol.png" style="margin-left: 5%;position: relative;top: -30px;"><lable class="clockinput">CLOCK IN</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: italic;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    color: #A7A0A0;
    position: relative;
    top: -53px;
    right: -168px;">Not Updated</div>
                            <?php } ?>
							<br>
							<?php if ($row['clock_out']){ ?>
							<lable class="clockoutput">CLOCK OUT</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 22px;
    color: #393939;
    position: relative;
    top: -56px;
    right: -171px;"><?php print_r($row['clock_out']); ?></div>
							<?php } ?>
							<?php if (!($row['clock_out'])){ ?>
							<lable class="clockoutput">CLOCK OUT</lable><div class="apt21" style="font-family: Nunito Sans;
    font-style: italic;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    color: #A7A0A0;
    position: relative;
    top: -60px;
    right: -168px;">Not Updated</div>
							<?php } ?>
                        </div>
                    </div>
					<img src="assets/images/messageicon.png" data-id="<?php echo $row['ID']; ?>" data-toggle="modal" data-target="#chatmodal" style="position: relative;top: -581px;right: -347px;height: 50px;">
                </div>
                <?php
                    }
                ?>
				 <?php
                    }
                ?>
				
                <!-- CONTENT END -->
                
            </div>
        </div>
    </div>
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
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/chatpopuppage5.php', //Here you will fetch records
            data :  'id2='+ id2, //Pass $id
            success : function(data){
            $('.fetched-datachat').html(data);//Show fetched data from database
            }
        });
  });
}
</script>
    <div id="Modal" class="modal fade" role="dialog">
      <div class="modal-dialog" style="margin-top: initial; 
    height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">

        <!-- Modal content-->
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="modal-content" style="width:986px;height:510px;">
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
                
              </div>
              <div class="modal-body21">
                <div class="form-group">
                    <input type="text" placeholder="Name Of The Task" name="task_name" class="input_text1" required>
                </div>
                <div class="form-group">
                    <input placeholder="Scheduled to be completed on" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="bday" name="date" id="calendardetailsdecode4" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Site address" name="site_address" class="input_text2" required>
                </div>
                <input type="hidden" name="task5" value="add5">
				<div class="form-group">
                    			<div class="dropdown" id="imageheader3">
  <img src="assets/images/addcleanerbutton.png" style="position: relative;right: -12px;">
  <br>
  <p style="position: relative;left: 0.19%;top: 7px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 18px;line-height: 25px;color: #AA9A9A;">Add Cleaner</p>
  <div class="dropdown-content">
  <?php
                            include("database.php");
                            $q="select * from cleanerlisttable";
                            $result=mysqli_query($con,$q);
                            while($row=mysqli_fetch_array($result))
                            { 
                        ?>
<a href="#" class="completed" data-id="<?php echo $row['ID']; ?>" style="text-decoration:none;"><img src="profileimages/<?php echo($row['cleaner_profilephoto']); ?>"><p class="bb"><?php echo($row['cleaner_name']); ?></p></a>

 <?php } ?>
  </div>
</div>
 <br>
 <br>
  </div>
  
                </div><br>
				 <input type="hidden" name="id" id="id" value=""/>
                <center>
               
                <div class="form-group">
                    <input type="submit" class="submit_button" value="ADD TASKS">    
                </div>
                </center>
              </div>
            </div>
        </form>
        <!-- Content end -->
      </div>
    </div>
		<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog adminlogout" style="margin-top: initial;
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
           <input type="button" id="tasksbutton2" class="btn btn-default" data-dismiss="modal" value="CANCEL" onclick="window.location.href='completed_task.php'">
		  <input type="button" id="tasksbutton3" class="btn btn-default" data-dismiss="modal" value="LOG OUT" onclick="window.location.href='logoutadmin.php'">
        </div>
      </div>
      
    </div>
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
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/popuppagecompleted.php', //Here you will fetch records
            data :  'id1='+ id1, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
  });
}
</script>
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
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/clockadmin5.php', //Here you will fetch records
            data :  'idclock1='+ idclock1, //Pass $id
            success : function(data){
            $('.fetched-dataclock').html(data);//Show fetched data from database
            }
        });
  });
}
</script>
        <!-- MODAL END -->
</body>
</html>