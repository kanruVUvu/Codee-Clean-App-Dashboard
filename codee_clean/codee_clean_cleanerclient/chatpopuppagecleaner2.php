<style>
input[type="text"] {
      padding-right:100px;
      }
</style>
<?php
    if($_POST['id2'])
	{
    $id = $_POST['id2']; //escape string
    include("database.php");
    $q="select * from adminclientclean_task where ID='$id'";
    $result=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($result))
    { 
                        
?> 
<form action="insert.php" method="POST" enctype="multipart/form-data">  
<div class="modal-header" style="padding: 15px;
    border-bottom: 0px;
    width: 806.5px;
    height: 59px;">
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
          <h4 class="modal-title" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 27px;
    color: #FF6900;"><?php echo($row['Name_of_task']); ?></h4><div style="width: fit-content;
    position: relative;
    top: -22px;
    right: -64%;"><img src="assets/images/locationpin.png"></div><h6 style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 22px;
    color: #393939;
    position: absolute;
    left: 67.29%;
    right: 3.34%;
    top: 0.52%;"><?php echo($row['site_address']); ?></h6>
        </div>
        <div class="modal-body" style="background-color:#E8E8E8;width:806.5px;height:auto;">
		<?php if ($row['comments'] && $row['cleaner']){ ?>
	   <img src="../profileimages/<?php echo($row['cleanerimage']); ?>">
	   <div style="position: relative;
    left: 52px;
    top: -30px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: 600;
    font-size: 16px;
    line-height: 22px;
    color: #393939;"><?php echo($row['cleaner']); ?></div>
	<div style="position: relative;
    left: 174px;
    top: -48px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 16px;
    color: #979797;"><?php echo($row['comments_added_date']); ?></div>
	   <br>
	    <div style="position: relative;
    left: 52px;
    top: -54px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 22px;
    color: #393939;
    margin-left: 0px;
    margin-right: 58px;"><?php echo($row['comments']); ?></div>
	   <?php } ?>
	   <?php if ((!($row['comments'])) && (!($row['cleaner']))) { ?>
	   <div></div>
	   <?php } ?>
		</div>
		<div class="modal-footer" style="width:806.5px;height:87px;">
		<input type="text" class="commentssection" placeholder="Write your comment here" maxlength="75000" name="commentadd" style="font-family: Nunito Sans;
    font-style: italic;
    font-weight: 300;
    font-size: 16px;
    line-height: 22px;
    color: #979797;
    width: 453px;
    height: 45px;
    position: relative;
    left: -292px;background: #F4F4F4;
    border-radius: 8px;border-color: #FFFFFF;
    border-width: 0px;position: relative;
    top: 4.5px;"><div style="position: relative;
    top: -40px;
    /* left: -315px; */
    width: fit-content;
    right: -390px;"><img src="assets/images/linearrow.png">&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/images/environment.png">&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/images/cameraicon.png"></div>
	<input type="hidden" name="chatadminpopup12" value="chatcon12">
	<input type="hidden" name="idvalue" value="<?php echo $row['ID']; ?>">
	<input type="submit" class="commentsbutton" value="SEND" style="position: relative;
    left: -155px;
    top: -83.5px;
    left: %;
    top: px;
    background: #FF6900;
    border-radius: 8px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 25px;
    color: #FFFFFF;
    width: 117px;
    height: 43px;
    border-color: #FFFFFF;
    border-width: 0px;">
		  </div>
		  </form>
		<?php } ?>
		<?php } ?>