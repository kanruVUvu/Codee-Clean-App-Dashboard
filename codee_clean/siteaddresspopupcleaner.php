<?php
    if($_POST['id555'])
	{
    $id555 = $_POST['id555']; //escape string
    include("database.php");
    $q="select * from cleanerlisttable where ID='$id555'";
    $result=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($result))
    { 
                        
?>     
 
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
              <div class="modal-body">
                <div class="form-group">
                    <label for="name" class="nametitle" style="position: relative;left: 7.7%;right: 74.24%;top: 2.68%;bottom: 79.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Name</label>
                    <input type="text" value="<?php echo $row['cleaner_name']; ?>" name="task_name11" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 50px;left: -13px;" readonly>
                </div>
                 <br>
				 <br>
				 <br>
                 <div class="form-group2">
				<label for="saddress" class="saddress11" style="position: relative;left: 7.7%;right: 74.24%;bottom: 78.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Site Address</label>
                    <?php $abcx=explode("<hr>",$row['cleaner_siteaddress']); foreach($abcx as $values) { ?>
					<input type="text" value="<?php echo $values; ?>" name="site_address11[]" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 3px;left: 44px;" readonly>
				<br>
				<br>
				 <?php } ?>
				</div>
        <!-- Content end -->
      </div>
		<?php } ?>
		<?php } ?>