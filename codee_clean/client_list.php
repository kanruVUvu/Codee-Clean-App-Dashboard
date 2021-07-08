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
    <title>CODEE Clients List</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
	<style>
	.myfiles{
  padding: 10px;
    display: table;
    position: relative;
    top: 50px;
    right: -45px;
    background: #24272A;
    border-radius: 30px;
    font-family: Nunito Sans;
    font-style: italic;
    font-weight: 300;
    font-size: 20px;
    line-height: 27px;
    color: #FFFFFF;
     }



input[type="file"] {
    display: none;
}
	table {
    border-collapse: collapse;
    width: 72%;
	height:auto;
    position: relative;
    right: -316px;
}
body
{
    counter-reset: Serial;           /* Set the Serial counter to 0 */
}

tr td:first-child:before
{
  counter-increment: Serial;      /* Increment the Serial counter */
  content:counter(Serial); /* Display the counter */
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
     $("#id2").val( Id2 );
   })
</script>
<script>
$(document).ready(function(){
    var maxField1 = 95000; //Input fields increment limitation
    var addButton1 = $('.add_button3'); //Add button selector
    var wrapper1 = $('.form-group2'); //Input field wrapper
    var fieldHTML1 = '<div style="position:relative"> <input type="text" placeholder="" name="site_address11[]" class="input_text11" style="width: 80%;top:20px;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;left: 44px;" required><a href="#" onclick="return false;" class="remove_button3"><img src="assets/images/wrongicon.png" style="position:relative;width:15px;height:15px;color:#5E5E5E;top:17px;right: -24px;"/></a></div><br/>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton1).click(function(){
        //Check maximum number of input fields
        if(x < maxField1){ 
            x++; //Increment field counter
            $(wrapper1).append(fieldHTML1); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper1).on('click', '.remove_button3', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
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
    	                    <a href="task.php" class='sidebar-link'>
    	                       <img src="assets/images/clipboard.png" style="margin-left:30px; margin-top:-6px;"> 
    	                        <a href="task.php" class="taskinfo" style="text-decoration:none;color:black;">TASK</a>
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
    		            <li><img src="assets/images/notification 1.png" style="margin-left:25px; margin-top:-6px;position: relative;
    top: 10px;"><a href="notification.php" class="not" style="color:black;text-decoration:none;">NOTIFICATION</a></li>
    		            <li><img src="assets/images/highclient.png" style="margin-left:25px;width:23px; margin-top:-6px;position: relative;
    top: 13px;"><a href="client_list.php" class="dot" style="color:#FF6900;text-decoration:none;">CLIENTS LIST<img src="assets/images/arrowiconsidebar.png" style="position: relative;
    width: 9.63px;
    height: 11.95px;
    right: -10px;
    top: -1px;"></a></li>
                        <li><img src="assets/images/engineer 3.png" style="margin-left:23px; margin-top:-6px;position: relative;
    top: 13px;"><a href="cleaner_list.php" class="cleaner_list" style="color:black;text-decoration:none;">CLEANERS LIST</a></li>
    		        </ul> 
    		    </div>
    		</div>
            <!-- Sidebar end-->          
        
            <!-- Header Nav -->
            <div class="col-md-10" id="taskmania">
        		<div class="header" style="height:106px;"> 
        			<h2 id="hello">CLIENTS LIST<img src="assets/images/notificationline.png" style="position: relative;
    width: 116px;
    height: 1.6px;
    top: -20px;
    right: -2px;"></h2>
                     <button class="add_t" data-toggle="modal" data-target="#Modal" style="color:#FFFFFF;">+&nbsp&nbsp&nbspADD CLIENT</button>
        		</div>
                <!-- Header Nav End -->

                <!-- CONTENT -->
                
                <!-- CONTENT END -->

            </div>
        </div>
    </div>
	<br>
	<br>
	<table>
  <tr class="headersection">
    <th class="idp" style="width: 56px;height: 50px;left: 312px;top: 203px;background: #E9E9E9;"></th>
    <th class="ndp" style="width: 307px;height: 50px;left: 368px;top: 203px;background: #FF6900;border: 0.5px solid #737373;box-sizing: border-box;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 16px;line-height: 22px;text-align: center;color: #FFFFFF;">NAME</th>
    <th class="sdp" style="width: 497px;height: 50px;left: 675px;top: 203px;background: #FF6900;border: 0.5px solid #737373;box-sizing: border-box;font-family: Nunito Sans;text-align: center;font-style: normal;font-weight: bold;font-size: 16px;line-height: 22px;color: #FFFFFF;">SITE</th>
	<th class="ddp" style="width: 258px;height: 50px;left: 910px;top: 203px;background: #FF6900;border: 0.5px solid #737373;box-sizing: border-box;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 16px;line-height: 22px;color: #FFFFFF;text-align: center;">DOCUMENTS</th>
    <th class="udp" style="width: 258px;height: 50px;left: 1168px;top: 203px;background: #FF6900;border: 0.5px solid #737373;box-sizing: border-box;text-align: center;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 16px;line-height: 22px;color: #FFFFFF;">USERNAME</th>
    <th class="pdp" style="width: 258px;height: 50px;left: 1426px;top: 203px;background: #FF6900;border: 0.5px solid #737373;box-sizing: border-box;text-align: center;font-family: Nunito Sans;font-style: normal;font-weight: bold;font-size: 16px;line-height: 22px;color: #FFFFFF;">PASSWORD</th>
	</tr>
  <?php                                        
                                    $q="select * from clientlisttable";
                                        $result=mysqli_query($con,$q);
                                        while($row=mysqli_fetch_array($result))
                                        { 
                                      ?>
  <tr class="textsection">
     <td class="ijp" style="width: 56px;height: 112px;left: 312px;top: 203px;background: #FFFFFF;text-align:left;border: 0.5px solid #C6C6C6;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #000000;padding:5px;"></td>
    <td class="njp" style="width: 307px;height: 112px;left: 368px;top: 203px;background: #FFFFFF;border: 0.5px solid #C6C6C6;box-sizing: border-box;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;text-align: left;color: #000000;padding:5px;"><?php echo $row['client_name']; ?></td>
    <td class="sjp" style="width: 497px;height: 112px;left: 675px;top: 203px;background: #FFFFFF;border: 0.5px solid #C6C6C6;box-sizing: border-box;font-family: Nunito Sans;text-align: left;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #000000;padding:5px;"><?php echo $row['site_address']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/images/morerequiredicon.png" style="position:static;width:fit-content;" data-id="<?php echo $row['ID']; ?>" data-toggle="modal" data-target="#modalsiteaddress"></td>
	<td class="djp" style="width: 258px;height: 112px;left: 910px;top: 203px;background: #FFFFFF;border: 0.5px solid #C6C6C6;box-sizing: border-box;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #FFFFFF;text-align: left;color: #000000;padding:5px;">
	<img src="assets/images/file.png" style="position:static;left:-8px"><a target="_blank" href="documents/<?php echo $row['client_documentname']; ?>" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 19px;
    text-decoration-line: underline;
    color: #000000;"><?php echo $row['client_documentname']; ?></a>
	</td>
    <td class="ujp" style="width: 258px;height: 112px;left: 1168px;top: 203px;background: #FFFFFF;border: 0.5px solid #C6C6C6;box-sizing: border-box;text-align: left;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #000000;padding:5px;"><?php echo $row['client_username']; ?></td>
    <td class="pjp" style="width: 258px;height: 112px;left: 1426px;top: 203px;background: #FFFFFF;border: 0.5px solid #C6C6C6;box-sizing: border-box;text-align: left;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #000000;padding:5px;"><?php echo $row['client_password']; ?></td>
	<td class="ajp" style="width: 103px;height: 112px;position:relative;box-sizing: border-box;text-align: center;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 16px;line-height: 22px;color: #000000;">
	<input type="submit" class="completed" data-id="<?php echo $row['ID']; ?>" id="edit_button" value="" style="background: url(assets/images/editsmallicon.png) no-repeat center;width: 83%;height: 38%;background-color: Transparent;background-repeat: no-repeat;border: none;cursor: pointer;overflow: hidden;outline: none;" data-toggle="modal" data-target="#modaledit">
	<br>
	<input type="submit" class="completed2" data-id="<?php echo $row['ID']; ?>" id="delete_button" value="" style="background: url(assets/images/trash.png) no-repeat center;width: 83%;height: 38%;background-color: Transparent;background-repeat: no-repeat;border: none;cursor: pointer;overflow: hidden;outline: none;" data-toggle="modal" data-target="#modaldelete">
	</td>
  </tr>
  <?php
										}
				?>
</table>
        <!-- Modal -->
    <div id="Modal" class="modal fade" role="dialog">
      <div class="modal-dialog" style="height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">

        <!-- Modal content-->
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <div class="modal-content" style="width: 615.65px;
    height: auto;">
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
			  <div>
              <div class="modal-body">
                <div class="form-group">
                    <label for="name" class="nametitle" style="position: relative;left: 7.7%;right: 74.24%;top: 2.68%;bottom: 79.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Name</label>
                    <input type="text" placeholder="" name="task_name11" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 50px;left: -13px;" required>
                </div>
                 <br>
				 <br>
				 <br>
                <div class="form-group2">
				<label for="saddress" class="saddress11" style="position: relative;left: 7.7%;right: 74.24%;bottom: 78.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Site Address</label>
                    <input type="text" placeholder="" name="site_address11[]" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 3px;left: 44px;" required>
               <a href="#" class="add_button3" title="Add field"><img src="assets/images/orangeplussymbol.png" style="position: relative;
    right: -52px;"></a>
				</div>
				<div class="form-group">
                    <label for="username" class="nametitle" style="position: relative;left: 7.7%;right: 74.24%;top: 2.68%;bottom: 79.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Username</label>
                    <input type="text" placeholder="" name="task_user11" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 52px;
    left: -52px;" required>
                </div>
				<br>
				<br>
				<div class="form-group">
                    <label for="password" class="nametitle" style="position: relative;left: 7.7%;right: 74.24%;top: 2.68%;bottom: 79.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Password</label>
                    <input type="text" placeholder="" name="task_password11" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 52px;
    left: -52px;" required>
                </div>
				<br>
				<div class="form-group">
				<label class="myfiles"> + Upload Document
    <input type="file" size="60" name="filegg" multiple required>
    </label> 
                 </div>
				 <br>
				<input type="hidden" name="task7" value="addclient">
				<input type="hidden" name="usertype" value="client">
                <center>
                <div class="form-group">
                    <input type="submit" class="submit_button" value="ADD" style="position: relative;
    top: 23px;">    
                </div>
                </center>
        <!-- Content end -->
      </div>
	  </div>
    </div>
	</form>
	</div>
	</div>
	<div class="modal fade" id="modaledit" role="dialog">
     <div class="modal-dialog" style="height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">

        <!-- Modal content-->
            <div class="modal-content" style="width: 615.65px;
    height: auto;">
        
        <div class="fetched-clientprofileinfo"></div>
      </div>
      
    </div>
  </div>
  <script>
whatclientprofileedit();
        function whatclientprofileedit(){
  $('#modaledit').on('show.bs.modal', function(e) {
    var id10 = $(e.relatedTarget).data('id');
    $.ajax({
            type : 'post',
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/clientprofileinfo.php', //Here you will fetch records
            data :  'id10='+ id10, //Pass $id
            success : function(data){
            $('.fetched-clientprofileinfo').html(data);//Show fetched data from database
            }
        });
  });
}
</script>
<div class="modal fade" id="modalsiteaddress" role="dialog">
     <div class="modal-dialog" style="height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">

        <!-- Modal content-->
            <div class="modal-content" style="width: 598.35px;
    height: auto;">
        
        <div class="fetched-siteaddressinfo"></div>
      </div>
      
    </div>
  </div>
  <script>
whatsiteaddressedit();
        function whatsiteaddressedit(){
  $('#modalsiteaddress').on('show.bs.modal', function(e) {
    var id555 = $(e.relatedTarget).data('id');
    $.ajax({
            type : 'post',
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/siteaddresspopupclient.php', //Here you will fetch records
            data :  'id555='+ id555, //Pass $id
            success : function(data){
            $('.fetched-siteaddressinfo').html(data);//Show fetched data from database
            }
        });
  });
}
</script>
<div class="modal fade" id="modaledit" role="dialog">
     <div class="modal-dialog" style="height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">

        <!-- Modal content-->
            <div class="modal-content" style="width: 615.65px;
    height: auto;">
        
        <div class="fetched-clientprofileinfo"></div>
      </div>
      
    </div>
  </div>
  <script>
whatclientprofileedit();
        function whatclientprofileedit(){
  $('#modaledit').on('show.bs.modal', function(e) {
    var id10 = $(e.relatedTarget).data('id');
    $.ajax({
            type : 'post',
            url : 'https://outre.digital/stage/codee_clean_test/codee_clean/clientprofileinfo.php', //Here you will fetch records
            data :  'id10='+ id10, //Pass $id
            success : function(data){
            $('.fetched-clientprofileinfo').html(data);//Show fetched data from database
            }
        });
  });
}
</script>
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
           <input type="button" id="tasksbutton2" class="btn btn-default" data-dismiss="modal" value="CANCEL" onclick="window.location.href='client_list.php'">
		  <input type="button" id="tasksbutton3" class="btn btn-default" data-dismiss="modal" value="LOG OUT" onclick="window.location.href='logoutadmin.php'">
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="modaldelete" role="dialog">
    <div class="modal-dialog adminlogout" style="margin-top: initial;
    height: 100%;
    vertical-align: middle;
    display: flex;
    justify-content: center;
    align-items: center;">
    
      <!-- Modal content-->
	   <form action="action.php" method="POST" enctype="multipart/form-data">
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
		<input type="hidden" name="task7delete" value="addclientdelete">
		 <input type="hidden" name="id2" id="id2" value=""/>
        <div class="modal-footer">
           <input type="button" id="tasksbutton2" class="btn btn-default" data-dismiss="modal" value="CANCEL" onclick="window.location.href='client_list.php'">
		  <input type="submit" id="tasksbutton3" class="btn btn-default" value="DELETE">
        </div>
      </div>
      </form>
    </div>
  </div>
        <!-- MODAL END -->
</body>
</html>