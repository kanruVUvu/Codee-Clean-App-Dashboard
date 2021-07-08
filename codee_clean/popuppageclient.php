<?php
    if($_POST['id1'])
	{
    $id1 = $_POST['id1']; //escape string
    include("database.php");
    $q="select * from clientformdata where ID='$id1'";
    $result=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($result))
    { 
                        
?>     
<div class="modal-header">
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
       <p class="texty"><img src="assets/images/<?php echo($row['cleanerimage']); ?>" style="position: absolute;left: 8.58%;right: 75.17%;box-sizing: border-box;"><p class="bb" style="margin: 0 0 10px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 27px;
    color: #393939;
    position: relative;
    top: 14px;
    left: 100px;
    font-family: Nunito Sans;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 25px;
    color: #151515;"><?php echo($row['cleaner']); ?></p>
	   <br/>
	   <br/>
        </div>
        <div class="modal-footer">
		<p class="texty22" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 25px;
    color: #151515;
    position: relative;
    left: -143px;"><img src="assets/images/Vector.png">&nbsp;&nbsp;<?php echo($row['cleaner_phoneno']); ?></p>
		  </div>
		<?php } ?>
		<?php } ?>
		