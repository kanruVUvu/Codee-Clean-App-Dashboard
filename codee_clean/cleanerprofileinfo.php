<script>
$(document).ready(function(){
    var maxField4 = 95000; //Input fields increment limitation
    var addButton4 = $('.add_button1'); //Add button selector
    var wrapper4 = $('.form-group2'); //Input field wrapper
    var fieldHTML4 = '<div style="position:relative"> <input type="text" value="<?php echo $row['cleaner_siteaddress']; ?>" name="site_address14[]" class="input_text22" style="width: 80%;top:20px;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;left: 44px;" required><a href="#" onclick="return false;" class="remove_button1"><img src="assets/images/wrongicon.png" style="position:relative;width:15px;height:15px;color:#5E5E5E;top:17px;right: -24px;"/></a></div><br/>'; //New input field html 
    var z = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton4).click(function(){
        //Check maximum number of input fields
        if(z < maxField4){ 
            z++; //Increment field counter
            $(wrapper4).append(fieldHTML4); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper4).on('click', '.remove_button1', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        z--; //Decrement field counter
    });
});
</script>
<?php
    if($_POST['id10'])
	{
    $id = $_POST['id10']; //escape string
    include("database.php");
    $q="select * from cleanerlisttable where ID='$id'";
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
                
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label for="name" class="nametitle" style="position: relative;left: 7.7%;right: 74.24%;top: 2.68%;bottom: 79.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Name</label>
                    <input type="text" value="<?php echo $row['cleaner_name']; ?>" name="task_name12" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 50px;left: -13px;" required>
                </div>
                 <br>
				 <br>
				 <br>
                <div class="form-group2">
				<label for="saddress" class="saddress22" style="position: relative;left: 7.7%;right: 74.24%;bottom: 78.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Site Address</label>
                    <?php $abcx=explode("<hr>",$row['cleaner_siteaddress']); $counter55=count($abcx); for($i=0;$i<=($counter55-2);$i++) { ?>
					<div style="position:relative"><input type="text" value="<?php echo $abcx[$i]; ?>" name="site_address14[]" class="input_text22" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 3px;left: 44px;" required><a href="#" onclick="return false;" class="remove_button1"><img src="assets/images/wrongicon.png" style="position: relative;
    width: 15px;
    height: 15px;
    color: #5E5E5E;
    top: 0px;
    right: -24px;"/></a></div>
               <br><br>
					<?php } ?>
					<?php $abcx=explode("<hr>",$row['cleaner_siteaddress']); $counter55=count($abcx); for($i=$counter55-1;$i>=$counter55-1;$i--) { ?>
					<div style="position:relative"><input type="text" value="<?php echo $abcx[$i]; ?>" name="site_address14[]" class="input_text22" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 3px;left: 44px;" required><a href="#" onclick="return false;" class="remove_button1"><img src="assets/images/wrongicon.png" style="position: relative;
    width: 15px;
    height: 15px;
    color: #5E5E5E;
    top: 0px;
    right: -24px;"/></a><a href="javascript:void(0);" class="add_button1" title="Add field"><img src="assets/images/orangeplussymbol2.png" style="position: relative;
    right: -37px;
    top: 0px;"></a></div>
               <br>
					<?php } ?>
				</div>
				<div class="form-group">
                    <label for="username" class="nametitle" style="position: relative;left: 7.7%;right: 74.24%;top: 2.68%;bottom: 79.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Username</label>
                    <input type="text" value="<?php echo $row['cleaner_username']; ?>" name="task_user12" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 52px;
    left: -52px;" required>
                </div>
				<br>
				<br>
				<div class="form-group">
                    <label for="password" class="nametitle" style="position: relative;left: 7.7%;right: 74.24%;top: 2.68%;bottom: 79.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Password</label>
                    <input type="text" value="<?php echo $row['cleaner_password']; ?>" name="task_password12" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 52px;
    left: -52px;" required>
                </div>
				<div class="form-group">
                    <label for="cleanerphoneno" class="nametitle" style="position: relative;
    left: 7.7%;
    top: 57px;
    font-family: Nunito Sans;
    font-style: italic;
    font-weight: 300;
    font-size: 20px;
    line-height: 27px;
    text-transform: capitalize;
    color: #626262;">Phone Number</label>
                    <input type="text" value="<?php echo $row['cleaner_phoneno']; ?>" name="task_cleanerphoneno12" class="input_text11" style="width: 80%;
    background: #F0F0F0;
    padding: 16px 20px;
    border: none;
    border-radius: 8px;
    background-color: #f1f1f1;
    font-family: Nunito Sans;
    font-style: italic;
    font-weight: 300;
    font-size: 18px;
    line-height: 25px;
    text-transform: capitalize;
    position: relative;
    top: 61px;
    left: 40px;" required>
                </div>
				<br>
				<div style="position: relative;
    top: 43px;
    right: -61px;">
				<img src="assets/images/natureimage.png" style="position:static;left:-8px"><a target="_blank" href="profileimages/<?php echo $row['cleaner_profilephoto']; ?>" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 19px;
    text-decoration-line: underline;
    color: #000000;"><?php echo $row['cleaner_profilephoto']; ?></a>&nbsp;&nbsp;<img src="assets/images/crossiconremove.png" style="color: #5E5E5E;">
	</div>
				<div class="form-group">
				<label class="myprofileimage"> Update Photo
    <input type="file" size="60" name="filegg4" multiple required>
    </label> 
                 </div>
				 <div style="position: relative;
    top: 43px;
    right: -61px;">
				<img src="assets/images/file.png" style="position:static;left:-8px"><a target="_blank" href="documents/<?php echo $row['cleaner_documentname']; ?>" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 19px;
    text-decoration-line: underline;
    color: #000000;"><?php echo $row['cleaner_documentname']; ?></a>&nbsp;&nbsp;<img src="assets/images/crossiconremove.png" style="color: #5E5E5E;">
	</div>
				<div class="form-group">
				<label class="myfiles">Update Document
    <input type="file" size="60" name="filegg2" multiple required>
    </label> 
                 </div>
				 <br>
				<input type="hidden" name="task8edit" value="addcleaneredit">
				<input type="hidden" name="id" id="id" value="<?php echo $id; ?>"/>
                <center>
                <div class="form-group">
                    <input type="submit" class="submit_button" value="UPDATE" style="position: relative;
    top: 23px;">    
                </div>
                </center>
        <!-- Content end -->
      </div>
	  </form>
		<?php } ?>
		<?php } ?>