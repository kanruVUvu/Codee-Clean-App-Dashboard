<?php
include("database.php");
if(!empty($_POST['task']) && $_POST['task'] == 'add')
{
	$id = $_POST['id'];
	$sql5 = "select * from cleanerlisttable where ID='$id'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$ts="ongoing";
	date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "insert into admin_task(Name_of_task,Date_of_completion,site_address,cleaner,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$schedule_at','$site','$cleaner','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task.php");
	}
	else
	{
		header("location:task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task2']) && $_POST['task2'] == 'add2')
{
	$id = $_POST['id'];
	$sql5 = "select * from cleanerlisttable where ID='$id'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$ts="ongoing";
	date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "insert into admin_task(Name_of_task,Date_of_completion,site_address,cleaner,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$schedule_at','$site','$cleaner','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task2ndview.php");
	}
	else
	{
		header("location:task2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task3']) && $_POST['task3'] == 'add3')
{
	$id3 = $_POST['id3'];
	$sql5 = "select * from cleanerlisttable where ID='$id3'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$ts="ongoing";
	date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "insert into admin_task(Name_of_task,Date_of_completion,site_address,cleaner,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$schedule_at','$site','$cleaner','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task.php");
	}
	else
	{
		header("location:client_task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task4']) && $_POST['task4'] == 'add4')
{
	$id3 = $_POST['id3'];
	$sql5 = "select * from cleanerlisttable where ID='$id3'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$ts="ongoing";
	date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "insert into admin_task(Name_of_task,Date_of_completion,site_address,cleaner,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$schedule_at','$site','$cleaner','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task2ndview.php");
	}
	else
	{
		header("location:clienttask2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task5']) && $_POST['task5'] == 'add5')
{
	$id = $_POST['id'];
	$sql5 = "select * from cleanerlisttable where ID='$id'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$ts="ongoing";
	date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "insert into admin_task(Name_of_task,Date_of_completion,site_address,cleaner,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$schedule_at','$site','$cleaner','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task.php");
	}
	else
	{
		header("location:completed_task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task6']) && $_POST['task6'] == 'add6')
{
	$id = $_POST['id'];
	$sql5 = "select * from cleanerlisttable where ID='$id'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$ts="ongoing";
	date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "insert into admin_task(Name_of_task,Date_of_completion,site_address,cleaner,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$schedule_at','$site','$cleaner','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task2ndview.php");
	}
	else
	{
		header("location:completedtask2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task']) && $_POST['task'] == 'add')
{
	$id = $_POST['id'];
	$sql5 = "select * from cleanerlisttable where ID='$id'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$tm = "adminaddition";
	$q="select * from admin_task where Name_of_task='$task_name' and Date_of_completion='$schedule_at' and site_address='$site' and cleaner='$cleaner' and cleanerimage='$cleanerimage'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
		$unique_id = $row['ID'];
		$schedule_at = $row['Date_of_completion'];
		$site = $row['site_address'];
		$cleaner = $row['cleaner'];
		$cleanerimage=$row['cleanerimage'];
		$cleanerphoneno=$row['cleaner_phoneno'];
		$taskaddeddate=$row['created_at'];
	$ts="ongoing";
	$sql = "insert into adminclientclean_task(Name_of_task,unique_id,Date_of_completion,site_address,cleaner,textmessage,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$unique_id','$schedule_at','$site','$cleaner','$tm','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	}
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task.php");
	}
	else
	{
		header("location:task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task2']) && $_POST['task2'] == 'add2')
{
	$id = $_POST['id'];
	$sql5 = "select * from cleanerlisttable where ID='$id'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$tm = "adminaddition";
	$q="select * from admin_task where Name_of_task='$task_name' and Date_of_completion='$schedule_at' and site_address='$site' and cleaner='$cleaner' and cleanerimage='$cleanerimage'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
		$unique_id = $row['ID'];
		$schedule_at = $row['Date_of_completion'];
		$site = $row['site_address'];
		$cleaner = $row['cleaner'];
		$cleanerimage=$row['cleanerimage'];
		$cleanerphoneno=$row['cleaner_phoneno'];
		$taskaddeddate=$row['created_at'];
	$ts="ongoing";
	$sql = "insert into adminclientclean_task(Name_of_task,unique_id,Date_of_completion,site_address,cleaner,textmessage,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$unique_id','$schedule_at','$site','$cleaner','$tm','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	}
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task2ndview.php");
	}
	else
	{
		header("location:task2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task3']) && $_POST['task3'] == 'add3')
{
	$id3 = $_POST['id3'];
	$sql5 = "select * from cleanerlisttable where ID='$id3'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$tm = "adminaddition";
	$q="select * from admin_task where Name_of_task='$task_name' and Date_of_completion='$schedule_at' and site_address='$site' and cleaner='$cleaner' and cleanerimage='$cleanerimage'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
		$unique_id = $row['ID'];
		$schedule_at = $row['Date_of_completion'];
		$site = $row['site_address'];
		$cleaner = $row['cleaner'];
		$cleanerimage=$row['cleanerimage'];
		$cleanerphoneno=$row['cleaner_phoneno'];
		$taskaddeddate=$row['created_at'];
	$ts="ongoing";
	$sql = "insert into adminclientclean_task(Name_of_task,unique_id,Date_of_completion,site_address,cleaner,textmessage,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$unique_id','$schedule_at','$site','$cleaner','$tm','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	}
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task.php");
	}
	else
	{
		header("location:client_task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task4']) && $_POST['task4'] == 'add4')
{
	$id3 = $_POST['id3'];
	$sql5 = "select * from cleanerlisttable where ID='$id3'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$tm = "adminaddition";
	$q="select * from admin_task where Name_of_task='$task_name' and Date_of_completion='$schedule_at' and site_address='$site' and cleaner='$cleaner' and cleanerimage='$cleanerimage'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
		$unique_id = $row['ID'];
		$schedule_at = $row['Date_of_completion'];
		$site = $row['site_address'];
		$cleaner = $row['cleaner'];
		$cleanerimage=$row['cleanerimage'];
		$cleanerphoneno=$row['cleaner_phoneno'];
		$taskaddeddate=$row['created_at'];
	$ts="ongoing";
	$sql = "insert into adminclientclean_task(Name_of_task,unique_id,Date_of_completion,site_address,cleaner,textmessage,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$unique_id','$schedule_at','$site','$cleaner','$tm','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	}
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task2ndview.php");
	}
	else
	{
		header("location:clienttask2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task5']) && $_POST['task5'] == 'add5')
{
	$id = $_POST['id'];
	$sql5 = "select * from cleanerlisttable where ID='$id'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$tm = "adminaddition";
	$q="select * from admin_task where Name_of_task='$task_name' and Date_of_completion='$schedule_at' and site_address='$site' and cleaner='$cleaner' and cleanerimage='$cleanerimage'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
		$unique_id = $row['ID'];
		$schedule_at = $row['Date_of_completion'];
		$site = $row['site_address'];
		$cleaner = $row['cleaner'];
		$cleanerimage=$row['cleanerimage'];
		$cleanerphoneno=$row['cleaner_phoneno'];
		$taskaddeddate=$row['created_at'];
	$ts="ongoing";
	$sql = "insert into adminclientclean_task(Name_of_task,unique_id,Date_of_completion,site_address,cleaner,textmessage,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$unique_id','$schedule_at','$site','$cleaner','$tm','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	}
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task.php");
	}
	else
	{
		header("location:completed_task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task6']) && $_POST['task6'] == 'add6')
{
	$id = $_POST['id'];
	$sql5 = "select * from cleanerlisttable where ID='$id'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
	$task_name = $_POST['task_name'];
	$schedule_at = $_POST['date'];
	$site = $_POST['site_address'];
	$tm = "adminaddition";
	$q="select * from admin_task where Name_of_task='$task_name' and Date_of_completion='$schedule_at' and site_address='$site' and cleaner='$cleaner' and cleanerimage='$cleanerimage'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
		$unique_id = $row['ID'];
		$schedule_at = $row['Date_of_completion'];
		$site = $row['site_address'];
		$cleaner = $row['cleaner'];
		$cleanerimage=$row['cleanerimage'];
		$cleanerphoneno=$row['cleaner_phoneno'];
		$taskaddeddate=$row['created_at'];
	$ts="ongoing";
	$sql = "insert into adminclientclean_task(Name_of_task,unique_id,Date_of_completion,site_address,cleaner,textmessage,cleanerimage,task_status,cleaner_phoneno,created_at) values('$task_name','$unique_id','$schedule_at','$site','$cleaner','$tm','$cleanerimage','$ts','$cleanerphoneno','$taskaddeddate')";
	}
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task2ndview.php");
	}
	else
	{
		header("location:completedtask2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task7']) && $_POST['task7'] == 'addclient')
{
	$task_name = $_POST['task_name11'];
      
	  $username = $_POST['task_user11'];
      $password = $_POST['task_password11']; 
	   $filename = $_FILES["filegg"]["name"];
    $tempname = $_FILES["filegg"]["tmp_name"]; 
$folder = "documents/".$filename;		
	  $sql = "insert into clientlisttable(client_name,site_address,client_username,client_password,client_documentname) values('$task_name','". implode("<hr>", $_POST["site_address11"]). "','$username','$password','$filename')";
      $result = mysqli_query($con,$sql);
	  if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	if($result)
	{
		header("location:client_list.php");
	}
	else
	{
		header("location:client_list.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task8']) && $_POST['task8'] == 'addcleaner')
{
	$task_name = $_POST['task_name12'];
      
	  $username = $_POST['task_user12'];
      $password = $_POST['task_password12']; 
	 $filename = $_FILES["filegg"]["name"];
    $tempname = $_FILES["filegg"]["tmp_name"];   
	$folder = "documents/".$filename;	
	$filename2 = $_FILES["filegg3"]["name"];
    $tempname2 = $_FILES["filegg3"]["tmp_name"]; 
$folder2 = "profileimages/".$filename2;
$cleanerphoneno = $_POST['task_cleanerphoneno12'];
	  $sql = "insert into cleanerlisttable(cleaner_name,cleaner_siteaddress,cleaner_username,cleaner_password,cleaner_documentname,cleaner_profilephoto,cleaner_phoneno) values('$task_name','". implode("<hr>", $_POST["site_address13"]). "','$username','$password','$filename','$filename2','$cleanerphoneno')";
      $result = mysqli_query($con,$sql);
	  if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	  if (move_uploaded_file($tempname2, $folder2))  {
            $msg2 = "Image uploaded successfully";
        }else{
            $msg2 = "Failed to upload image";
      }
	if($result)
	{
		header("location:cleaner_list.php");
	}
	else
	{
		header("location:cleaner_list.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task7edit']) && $_POST['task7edit'] == 'addclientedit')
{
$id = $_POST['id'];
		$taskname = $_POST['task_name11'];
		$username=$_POST['task_user11'];
		$password=$_POST['task_password11'];
		$filename = $_FILES["filegg2"]["name"];
    $tempname = $_FILES["filegg2"]["tmp_name"]; 
$folder = "documents/".$filename;	
	$sql = "update clientlisttable set client_name='$taskname',site_address='". implode("<hr>", $_POST["site_address12"]). "',client_username='$username',client_password='$password',client_documentname='$filename' where ID='$id'";
	$success = mysqli_query($con,$sql);
	if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	if($success)
	{
				header("location:client_list.php");	
	}
	else
	{	
       header("location:client_list.php");
			}
		}
?>
<?php
include("database.php");
if(!empty($_POST['task8edit']) && $_POST['task8edit'] == 'addcleaneredit')
{
$id = $_POST['id'];
		$taskname = $_POST['task_name12'];
		
		$username=$_POST['task_user12'];
		$password=$_POST['task_password12'];
		$filename = $_FILES["filegg2"]["name"];
    $tempname = $_FILES["filegg2"]["tmp_name"];  
	$folder = "documents/".$filename;	
$filename2 = $_FILES["filegg4"]["name"];
    $tempname2 = $_FILES["filegg4"]["tmp_name"]; 
$folder2 = "profileimages/".$filename2;	
$cleanerphoneno = $_POST['task_cleanerphoneno12'];
	$sql = "update cleanerlisttable set cleaner_name='$taskname',cleaner_siteaddress='". implode("<hr>",$_POST["site_address14"]). "',cleaner_username='$username',cleaner_password='$password',cleaner_documentname='$filename',cleaner_profilephoto='$filename2',cleaner_phoneno='$cleanerphoneno' where ID='$id'";
	$success = mysqli_query($con,$sql);
	if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	  if (move_uploaded_file($tempname2, $folder2))  {
            $msg2 = "Image uploaded successfully";
        }else{
            $msg2 = "Failed to upload image";
      }
	if($success)
	{
				header("location:cleaner_list.php");	
	}
	else
	{	
       header("location:cleaner_list.php");
			}
		}
?>
<?php
include("database.php");
if(!empty($_POST['task7delete']) && $_POST['task7delete'] == 'addclientdelete')
{
$id2 = $_POST['id2'];
		$query1 = "delete from clientlisttable where ID='$id2'";
		$result1 = mysqli_query($con,$query1);
		if($result1)
	{
				header("location:client_list.php");	
	}
	else
	{	
       header("location:client_list.php");
			}
}
?>	
<?php
include("database.php");
if(!empty($_POST['task8delete']) && $_POST['task8delete'] == 'addcleanerdelete')
{
$id2 = $_POST['id2'];
		$query1 = "delete from cleanerlisttable where ID='$id2'";
		$result1 = mysqli_query($con,$query1);
		if($result1)
	{
				header("location:cleaner_list.php");	
	}
	else
	{	
       header("location:cleaner_list.php");
			}
}	
?>
<?php
include("database.php");
   session_start();
   if(!empty($_POST['helloindia']) && $_POST['helloindia'] == 'add')
{
   if($_POST['logintype'] == 'Admin') 
   {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      $sql = "select * from login_adminclientcleaner where username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      $test=$row['logintype'];
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(($count == 1)&&($test=="admin")) {
      	$_SESSION['user_name']=$row['username'];
		  $_SESSION['password']=$row['password'];
		  $_SESSION['id5']=$row['ID'];
		  $_SESSION['login_as_type']=$row['logintype'];
		   $_SESSION['admin_name']=$row['name'];
		    $_SESSION['admin_address']=$row['site_address'];
		  header("location:task.php");
	  }
	  else
	  {
	   header("location:index.php?x=1");
	  }
		
   }
   elseif($_POST['logintype'] == 'Client') 
   {
	   $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
$sql = "select * from clientlisttable where client_username = '$myusername' and client_password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      $test="client";
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(($count == 1)&&($test=="client")) {
		 $_SESSION['user_name']=$row['client_username'];
		  $_SESSION['password']=$row['client_password'];
		  $_SESSION['id5']=$row['ID'];
		  $_SESSION['login_as_type']='client';
		   $_SESSION['client_name']=$row['client_name'];
		    $_SESSION['client_address']=$row['site_address'];
		 header("location:codee_clean_cleanerclient/task.php");
	  }	
	  else
	  {
	   header("location:index.php?x=1");
	  }
   }
    elseif($_POST['logintype'] == 'Cleaner') 
	{
		$myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
		 $sql = "select * from cleanerlisttable where cleaner_username = '$myusername' and cleaner_password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      $test="cleaner";
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(($count == 1)&&($test=="cleaner")) {
		 $_SESSION['user_name']=$row['cleaner_username'];
		  $_SESSION['password']=$row['cleaner_password'];
		  $_SESSION['id5']=$row['ID'];
		  $_SESSION['login_as_type']='cleaner';
		   $_SESSION['cleaner_name']=$row['cleaner_name'];
		    $_SESSION['cleaner_address']=$row['cleaner_siteaddress'];
		 header("location:codee_clean_cleanerclient/taskcleaner.php");
	  } 
	  else
	  {
	   header("location:index.php?x=1");
	  }
	}
}
	?>
<?php
include("database.php");
if(!empty($_POST['taskedit33']) && $_POST['taskedit33'] == 'addedit33')
{
	$id = $_POST['id'];
	$id2 = $_POST['id2'];
	$sql5 = "select * from cleanerlisttable where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
		$taskname = $_POST['task_name'];
		$doc=$_POST['date'];
		$sa=$_POST['site_address'];
		date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "update adminclientclean_task set Name_of_task='$taskname',Date_of_completion='$doc',site_address='$sa',cleaner='$cleaner',cleanerimage='$cleanerimage',cleaner_phoneno='$cleanerphoneno',created_at='$taskaddeddate' where unique_id='$id' and textmessage='clientaddition'";
	$success = mysqli_query($con,$sql);
	$sql2 = "update clientformdata set taskname='$taskname',completion_scheduled_date='$doc',site_address='$sa',cleaner='$cleaner',cleanerimage='$cleanerimage',cleaner_phoneno='$cleanerphoneno',created_at='$taskaddeddate' where ID='$id'";
	$failure = mysqli_query($con,$sql2);
	if($success && $failure)
	{
				header("location:client_task.php");	
	}
	else
	{	
       header("location:client_task.php");
			}
		}
?>
<?php
include("database.php");
if(!empty($_POST['taskedit44']) && $_POST['taskedit44'] == 'addedit44')
{
	$id = $_POST['id'];
	$id2 = $_POST['id2'];
	$sql5 = "select * from cleanerlisttable where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	while($row4=mysqli_fetch_array($success5))
	{
		$cleaner = $row4['cleaner_name'];
		$cleanerimage=$row4['cleaner_profilephoto'];
		$cleanerphoneno=$row4['cleaner_phoneno'];
	}
		$taskname = $_POST['task_name'];
		$doc=$_POST['date'];
		$sa=$_POST['site_address'];
		date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "update adminclientclean_task set Name_of_task='$taskname',Date_of_completion='$doc',site_address='$sa',cleaner='$cleaner',cleanerimage='$cleanerimage',cleaner_phoneno='$cleanerphoneno',created_at='$taskaddeddate' where unique_id='$id' and textmessage='clientaddition'";
	$success = mysqli_query($con,$sql);
	$sql2 = "update clientformdata set taskname='$taskname',completion_scheduled_date='$doc',site_address='$sa',cleaner='$cleaner',cleanerimage='$cleanerimage',cleaner_phoneno='$cleanerphoneno',created_at='$taskaddeddate' where ID='$id'";
	$failure = mysqli_query($con,$sql2);
	if($success && $failure)
	{
				header("location:clienttask2ndview.php");	
	}
	else
	{	
       header("location:clienttask2ndview.php");
			}
		}
?>
<?php
include("database.php");
if(!empty($_POST['hellous']) && $_POST['hellous'] == 'addus')
{
	$fullmailid = $_POST['username'];
	$sql = "SELECT ID FROM login_adminclientcleaner WHERE username = '$fullmailid'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
	if($count==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                    <td>copy and paste the following link in your browser: https://outre.digital/stage/codee_clean_test/codee_clean/passwordreset.php</td>
                </tr>
			</table>
			
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			$_SESSION['login'] = true;
		header("location:forgotpasswordpage.php");
	}
	
	$sql2 = "SELECT ID FROM clientlisttable WHERE client_username = '$fullmailid'";
      $result2 = mysqli_query($con,$sql2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
      
      $count2 = mysqli_num_rows($result2);
	if($count2==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                    <td>copy and paste the following link in your browser: https://outre.digital/stage/codee_clean_test/codee_clean/passwordreset.php</td>
                </tr>
			</table>
			
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			$_SESSION['login'] = true;
		header("location:forgotpasswordpage.php");
	}
	
	$sql3 = "SELECT ID FROM cleanerlisttable WHERE cleaner_username = '$fullmailid'";
      $result3 = mysqli_query($con,$sql3);
      $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
      
      $count3 = mysqli_num_rows($result3);
	if($count3==1)
	{
		$myemail = "dheerajraopathur@gmail.com"; 
            $emailto = $fullmailid; 
            // $emailcc = "cc@domain.com"; 
            $emailcc = "";
            $subject = "Email to reset or change Password"; 
            // $headers = "From: $myemail"; 
            $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

            $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Reset your Password</td>
                </tr>
                <tr>                
                    <td>Use the url below to reset your Password. If you did'nt request a new password , you can safely delete this mail.</td>
                </tr>
                <tr>                
                    <td>copy and paste the following link in your browser: https://outre.digital/stage/codee_clean_test/codee_clean/passwordreset.php</td>
                </tr>
			</table>
			
            </body>
            </html>
            ";
            $send = mail($emailto, $subject . ' ' . "", $body, $headers); 
			$_SESSION['login'] = true;
		header("location:forgotpasswordpage.php");
	}
	else
	{
	$_SESSION['login'] = false;
		header("location:forgotpasswordpage.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['hellous2']) && $_POST['hellous2'] == 'addus2')
{
	$username = $_POST['username'];
	$password2 = $_POST['password2'];
	$password3 = $_POST['password3'];
	$sql5 = "update login_adminclientcleaner set password='$password3' where username='$username'";
	$success5 = mysqli_query($con,$sql5);
	$sql6 = "update clientlisttable set client_password='$password3' where client_username='$username'";
	$success6 = mysqli_query($con,$sql6);
	$sql7 = "update cleanerlisttable set cleaner_password='$password3' where cleaner_username='$username'";
	$success7 = mysqli_query($con,$sql7);
	if($success5 || $success6 || $success7)
	{
		$_SESSION['login'] = true;
				header("location:index.php");	
	}
	else
	{
	$_SESSION['login'] = false;
		header("location:index.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['clockadd1']) && $_POST['clockadd1'] == 'timing1')
{
	$id2 = $_POST['id2'];
	$clockin=$_POST['timestart'];
	$clockout=$_POST['timeend'];
    $sql5 = "update admin_task set clock_in='$clockin',clock_out='$clockout' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	$sql6 = "update adminclientclean_task set clock_in='$clockin',clock_out='$clockout' where unique_id='$id2' and textmessage='adminaddition'";
	$success6 = mysqli_query($con,$sql6);
	if($success5 && $success6)
	{
		header("location:task.php");
	}
	else
	{
		header("location:task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['clockadd2']) && $_POST['clockadd2'] == 'timing2')
{
	$id2 = $_POST['id2'];
	$clockin=$_POST['timestart'];
	$clockout=$_POST['timeend'];
    $sql5 = "update admin_task set clock_in='$clockin',clock_out='$clockout' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	$sql6 = "update adminclientclean_task set clock_in='$clockin',clock_out='$clockout' where unique_id='$id2' and textmessage='adminaddition'";
	$success6 = mysqli_query($con,$sql6);
	if($success5 && $success6)
	{
		header("location:task2ndview.php");
	}
	else
	{
		header("location:task2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['clockadd3']) && $_POST['clockadd3'] == 'timing3')
{
	$id4 = $_POST['id4'];
	$clockin=$_POST['timestart'];
	$clockout=$_POST['timeend'];
    $sql5 = "update clientformdata set clock_in='$clockin',clock_out='$clockout' where ID='$id4'";
	$success5 = mysqli_query($con,$sql5);
	$sql6 = "update adminclientclean_task  set clock_in='$clockin',clock_out='$clockout' where unique_id='$id4' and textmessage='clientaddition'";
	$success6 = mysqli_query($con,$sql6);
	if($success5 && $success6)
	{
		header("location:client_task.php");
	}
	else
	{
		header("location:client_task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['clockadd4']) && $_POST['clockadd4'] == 'timing4')
{
	$id4 = $_POST['id4'];
	$clockin=$_POST['timestart'];
	$clockout=$_POST['timeend'];
    $sql5 = "update clientformdata set clock_in='$clockin',clock_out='$clockout' where ID='$id4'";
	$success5 = mysqli_query($con,$sql5);
	$sql6 = "update adminclientclean_task  set clock_in='$clockin',clock_out='$clockout' where unique_id='$id4' and textmessage='clientaddition'";
	$success6 = mysqli_query($con,$sql6);
	if($success5 && $success6)
	{
		header("location:clienttask2ndview.php");
	}
	else
	{
		header("location:clienttask2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['clockadd5']) && $_POST['clockadd5'] == 'timing5')
{
	$id2 = $_POST['id2'];
	$clockin=$_POST['timestart'];
	$clockout=$_POST['timeend'];
    $sql5 = "update cleanercompletedtasks set clock_in='$clockin',clock_out='$clockout' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:completed_task.php");
	}
	else
	{
		header("location:completed_task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['clockadd6']) && $_POST['clockadd6'] == 'timing6')
{
	$id2 = $_POST['id2'];
	$clockin=$_POST['timestart'];
	$clockout=$_POST['timeend'];
    $sql5 = "update cleanercompletedtasks set clock_in='$clockin',clock_out='$clockout' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:completedtask2ndview.php");
	}
	else
	{
		header("location:completedtask2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup1']) && $_POST['chatadminpopup1'] == 'chatcon1')
{
	 if(($_POST['messageforwarding'] == 'All') || ($_POST['messageforwarding'] == 'Cleaner')) 
   {
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update admin_task set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	$sql6 = "update adminclientclean_task set comments='$comments',comments_added_date='$commentaddeddate' where unique_id='$idpost' and textmessage='adminaddition'";
	$success6 = mysqli_query($con,$sql6);
	if($success5 && $success6)
	{
		header("location:task.php");
	}
	else
	{
		header("location:task.php");
	}
}
elseif($_POST['messageforwarding'] == 'Client')
{
$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update admin_task set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
if($success5)
	{
		header("location:task.php");
	}
}
else
{
header("location:task.php");
}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup2']) && $_POST['chatadminpopup2'] == 'chatcon2')
{
	if(($_POST['messageforwarding'] == 'All') || ($_POST['messageforwarding'] == 'Cleaner')) 
   {
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update admin_task set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	$sql6 = "update adminclientclean_task set comments='$comments',comments_added_date='$commentaddeddate' where unique_id='$idpost' and textmessage='adminaddition'";
	$success6 = mysqli_query($con,$sql6);
	if($success5 && $success6)
	{
		header("location:task2ndview.php");
	}
	else
	{
		header("location:task2ndview.php");
	}
}
elseif($_POST['messageforwarding'] == 'Client')
{
$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update admin_task set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
if($success5)
	{
		header("location:task2ndview.php");
	}
}
else
{
header("location:task2ndview.php");
}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup3']) && $_POST['chatadminpopup3'] == 'chatcon3')
{
	if(($_POST['messageforwarding'] == 'All')) 
   {
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update clientformdata set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	$sql6 = "update adminclientclean_task set comments='$comments',comments_added_date='$commentaddeddate' where unique_id='$idpost' and textmessage='clientaddition'";
	$success6 = mysqli_query($con,$sql6);
	if($success5 && $success6)
	{
		header("location:client_task.php");
	}
	else
	{
		header("location:client_task.php");
	}
}
elseif($_POST['messageforwarding'] == 'Client')
{
$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update clientformdata set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:client_task.php");
	}
	else
	{
		header("location:client_task.php");
	}
}
elseif($_POST['messageforwarding'] == 'Cleaner')
{
$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql6 = "update adminclientclean_task set comments='$comments',comments_added_date='$commentaddeddate' where unique_id='$idpost' and textmessage='clientaddition'";
	$success6 = mysqli_query($con,$sql6);
	if($success6)
	{
		header("location:client_task.php");
	}
	else
	{
		header("location:client_task.php");
	}
}
else
	{
		header("location:client_task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup4']) && $_POST['chatadminpopup4'] == 'chatcon4')
{
	if(($_POST['messageforwarding'] == 'All')) 
   {
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update clientformdata set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	$sql6 = "update adminclientclean_task set comments='$comments',comments_added_date='$commentaddeddate' where unique_id='$idpost' and textmessage='clientaddition'";
	$success6 = mysqli_query($con,$sql6);
	if($success5 && $success6)
	{
		header("location:clienttask2ndview.php");
	}
	else
	{
		header("location:clienttask2ndview.php");
	}
}
elseif($_POST['messageforwarding'] == 'Client')
{
$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update clientformdata set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:clienttask2ndview.php");
	}
	else
	{
		header("location:clienttask2ndview.php");
	}
}
elseif($_POST['messageforwarding'] == 'Cleaner')
{
$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql6 = "update adminclientclean_task set comments='$comments',comments_added_date='$commentaddeddate' where unique_id='$idpost' and textmessage='clientaddition'";
	$success6 = mysqli_query($con,$sql6);
	if($success6)
	{
		header("location:clienttask2ndview.php");
	}
	else
	{
		header("location:clienttask2ndview.php");
	}
}
else
	{
		header("location:clienttask2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup5']) && $_POST['chatadminpopup5'] == 'chatcon5')
{
	if(($_POST['messageforwarding'] == 'All') || ($_POST['messageforwarding'] == 'Cleaner') || ($_POST['messageforwarding'] == 'Client')) 
   {
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update cleanercompletedtasks set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:completed_task.php");
	}
	else
	{
		header("location:completed_task.php");
	}
}
else
	{
		header("location:completed_task.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup6']) && $_POST['chatadminpopup6'] == 'chatcon6')
{
	if(($_POST['messageforwarding'] == 'All') || ($_POST['messageforwarding'] == 'Cleaner') || ($_POST['messageforwarding'] == 'Client'))
   {
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update cleanercompletedtasks set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:completedtask2ndview.php");
	}
	else
	{
		header("location:completedtask2ndview.php");
	}
}
else
	{
		header("location:completedtask2ndview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschange1']) && $_POST['statuschange1'] == 'colourchange1')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update admin_task set task_viewed_status='1' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:task.php");
	}
	else
	{
		header("location:notification.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschange2']) && $_POST['statuschange2'] == 'colourchange2')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update clientformdata set task_viewed_status='1' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:client_task.php");
	}
	else
	{
		header("location:notification.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschange3']) && $_POST['statuschange3'] == 'colourchange3')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update cleanercompletedtasks set task_viewed_status='1' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:completed_task.php");
	}
	else
	{
		header("location:notification.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschange4']) && $_POST['statuschange4'] == 'colourchange4')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update admin_task set task_viewed_status_comments='1' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:task.php");
	}
	else
	{
		header("location:notification.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschange5']) && $_POST['statuschange5'] == 'colourchange5')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update clientformdata set task_viewed_status_comments='1' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:client_task.php");
	}
	else
	{
		header("location:notification.php");
	}
}
?>