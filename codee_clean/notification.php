<?php 
    include('database.php');
    session_start();
    if(!empty($_SESSION['user_name']) && $_SESSION['login_as_type'] == 'admin')
    {
        $mail=$_SESSION['user_name'];
		$adminname=$_SESSION['admin_name'];
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
    <title>CODEE AdminNotificationsPage</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
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
        <div class="col-md-12">
            <!-- Sidebar Start -->
    		<div class="wrapper col-md-2">
    			<div class="sidebar col-md-2" id="sideways">
    		        <ul class="menu">
    		            <li class="sidebar-item  active">
    	                    <a href="task.php" class='sidebar-link'>
    	                        <img src="assets/images/clipboard.png" style="margin-left:30px; margin-top:-6px;"> 
    	                        <a href="task.php" class="taskinfo" style="color:black;text-decoration:none;">TASK</a>
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
                                    <a href="completed_task.php" class="completed_task" style="text-decoration:none;">Completed Tasks
                                    </a>
                                </li>
    	                    </ul>
    	                </li>
    		            <li><img src="assets/images/highnotification 1.png" style="margin-left:25px; margin-top:-6px;position: relative;
    top: 10px;"><a href="notification.php" class="not"  style="color:#FF6900;text-decoration:none;">NOTIFICATION</a></li>
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
        			<h2 id="hello">RECENT NOTIFICATION<img src="assets/images/notificationline.png" style="position: relative;
    width: 116px;
    height: 1.6px;
    top: -20px;
    right: -2px;"></h2>
        		</div>
                <!-- Header Nav End -->

                <!-- CONTENT -->
                
                <!-- CONTENT END -->
                <?php
                    include("database.php");
                    $q="select * from admin_task";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php
				if($row['cleaner'] && $row['task_viewed_status']=='0')
				{
				?> 
				          <form action="action.php" method="POST" enctype="multipart/form-data">
                        <div class="info_table_wrapper" style="margin-bottom:20px;">
                            <div class="request_card_container" style="position: relative;width: 1137px;height: 217px;top: 46px;right: -33px;background: #FFFFFF;border: 1px solid #FF6900;box-sizing: border-box;border-radius: 10px;">
								<br><div class="card_class" style="margin-top:-6px">							
								<div class="abc" style="position: absolute;width: 509px;height: 35px;left: 25px;top: 18px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 19px;line-height: 27px;color: #FF6900;"><?php echo($row['Name_of_task']); ?> - <?php print_r($adminname); ?> has added a new task</div>
								<div class="mnd" style="position: absolute;width: 206px;height: 21px;left: 935px;align: right;top: 21px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #979797;"><?php echo($row['created_at']); ?></div>
                                <div class="line99" style="position: relative;top: 46px;width: 1135px;height: 0px;border: 1px solid #D7D7D7;"></div>
								<div class="ticket_stats_row" style="display: flex;align-items: flex-start;flex-direction: row;background: #FFFFFF;border-radius: 5.56892px;display: flex;justify-content: space-between;align-items: flex-start;padding: 27.8446px;/* min-width: 825.59px; */min-height: 102.33px;">
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;"   >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 21px;text-align:left;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">LOCATION</h6>
								<h6 class="bdata" style="position: relative;top: 77px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><?php echo($row['site_address']); ?></h6>
                            </div>
                        </div>
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;
    width: 258px;
    height: 17px;
    left: 384px;
    top: 86px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: bold;
    font-size: 15px;
    line-height: 25px;
    color: #262626;">SCHEDULED TO BE COMPLETED ON</h6>
                            <h6 class="bdata" style="position: relative;
    left: -232px;
    top: 76.3px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 25px;
    color: #393939;"><?php print_r(date('d M Y' , strtotime($row['Date_of_completion']))); ?></h6>
							</div>
                        </div>
						<input type="hidden" name="ID90" value="<?php echo($row['ID']); ?>">
						<input type="hidden" name="statuschange1" value="colourchange1">
						<div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                           <input type="submit" style="position: relative;width: 97px;height: 36px;left: -38px;top: 92px;background: #303030;border-radius: 4px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 20px;line-height: 27px;color: #FFFFFF;" value="View">
                            </div>
                        </div>
								</div>
                            </div>
                        </div>
             </div>
			 </form>
                      <?php 
				}
				?>
				<?php 
				}
				?>
				<?php
                    include("database.php");
                    $q="select * from admin_task";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php
				if($row['cleaner'] && $row['task_viewed_status']=='1')
				{
				?> 
				          
                        <div class="info_table_wrapper" style="margin-bottom:20px;">
                            <div class="request_card_container" style="position: relative;width: 1137px;height: 217px;top: 46px;right: -33px;background: #FFFFFF;border: 1px solid #FFFFFF;box-sizing: border-box;border-radius: 10px;">
								<br><div class="card_class" style="margin-top:-6px">							
								<div class="abc" style="position: absolute;width: 509px;height: 35px;left: 25px;top: 18px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 19px;line-height: 27px;color: #FF6900;"><?php echo($row['Name_of_task']); ?> - <?php print_r($adminname); ?> has added a new task</div>
								<div class="mnd" style="position: absolute;width: 206px;height: 21px;left: 935px;align: right;top: 21px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #979797;"><?php echo($row['created_at']); ?></div>
                                <div class="line99" style="position: relative;top: 46px;width: 1135px;height: 0px;border: 1px solid #D7D7D7;"></div>
								<div class="ticket_stats_row" style="display: flex;align-items: flex-start;flex-direction: row;background: #FFFFFF;border-radius: 5.56892px;display: flex;justify-content: space-between;align-items: flex-start;padding: 27.8446px;/* min-width: 825.59px; */min-height: 102.33px;">
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;"   >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 21px;text-align:left;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">LOCATION</h6>
								<h6 class="bdata" style="position: relative;top: 77px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><?php echo($row['site_address']); ?></h6>
                            </div>
                        </div>
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;
    width: 258px;
    height: 17px;
    left: 384px;
    top: 86px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: bold;
    font-size: 15px;
    line-height: 25px;
    color: #262626;">SCHEDULED TO BE COMPLETED ON</h6>
                            <h6 class="bdata" style="position: relative;
    left: -232px;
    top: 76.3px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 25px;
    color: #393939;"><?php print_r(date('d M Y' , strtotime($row['Date_of_completion']))); ?></h6>
							</div>
                        </div>
						<div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                           <a href="task.php" style="text-decoration:none;"><input type="button" style="position: relative;width: 97px;height: 36px;left: -38px;top: 92px;background: #303030;border-radius: 4px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 20px;line-height: 27px;color: #FFFFFF;" value="View"></a>
                            </div>
                        </div>
								</div>
                            </div>
                        </div>
             </div>
                      <?php 
				}
				?>
                 <?php 
				}
				?>
				<?php
                    include("database.php");
                    $q="select * from clientformdata";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php
				if($row['cleaner'] && $row['task_viewed_status']=='0')
				{
				?>
				<form action="action.php" method="POST" enctype="multipart/form-data">
                       <div class="info_table_wrapper" style="margin-bottom:20px;">
                            <div class="request_card_container" style="position: relative;width: 1137px;height: 217px;top: 46px;right: -33px;background: #FFFFFF;border: 1px solid #FF6900;box-sizing: border-box;border-radius: 10px;">
                                <br><div class="card_class" style="margin-top:-6px">							
								<div class="abc" style="position: absolute;width: 509px;height: 35px;left: 25px;top: 18px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 19px;line-height: 27px;color: #FF6900;"><?php echo($row['taskname']); ?> - <?php echo($row['clientname']);  ?> has added a new task</div>
								<div class="mnd" style="position: absolute;width: 206px;height: 21px;left: 935px;align: right;top: 21px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #979797;"><?php echo($row['created_at']); ?></div>
                                <div class="line99" style="position: relative;top: 46px;width: 1135px;height: 0px;border: 1px solid #D7D7D7;"></div>
								<div class="ticket_stats_row" style="display: flex;align-items: flex-start;flex-direction: row;background: #FFFFFF;border-radius: 5.56892px;display: flex;justify-content: space-between;align-items: flex-start;padding: 27.8446px;/* min-width: 825.59px; */min-height: 102.33px;">
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;"   >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;text-align:left;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">LOCATION</h6>
								<h6 class="bdata" style="position: relative;top: 77px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><?php echo($row['site_address']); ?></h6>
                            </div>
                        </div>
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;
    width: 258px;
    height: 17px;
    left: 384px;
    top: 86px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: bold;
    font-size: 15px;
    line-height: 25px;
    color: #262626;">SCHEDULED TO BE COMPLETED ON</h6>
                            <h6 class="bdata" style="position: relative;
    left: -223px;
    top: 76.3px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 25px;
    color: #393939;"><?php print_r(date('d M Y' , strtotime($row['completion_scheduled_date']))); ?></h6>
							</div>
                        </div>
						<input type="hidden" name="ID90" value="<?php echo($row['ID']); ?>">
						<input type="hidden" name="statuschange2" value="colourchange2">
						<div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
     <input type="submit" style="position: relative;width: 97px;height: 36px;left: -38px;top: 92px;background: #303030;border-radius: 4px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 20px;line-height: 27px;color: #FFFFFF;" value="View">
                            </div>
                        </div>
						
								</div>
                            </div>
                        </div>
             </div>
			 </form>
             
                      <?php 
				}
				?>
				 <?php 
				}
				?>
				<?php
                    include("database.php");
                    $q="select * from clientformdata";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php
				if($row['cleaner'] && $row['task_viewed_status']=='1')
				{
				?>
                       <div class="info_table_wrapper" style="margin-bottom:20px;">
                            <div class="request_card_container" style="position: relative;width: 1137px;height: 217px;top: 46px;right: -33px;background: #FFFFFF;border: 1px solid #FFFFFF;box-sizing: border-box;border-radius: 10px;">
                                <br><div class="card_class" style="margin-top:-6px">							
								<div class="abc" style="position: absolute;width: 509px;height: 35px;left: 25px;top: 18px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 19px;line-height: 27px;color: #FF6900;"><?php echo($row['taskname']); ?> - <?php echo($row['clientname']);  ?> has added a new task</div>
								<div class="mnd" style="position: absolute;width: 206px;height: 21px;left: 935px;align: right;top: 21px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #979797;"><?php echo($row['created_at']); ?></div>
                                <div class="line99" style="position: relative;top: 46px;width: 1135px;height: 0px;border: 1px solid #D7D7D7;"></div>
								<div class="ticket_stats_row" style="display: flex;align-items: flex-start;flex-direction: row;background: #FFFFFF;border-radius: 5.56892px;display: flex;justify-content: space-between;align-items: flex-start;padding: 27.8446px;/* min-width: 825.59px; */min-height: 102.33px;">
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;"   >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;text-align:left;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">LOCATION</h6>
								<h6 class="bdata" style="position: relative;top: 77px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><?php echo($row['site_address']); ?></h6>
                            </div>
                        </div>
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;
    width: 258px;
    height: 17px;
    left: 384px;
    top: 86px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: bold;
    font-size: 15px;
    line-height: 25px;
    color: #262626;">SCHEDULED TO BE COMPLETED ON</h6>
                            <h6 class="bdata" style="position: relative;
    left: -223px;
    top: 76.3px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 25px;
    color: #393939;"><?php print_r(date('d M Y' , strtotime($row['completion_scheduled_date']))); ?></h6>
							</div>
                        </div>
						<div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
   <a href="client_task.php" style="text-decoration:none;"><input type="button" style="position: relative;width: 97px;height: 36px;left: -38px;top: 92px;background: #303030;border-radius: 4px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 20px;line-height: 27px;color: #FFFFFF;" value="View"></a>
                            </div>
                        </div>
						
								</div>
                            </div>
                        </div>
             </div>
             
                      <?php 
				}
				?>
				 <?php 
				}
				?>
				<?php
                    include("database.php");
                    $q="select * from cleanercompletedtasks";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php
				if($row['cleanername'] && $row['task_viewed_status']=='0')
				{
				?>  
				<form action="action.php" method="POST" enctype="multipart/form-data">
                        <div class="info_table_wrapper" style="margin-bottom:20px;">

                            <div class="request_card_container" style="position: relative;width: 1137px;height: 217px;top: 46px;right: -33px;background: #FFFFFF;border: 1px solid #FF6900;box-sizing: border-box;border-radius: 10px;">
                                <br><div class="card_class" style="margin-top:-6px">							
								<div class="abc" style="position: absolute;width: 509px;height: 35px;left: 25px;top: 18px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 19px;line-height: 27px;color: #FF6900;"><?php echo($row['Name_of_task']); ?> - Task Completed <img src="assets/images/righticon.png"></div>
								<div class="mnd" style="position: absolute;width: 206px;height: 21px;left: 935px;align: right;top: 21px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #979797;"><?php echo($row['created_at']); ?></div>
                                <div class="line99" style="position: relative;top: 46px;width: 1135px;height: 0px;border: 1px solid #D7D7D7;"></div>
								<div class="ticket_stats_row" style="display: flex;align-items: flex-start;flex-direction: row;background: #FFFFFF;border-radius: 5.56892px;display: flex;justify-content: space-between;align-items: flex-start;padding: 27.8446px;/* min-width: 825.59px; */min-height: 102.33px;">
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;"   >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: -87px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">ASSIGNED PERSON</h6>
								<h6 class="bdata" style="position: relative;left: -9px;top: 74px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><img src="assets/images/<?php echo($row['cleanerimage']); ?>" style="width: 28%;">&nbsp;&nbsp;&nbsp;&nbsp;<?php print_r($row['cleanername']); ?></h6>
                            </div>
                        </div>
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: 154px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">LOCATION</h6>
                            <h6 class="bdata" style="position: relative;left: -103px;top: 77px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><?php echo($row['site_address']); ?></h6>
							</div>
                        </div>
						<input type="hidden" name="ID90" value="<?php echo($row['ID']); ?>">
						<input type="hidden" name="statuschange3" value="colourchange3">
						<div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
      <input type="submit" style="position: relative;width: 97px;height: 36px;left: -38px;top: 92px;background: #303030;border-radius: 4px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 20px;line-height: 27px;color: #FFFFFF;" value="View">
                            </div>
                        </div>
								</div>
                            </div>
                        </div>
             </div>
			 </form>
             
                      <?php 
				}
				?>
                 <?php 
				}
				?>
				<?php
                    include("database.php");
                    $q="select * from cleanercompletedtasks";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php
				if($row['cleanername'] && $row['task_viewed_status']=='1')
				{
				?>  
				
                        <div class="info_table_wrapper" style="margin-bottom:20px;">

                            <div class="request_card_container" style="position: relative;width: 1137px;height: 217px;top: 46px;right: -33px;background: #FFFFFF;border: 1px solid #FFFFFF;box-sizing: border-box;border-radius: 10px;">
                                <br><div class="card_class" style="margin-top:-6px">							
								<div class="abc" style="position: absolute;width: 509px;height: 35px;left: 25px;top: 18px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 19px;line-height: 27px;color: #FF6900;"><?php echo($row['Name_of_task']); ?> - Task Completed <img src="assets/images/righticon.png"></div>
								<div class="mnd" style="position: absolute;width: 206px;height: 21px;left: 935px;align: right;top: 21px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #979797;"><?php echo($row['created_at']); ?></div>
                                <div class="line99" style="position: relative;top: 46px;width: 1135px;height: 0px;border: 1px solid #D7D7D7;"></div>
								<div class="ticket_stats_row" style="display: flex;align-items: flex-start;flex-direction: row;background: #FFFFFF;border-radius: 5.56892px;display: flex;justify-content: space-between;align-items: flex-start;padding: 27.8446px;/* min-width: 825.59px; */min-height: 102.33px;">
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;"   >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: -87px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">ASSIGNED PERSON</h6>
								<h6 class="bdata" style="position: relative;left: -9px;top: 74px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><img src="assets/images/<?php echo($row['cleanerimage']); ?>" style="width: 28%;">&nbsp;&nbsp;&nbsp;&nbsp;<?php print_r($row['cleanername']); ?></h6>
                            </div>
                        </div>
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: 154px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">LOCATION</h6>
                            <h6 class="bdata" style="position: relative;left: -103px;top: 77px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><?php echo($row['site_address']); ?></h6>
							</div>
                        </div>
						
						<div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
     <a href="completed_task.php" style="text-decoration:none;"> <input type="submit" style="position: relative;width: 97px;height: 36px;left: -38px;top: 92px;background: #303030;border-radius: 4px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 20px;line-height: 27px;color: #FFFFFF;" value="View"></a>
                            </div>
                        </div>
								</div>
                            </div>
                        </div>
             </div>
			 
             
                      <?php 
				}
				?>
                 <?php 
				}
				?>
				<?php
                    include("database.php");
                    $q="select * from admin_task";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php
				if(($row['cleaner']) && ($row['comments_added_date']) && ($row['task_viewed_status_comments']=='0'))
				{
				?>
				<form action="action.php" method="POST" enctype="multipart/form-data">
                         <div class="info_table_wrapper" style="margin-bottom:20px;">
                         
                            <div class="request_card_container" style="position: relative;width: 1137px;height: 217px;top: 46px;right: -33px;background: #FFFFFF;border: 1px solid #FF6900;box-sizing: border-box;border-radius: 10px;">
				   <br><div class="card_class" style="margin-top:-6px">							
								<div class="abc" style="position: absolute;width: 509px;height: 35px;left: 25px;top: 18px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 19px;line-height: 27px;color: #FF6900;"><?php echo($row['Name_of_task']); ?> - <?php print_r($adminname); ?> added a comment</div>
								<div class="mnd" style="position: absolute;width: 206px;height: 21px;left: 935px;align: right;top: 21px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #979797;"><?php echo($row['comments_added_date']); ?></div>
                                <div class="line99" style="position: relative;top: 46px;width: 1135px;height: 0px;border: 1px solid #D7D7D7;"></div>
								<div class="ticket_stats_row" style="display: flex;align-items: flex-start;flex-direction: row;background: #FFFFFF;border-radius: 5.56892px;display: flex;justify-content: space-between;align-items: flex-start;padding: 27.8446px;/* min-width: 825.59px; */min-height: 102.33px;">
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;"   >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: -87px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">ASSIGNED PERSON</h6>
								<h6 class="bdata" style="position: relative;left: -9px;top: 74px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><img src="assets/images/<?php echo($row['cleanerimage']); ?>" style="width: 28%;">&nbsp;&nbsp;&nbsp;&nbsp;<?php print_r($row['cleaner']); ?></h6>
                            </div>
                        </div>
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: 154px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">LOCATION</h6>
                            <h6 class="bdata" style="position: relative;left: -103px;top: 77px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><?php echo($row['site_address']); ?></h6>
							</div>
                        </div>
						<input type="hidden" name="ID90" value="<?php echo($row['ID']); ?>">
						<input type="hidden" name="statuschange4" value="colourchange4">
						<div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
          <input type="submit" style="position: relative;width: 97px;height: 36px;left: -38px;top: 92px;background: #303030;border-radius: 4px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 20px;line-height: 27px;color: #FFFFFF;" value="View">
                            </div>
                        </div>
								</div>
                            </div>
                        </div>
             </div>
			 </form>
                      <?php 
				}
				?>
                 <?php 
				}
				?>
				<?php
                    include("database.php");
                    $q="select * from admin_task";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php
				if(($row['cleaner']) && ($row['comments_added_date']) && ($row['task_viewed_status_comments']=='1'))
				{
				?>
				
                         <div class="info_table_wrapper" style="margin-bottom:20px;">
                         
                            <div class="request_card_container" style="position: relative;width: 1137px;height: 217px;top: 46px;right: -33px;background: #FFFFFF;border: 1px solid #FFFFFF;box-sizing: border-box;border-radius: 10px;">
				   <br><div class="card_class" style="margin-top:-6px">							
								<div class="abc" style="position: absolute;width: 509px;height: 35px;left: 25px;top: 18px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 19px;line-height: 27px;color: #FF6900;"><?php echo($row['Name_of_task']); ?> - <?php print_r($adminname); ?> added a comment</div>
								<div class="mnd" style="position: absolute;width: 206px;height: 21px;left: 935px;align: right;top: 21px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #979797;"><?php echo($row['comments_added_date']); ?></div>
                                <div class="line99" style="position: relative;top: 46px;width: 1135px;height: 0px;border: 1px solid #D7D7D7;"></div>
								<div class="ticket_stats_row" style="display: flex;align-items: flex-start;flex-direction: row;background: #FFFFFF;border-radius: 5.56892px;display: flex;justify-content: space-between;align-items: flex-start;padding: 27.8446px;/* min-width: 825.59px; */min-height: 102.33px;">
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;"   >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: -87px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">ASSIGNED PERSON</h6>
								<h6 class="bdata" style="position: relative;left: -9px;top: 74px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><img src="assets/images/<?php echo($row['cleanerimage']); ?>" style="width: 28%;">&nbsp;&nbsp;&nbsp;&nbsp;<?php print_r($row['cleaner']); ?></h6>
                            </div>
                        </div>
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: 154px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">LOCATION</h6>
                            <h6 class="bdata" style="position: relative;left: -103px;top: 77px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><?php echo($row['site_address']); ?></h6>
							</div>
                        </div>
						
						<div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
          <a href="task.php" style="text-decoration:none;"><input type="button" style="position: relative;width: 97px;height: 36px;left: -38px;top: 92px;background: #303030;border-radius: 4px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 20px;line-height: 27px;color: #FFFFFF;" value="View"></a>
                            </div>
                        </div>
								</div>
                            </div>
                        </div>
             </div>
                      <?php 
				}
				?>
                 <?php 
				}
				?>
				<?php
                    include("database.php");
                    $q="select * from clientformdata";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php
				if(($row['cleaner']) && ($row['comments_added_date']) && ($row['task_viewed_status_comments']=='0'))
				{
				?> 
				<form action="action.php" method="POST" enctype="multipart/form-data">
                         <div class="info_table_wrapper" style="margin-bottom:20px;">
                      
                            <div class="request_card_container" style="position: relative;width: 1137px;height: 217px;top: 46px;right: -33px;background: #FFFFFF;border: 1px solid #FF6900;box-sizing: border-box;border-radius: 10px;">
				
                            
                                <br><div class="card_class" style="margin-top:-6px">							
								<div class="abc" style="position: absolute;width: 509px;height: 35px;left: 25px;top: 18px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 19px;line-height: 27px;color: #FF6900;"><?php echo($row['taskname']); ?> - <?php echo($row['clientname']);  ?> added a comment</div>
								<div class="mnd" style="position: absolute;width: 206px;height: 21px;left: 935px;align: right;top: 21px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #979797;"><?php echo($row['comments_added_date']); ?></div>
                                <div class="line99" style="position: relative;top: 46px;width: 1135px;height: 0px;border: 1px solid #D7D7D7;"></div>
								<div class="ticket_stats_row" style="display: flex;align-items: flex-start;flex-direction: row;background: #FFFFFF;border-radius: 5.56892px;display: flex;justify-content: space-between;align-items: flex-start;padding: 27.8446px;/* min-width: 825.59px; */min-height: 102.33px;">
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;"   >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: -87px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">ASSIGNED PERSON</h6>
								<h6 class="bdata" style="position: relative;left: -9px;top: 74px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><img src="assets/images/<?php echo($row['cleanerimage']); ?>" style="width: 28%;">&nbsp;&nbsp;&nbsp;&nbsp;<?php print_r($row['cleaner']); ?></h6>
                            </div>
                        </div>
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: 154px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">LOCATION</h6>
                            <h6 class="bdata" style="position: relative;left: -112px;top: 77px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><?php echo($row['site_address']); ?></h6>
							</div>
                        </div>
						<input type="hidden" name="ID90" value="<?php echo($row['ID']); ?>">
						<input type="hidden" name="statuschange5" value="colourchange5">
						<div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
           <input type="submit" style="position: relative;width: 97px;height: 36px;left: -38px;top: 92px;background: #303030;border-radius: 4px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 20px;line-height: 27px;color: #FFFFFF;" value="View">
                            </div>
                        </div>
								</div>
                            </div>
                        </div>
             </div>
			 </form>
                      <?php 
				}
				?>
                 <?php 
				}
				?>
				<?php
                    include("database.php");
                    $q="select * from clientformdata";
                    $result=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($result))
                    { 
                ?>
				<?php
				if(($row['cleaner']) && ($row['comments_added_date']) && ($row['task_viewed_status_comments']=='1'))
				{
				?> 
				
                         <div class="info_table_wrapper" style="margin-bottom:20px;">
                      
                            <div class="request_card_container" style="position: relative;width: 1137px;height: 217px;top: 46px;right: -33px;background: #FFFFFF;border: 1px solid #FFFFFF;box-sizing: border-box;border-radius: 10px;">
				
                            
                                <br><div class="card_class" style="margin-top:-6px">							
								<div class="abc" style="position: absolute;width: 509px;height: 35px;left: 25px;top: 18px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 19px;line-height: 27px;color: #FF6900;"><?php echo($row['taskname']); ?> - <?php echo($row['clientname']);  ?> added a comment</div>
								<div class="mnd" style="position: absolute;width: 206px;height: 21px;left: 935px;align: right;top: 21px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #979797;"><?php echo($row['comments_added_date']); ?></div>
                                <div class="line99" style="position: relative;top: 46px;width: 1135px;height: 0px;border: 1px solid #D7D7D7;"></div>
								<div class="ticket_stats_row" style="display: flex;align-items: flex-start;flex-direction: row;background: #FFFFFF;border-radius: 5.56892px;display: flex;justify-content: space-between;align-items: flex-start;padding: 27.8446px;/* min-width: 825.59px; */min-height: 102.33px;">
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;"   >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: -87px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">ASSIGNED PERSON</h6>
								<h6 class="bdata" style="position: relative;left: -9px;top: 74px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><img src="assets/images/<?php echo($row['cleanerimage']); ?>" style="width: 28%;">&nbsp;&nbsp;&nbsp;&nbsp;<?php print_r($row['cleaner']); ?></h6>
                            </div>
                        </div>
                        <div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
                                <h6 class="stats_title" style="position: absolute;width: 258px;height: 17px;left: 154px;top: 86px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 15px;line-height: 25px;color: #262626;">LOCATION</h6>
                            <h6 class="bdata" style="position: relative;left: -112px;top: 77px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 12px;line-height: 25px;color: #393939;"><?php echo($row['site_address']); ?></h6>
							</div>
                        </div>
						
						<div class="stats_block" style="display: flex;flex-direction: row;  align-items: center;" >
                            <div class="stats_details" style="text-align:right">
           <a href="client_task.php" style="text-decoration:none;"><input type="button" style="position: relative;width: 97px;height: 36px;left: -38px;top: 92px;background: #303030;border-radius: 4px;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 20px;line-height: 27px;color: #FFFFFF;" value="View"></a>
                            </div>
                        </div>
								</div>
                            </div>
                        </div>
             </div>
                      <?php 
				}
				?>
                 <?php 
				}
				?>
            </div>
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
           <input type="button" id="tasksbutton2" class="btn btn-default" data-dismiss="modal" value="CANCEL" onclick="window.location.href='notification.php'">
		  <input type="button" id="tasksbutton3" class="btn btn-default" data-dismiss="modal" value="LOG OUT" onclick="window.location.href='logoutadmin.php'">
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>