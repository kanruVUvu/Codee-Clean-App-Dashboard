<?php
    if($_POST['idclock1'])
	{
    $id = $_POST['idclock1']; //escape string
    include("database.php");
    $q="select * from clientformdata where ID='$id'";
    $result=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($result))
    { 
                        
?>     
<form action="action.php" method="POST" enctype="multipart/form-data">
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
		<p class="cintime" style="font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;line-height: 25px;color: #262626;position: relative;left: 67px;">CLOCK IN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" value="<?php echo($row['clock_in']); ?>" id="start-time" name="timestart" style="position: relative;right: -20px;top: 0px;background: #F1F1F1;border: 1px solid #D0D0D0;box-sizing: border-box;border-radius: 7px;font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    color: #393939;" required></p>
		<br/>
		<p class="couttime" style="font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;line-height: 25px;color: #262626;position: relative;left: 67px;">CLOCK OUT&nbsp;&nbsp;&nbsp;
		
		<input type="time" value="<?php echo($row['clock_out']); ?>" id="end-time" name="timeend" style="position: relative;right: -10px;top: 0px;background: #F1F1F1;border: 1px solid #D0D0D0;box-sizing: border-box;border-radius: 7px;font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    color: #393939;"></p>
		<input type="hidden" name="id4" id="id4" value="<?php echo $id; ?>" />
		<input type="hidden" name="clockadd4" value="timing4">
        <div class="modal-footer">
		  <input type="submit" id="tasksbuttonclock" class="btn btn-default" value="UPDATE" style="position: relative;width: 139px;height: 45px;left: -28.35%;top:31.5px;color: #FFFFFF;background: #FF6900;border-radius: 8px;font-family: Nunito Sans;font-style: normal;font-weight: 600;font-size: 18px;">
        </div>
      </div>
	  </form>
		<?php } ?>
		<?php } ?>