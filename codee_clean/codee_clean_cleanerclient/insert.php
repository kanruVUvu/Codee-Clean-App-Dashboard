<?php
include("database.php");
if(!empty($_POST['task11']) && $_POST['task11'] == 'add100')
{
	$task_name = $_POST['tname2'];
	$schedule_at = $_POST['birthday2'];
	$site = $_POST['saddress2'];
$clientname = $_POST['cname'];
$ts="ongoing";
date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "insert into clientformdata(clientname,taskname,completion_scheduled_date,site_address,task_status,created_at) values('$clientname','$task_name','$schedule_at','$site','$ts','$taskaddeddate')";
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
if(!empty($_POST['task12']) && $_POST['task12'] == 'add101')
{
	$task_name = $_POST['tname2'];
	$schedule_at = $_POST['birthday2'];
	$site = $_POST['saddress2'];
	$clientname = $_POST['cname'];
	$ts="ongoing";
	date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "insert into clientformdata(clientname,taskname,completion_scheduled_date,site_address,task_status,created_at) values('$clientname','$task_name','$schedule_at','$site','$ts','$taskaddeddate')";
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
if(!empty($_POST['task13']) && $_POST['task13'] == 'add102')
{
	$task_name = $_POST['tname2'];
	$schedule_at = $_POST['birthday2'];
	$site = $_POST['saddress2'];
	$clientname = $_POST['cname'];
	$ts="ongoing";
	date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "insert into clientformdata(clientname,taskname,completion_scheduled_date,site_address,task_status,created_at) values('$clientname','$task_name','$schedule_at','$site','$ts','$taskaddeddate')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task.php");
	}
	else
	{
		header("location:completedtask.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task14']) && $_POST['task14'] == 'add103')
{
	$task_name = $_POST['tname2'];
	$schedule_at = $_POST['birthday2'];
	$site = $_POST['saddress2'];
	$clientname = $_POST['cname'];
	$ts="ongoing";
	date_default_timezone_set("Asia/Colombo");
    $taskaddeddate=date('g:i a, d M Y');
	$sql = "insert into clientformdata(clientname,taskname,completion_scheduled_date,site_address,task_status,created_at) values('$clientname','$task_name','$schedule_at','$site','$ts','$taskaddeddate')";
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task2ndview.php");
	}
	else
	{
		header("location:completedtaskview2.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task11']) && $_POST['task11'] == 'add100')
{
	$task_name = $_POST['tname2'];
	$schedule_at = $_POST['birthday2'];
	$site = $_POST['saddress2'];
	$tm="clientaddition";
	$q="select * from clientformdata where taskname='$task_name' and completion_scheduled_date='$schedule_at' and site_address='$site'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
	$unique_id = $row['ID'];
		$schedule_at = $row['completion_scheduled_date'];
		$site = $row['site_address'];
		$cleaner = $row['cleaner'];
	$clientname = $row['clientname'];
	$taskaddeddate=$row['created_at'];
	$ts="ongoing";
	$sql = "insert into adminclientclean_task(Name_of_task,unique_id,Date_of_completion,site_address,cleaner,textmessage,clientname,task_status,created_at) values('$task_name','$unique_id','$schedule_at','$site','$cleaner','$tm','$clientname','$ts','$taskaddeddate')";
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
if(!empty($_POST['task12']) && $_POST['task12'] == 'add101')
{
	$task_name = $_POST['tname2'];
	$schedule_at = $_POST['birthday2'];
	$site = $_POST['saddress2'];
	$tm="clientaddition";
	$q="select * from clientformdata where taskname='$task_name' and completion_scheduled_date='$schedule_at' and site_address='$site'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
	$unique_id = $row['ID'];
		$schedule_at = $row['completion_scheduled_date'];
		$site = $row['site_address'];
		$cleaner = $row['cleaner'];
	$clientname = $row['clientname'];
	$taskaddeddate=$row['created_at'];
	$ts="ongoing";
	$sql = "insert into adminclientclean_task(Name_of_task,unique_id,Date_of_completion,site_address,cleaner,textmessage,clientname,task_status,created_at) values('$task_name','$unique_id','$schedule_at','$site','$cleaner','$tm','$clientname','$ts','$taskaddeddate')";
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
if(!empty($_POST['task13']) && $_POST['task13'] == 'add102')
{
	$task_name = $_POST['tname2'];
	$schedule_at = $_POST['birthday2'];
	$site = $_POST['saddress2'];
	$tm="clientaddition";
	$q="select * from clientformdata where taskname='$task_name' and completion_scheduled_date='$schedule_at' and site_address='$site'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
	$unique_id = $row['ID'];
		$schedule_at = $row['completion_scheduled_date'];
		$site = $row['site_address'];
		$cleaner = $row['cleaner'];
	$clientname = $row['clientname'];
	$taskaddeddate=$row['created_at'];
	$ts="ongoing";
	$sql = "insert into adminclientclean_task(Name_of_task,unique_id,Date_of_completion,site_address,cleaner,textmessage,clientname,task_status,created_at) values('$task_name','$unique_id','$schedule_at','$site','$cleaner','$tm','$clientname','$ts','$taskaddeddate')";
	}
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task.php");
	}
	else
	{
		header("location:completedtask.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['task14']) && $_POST['task14'] == 'add103')
{
	$task_name = $_POST['tname2'];
	$schedule_at = $_POST['birthday2'];
	$site = $_POST['saddress2'];
	$tm="clientaddition";
	$q="select * from clientformdata where taskname='$task_name' and completion_scheduled_date='$schedule_at' and site_address='$site'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
	$unique_id = $row['ID'];
		$schedule_at = $row['completion_scheduled_date'];
		$site = $row['site_address'];
		$cleaner = $row['cleaner'];
	$clientname = $row['clientname'];
	$taskaddeddate=$row['created_at'];
	$ts="ongoing";
	$sql = "insert into adminclientclean_task(Name_of_task,unique_id,Date_of_completion,site_address,cleaner,textmessage,clientname,task_status,created_at) values('$task_name','$unique_id','$schedule_at','$site','$cleaner','$tm','$clientname','$ts','$taskaddeddate')";
	}
	$success = mysqli_query($con,$sql);
	if($success)
	{
		header("location:task2ndview.php");
	}
	else
	{
		header("location:completedtaskview2.php");
	}
}
?>

<?php
include("database.php");
if(!empty($_POST['delete']) && $_POST['delete'] == 'task')
{
	$id = $_POST['id'];
	$sql = "select * from adminclientclean_task where ID='$id'";
	$success = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($success))
	{
		$unique = $row['unique_id'];
		$msg = $row['textmessage'];
		$taskname=$row['Name_of_task'];
		$doc=$row['Date_of_completion'];
		$sa=$row['site_address'];
		$cleanername=$row['cleaner'];
		$clientname=$row['clientname'];
		$cleanerimage=$row['cleanerimage'];
		$cleanerphoneno=$row['cleaner_phoneno'];
		$clockin=$row['clock_in'];
		$clockout=$row['clock_out'];
		$taskaddeddate=$row['created_at'];
	$ts="completed";
	date_default_timezone_set("Asia/Colombo");
    $taskcompleteddate=date('d M Y');
	$taskcompleteddatetime=date('g:i a, d M Y');
	$mnq = "insert into cleanercompletedtasks(Name_of_task,Date_of_completion,site_address,textmessage,cleanername,clientname,cleanerimage,task_status,cleaner_phoneno,clock_in,clock_out,created_at) values('$taskname','$taskcompleteddate','$sa','$msg','$cleanername','$clientname','$cleanerimage','$ts','$cleanerphoneno','$clockin','$clockout','$taskcompleteddatetime')";
	}
	$pp = mysqli_query($con,$mnq);
	if($msg == 'adminaddition')
	{
		$query1 = "delete from adminclientclean_task where ID='$id'";
		$result1 = mysqli_query($con,$query1);
		if($result1)
		{
			$query2 = "delete from admin_task where ID='$unique'";
			$result2 = mysqli_query($con,$query2);
			if($result2)
			{
				header("location:taskcleanercompleted.php");	
			}
		}
	}
	else
	{
		$query1 = "delete from adminclientclean_task where ID='$id'";
		$result1 = mysqli_query($con,$query1);
		if($result1)
		{
			$query2 = "delete from clientformdata where ID='$unique'";
			$result2 = mysqli_query($con,$query2);
			if($result2)
			{
				header("location:taskcleanercompleted.php");	
			}
		}
	}
}
?>
<?php 
include("database.php");
if(!empty($_POST['delete33']) && $_POST['delete33'] == 'task33')
{
	$id = $_POST['id'];
	$sql = "select * from adminclientclean_task where ID='$id'";
	$success = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($success))
	{
		$unique = $row['unique_id'];
		$msg = $row['textmessage'];
		$taskname=$row['Name_of_task'];
		$doc=$row['Date_of_completion'];
		$sa=$row['site_address'];
		$cleanername=$row['cleaner'];
		$clientname=$row['clientname'];
		$cleanerimage=$row['cleanerimage'];
		$cleanerphoneno=$row['cleaner_phoneno'];
	$clockin=$row['clock_in'];
		$clockout=$row['clock_out'];
		$taskaddeddate=$row['created_at'];
	$ts="completed";
	date_default_timezone_set("Asia/Colombo");
    $taskcompleteddate=date('d M Y');
	$taskcompleteddatetime=date('g:i a, d M Y');
	$mnq = "insert into cleanercompletedtasks(Name_of_task,Date_of_completion,site_address,textmessage,cleanername,clientname,cleanerimage,task_status,cleaner_phoneno,clock_in,clock_out,created_at) values('$taskname','$taskcompleteddate','$sa','$msg','$cleanername','$clientname','$cleanerimage','$ts','$cleanerphoneno','$clockin','$clockout','$taskcompleteddatetime')";
	}
	$pp = mysqli_query($con,$mnq);
	if($msg == 'adminaddition')
	{
		$query1 = "delete from adminclientclean_task where ID='$id'";
		$result1 = mysqli_query($con,$query1);
		if($result1)
		{
			$query2 = "delete from admin_task where ID='$unique'";
			$result2 = mysqli_query($con,$query2);
			if($result2)
			{
				header("location:taskcleanercompletedview.php");	
			}
		}
	}
	else
	{
		$query1 = "delete from adminclientclean_task where ID='$id'";
		$result1 = mysqli_query($con,$query1);
		if($result1)
		{
			$query2 = "delete from clientformdata where ID='$unique'";
			$result2 = mysqli_query($con,$query2);
			if($result2)
			{
				header("location:taskcleanercompletedview.php");	
			}
		}
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
	$sql="select * from adminclientclean_task where ID='$id2'";
	$success = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($success))
	{
	$tm=$row['textmessage'];
	$uniqueid=$row['unique_id'];
	if($tm == "adminaddition")
	{
    $sql5 = "update adminclientclean_task set clock_in='$clockin',clock_out='$clockout' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	$sql6="update admin_task set clock_in='$clockin',clock_out='$clockout' where ID='$uniqueid'";
	$success6 = mysqli_query($con,$sql6);
	}
	else
	{
    $sql5 = "update adminclientclean_task set clock_in='$clockin',clock_out='$clockout' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	$sql6="update clientformdata set clock_in='$clockin',clock_out='$clockout' where ID='$uniqueid'";
	$success6 = mysqli_query($con,$sql6);
	}
	}
	if($success5 || $success6)
	{
		header("location:taskcleaner.php");
	}
	else
	{
		header("location:taskcleaner.php");
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
	$sql="select * from adminclientclean_task where ID='$id2'";
	$success = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($success))
	{
	$tm=$row['textmessage'];
	$uniqueid=$row['unique_id'];
	if($tm == "adminaddition")
	{
    $sql5 = "update adminclientclean_task set clock_in='$clockin',clock_out='$clockout' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	$sql6="update admin_task set clock_in='$clockin',clock_out='$clockout' where ID='$uniqueid'";
	$success6 = mysqli_query($con,$sql6);
	}
	else
	{
    $sql5 = "update adminclientclean_task set clock_in='$clockin',clock_out='$clockout' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	$sql6="update clientformdata set clock_in='$clockin',clock_out='$clockout' where ID='$uniqueid'";
	$success6 = mysqli_query($con,$sql6);
	}
	}
	if($success5 || $success6)
	{
		header("location:taskcleanerview.php");
	}
	else
	{
		header("location:taskcleanerview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['clockadd3']) && $_POST['clockadd3'] == 'timing3')
{
	$id2 = $_POST['id2'];
	$clockin=$_POST['timestart'];
	$clockout=$_POST['timeend'];
	 $sql5 = "update cleanercompletedtasks set clock_in='$clockin',clock_out='$clockout' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:taskcleanercompleted.php");
	}
	else
	{
		header("location:taskcleanercompleted.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['clockadd4']) && $_POST['clockadd4'] == 'timing4')
{
	$id2 = $_POST['id2'];
	$clockin=$_POST['timestart'];
	$clockout=$_POST['timeend'];
	 $sql5 = "update cleanercompletedtasks set clock_in='$clockin',clock_out='$clockout' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:taskcleanercompletedview.php");
	}
	else
	{
		header("location:taskcleanercompletedview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup7']) && $_POST['chatadminpopup7'] == 'chatcon7')
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
if(!empty($_POST['chatadminpopup8']) && $_POST['chatadminpopup8'] == 'chatcon8')
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
if(!empty($_POST['chatadminpopup9']) && $_POST['chatadminpopup9'] == 'chatcon9')
{
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update cleanercompletedtasks set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:completedtask.php");
	}
	else
	{
		header("location:completedtask.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup10']) && $_POST['chatadminpopup10'] == 'chatcon10')
{
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update cleanercompletedtasks set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:completedtaskview2.php");
	}
	else
	{
		header("location:completedtaskview2.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup11']) && $_POST['chatadminpopup11'] == 'chatcon11')
{
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql="select * from adminclientclean_task where ID='$idpost'";
	$success = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($success))
	{
	$tm=$row['textmessage'];
	$uniqueid=$row['unique_id'];
	if($tm == "adminaddition")
	{
    $sql5 = "update adminclientclean_task set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	$sql6="update admin_task set comments='$comments',comments_added_date='$commentaddeddate' where ID='$uniqueid'";
	$success6 = mysqli_query($con,$sql6);
	}
	else
	{
    $sql5 = "update adminclientclean_task set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	$sql6="update clientformdata set comments='$comments',comments_added_date='$commentaddeddate' where ID='$uniqueid'";
	$success6 = mysqli_query($con,$sql6);
	}
	}
	if($success5 || $success6)
	{
		header("location:taskcleaner.php");
	}
	else
	{
		header("location:taskcleaner.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup12']) && $_POST['chatadminpopup12'] == 'chatcon12')
{
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql="select * from adminclientclean_task where ID='$idpost'";
	$success = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($success))
	{
	$tm=$row['textmessage'];
	$uniqueid=$row['unique_id'];
	if($tm == "adminaddition")
	{
    $sql5 = "update adminclientclean_task set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	$sql6="update admin_task set comments='$comments',comments_added_date='$commentaddeddate' where ID='$uniqueid'";
	$success6 = mysqli_query($con,$sql6);
	}
	else
	{
    $sql5 = "update adminclientclean_task set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	$sql6="update clientformdata set comments='$comments',comments_added_date='$commentaddeddate' where ID='$uniqueid'";
	$success6 = mysqli_query($con,$sql6);
	}
	}
	if($success5 || $success6)
	{
		header("location:taskcleanerview.php");
	}
	else
	{
		header("location:taskcleanerview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup13']) && $_POST['chatadminpopup13'] == 'chatcon13')
{
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update cleanercompletedtasks set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:taskcleanercompleted.php");
	}
	else
	{
		header("location:taskcleanercompleted.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['chatadminpopup14']) && $_POST['chatadminpopup14'] == 'chatcon14')
{
	$idpost=$_POST['idvalue'];
	$comments=$_POST['commentadd'];
	date_default_timezone_set("Asia/Colombo");
    $commentaddeddate=date('g:i a, d M Y');
    $sql5 = "update cleanercompletedtasks set comments='$comments',comments_added_date='$commentaddeddate' where ID='$idpost'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:taskcleanercompletedview.php");
	}
	else
	{
		header("location:taskcleanercompletedview.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschange1']) && $_POST['statuschange1'] == 'colourchange1')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update adminclientclean_task set task_viewed_status='1' where ID='$id2' and textmessage='adminaddition'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:taskcleaner.php");
	}
	else
	{
		header("location:notificationcleaner.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschange2']) && $_POST['statuschange2'] == 'colourchange2')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update adminclientclean_task set task_viewed_status='1' where ID='$id2' and textmessage='clientaddition'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:taskcleaner.php");
	}
	else
	{
		header("location:notificationcleaner.php");
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
		header("location:taskcleanercompleted.php");
	}
	else
	{
		header("location:notificationcleaner.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschange4']) && $_POST['statuschange4'] == 'colourchange4')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update adminclientclean_task set task_viewed_status_comments='1' where ID='$id2' and textmessage='adminaddition'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:taskcleaner.php");
	}
	else
	{
		header("location:notificationcleaner.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschange5']) && $_POST['statuschange5'] == 'colourchange5')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update adminclientclean_task set task_viewed_status_comments='1' where ID='$id2' and textmessage='clientaddition'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:taskcleaner.php");
	}
	else
	{
		header("location:notificationcleaner.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschangeclient1']) && $_POST['statuschangeclient1'] == 'colourchangeclient1')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update clientformdata set task_viewed_status='1' where ID='$id2'";
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
if(!empty($_POST['statuschangeclient2']) && $_POST['statuschangeclient2'] == 'colourchangeclient2')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update cleanercompletedtasks set task_viewed_status='1' where ID='$id2'";
	$success5 = mysqli_query($con,$sql5);
	if($success5)
	{
		header("location:completedtask.php");
	}
	else
	{
		header("location:notification.php");
	}
}
?>
<?php
include("database.php");
if(!empty($_POST['statuschangeclient3']) && $_POST['statuschangeclient3'] == 'colourchangeclient3')
{
	$id2 = $_POST['ID90'];
    $sql5 = "update clientformdata set task_viewed_status_comments='1' where ID='$id2'";
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