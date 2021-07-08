<script>
$(document).ready(function(){
    var maxField3 = 95000; //Input fields increment limitation
    var addButton3 = $('.add_button2'); //Add button selector
    var wrapper3 = $('.form-group2'); //Input field wrapper
    var fieldHTML3 = '<div style="position:relative"> <input type="text" value="<?php echo $row['site_address']; ?>" name="site_address12[]" class="input_text11" style="width: 80%;top:20px;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;left: 44px;" required><a href="#" onclick="return false;" class="remove_button2"><img src="assets/images/wrongicon.png" style="position:relative;width:15px;height:15px;color:#5E5E5E;top:17px;right: -24px;"/></a></div><br/>'; //New input field html 
    var y = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton3).click(function(){
        //Check maximum number of input fields
        if(y < maxField3){ 
            y++; //Increment field counter
            $(wrapper3).append(fieldHTML3); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper3).on('click', '.remove_button2', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        y--; //Decrement field counter
    });
});
</script>
<?php
    if($_POST['id10'])
	{
    $id = $_POST['id10']; //escape string
    include("database.php");
    $q="select * from clientlisttable where ID='$id'";
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
                    <input type="text" value="<?php echo $row['client_name']; ?>" name="task_name11" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 50px;left: -13px;" required>
                </div>
                 <br>
				 <br>
				 <br>
                 <div class="form-group2">
				<label for="saddress" class="saddress11" style="position: relative;left: 7.7%;right: 74.24%;bottom: 78.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Site Address</label>
                     <?php $abcx=explode("<hr>",$row['site_address']); $counter55=count($abcx); for($i=0;$i<=($counter55-2);$i++) { ?>
					<div style="position:relative"><input type="text" value="<?php echo $abcx[$i]; ?>" name="site_address12[]" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 3px;left: 44px;" required><a href="#" onclick="return false;" class="remove_button2"><img src="assets/images/wrongicon.png" style="position: relative;
    width: 15px;
    height: 15px;
    color: #5E5E5E;
    top: 0px;
    right: -24px;"/></a></div><br><br>
				 <?php } ?>
				 <?php $abcx=explode("<hr>",$row['site_address']); $counter55=count($abcx); for($i=$counter55-1;$i>=$counter55-1;$i--) { ?>
					<div style="position:relative"><input type="text" value="<?php echo $abcx[$i]; ?>" name="site_address12[]" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 3px;left: 44px;" required><a href="#" onclick="return false;" class="remove_button2"><img src="assets/images/wrongicon.png" style="position: relative;
    width: 15px;
    height: 15px;
    color: #5E5E5E;
    top: 0px;
    right: -24px;"/></a><a href="javascript:void(0);" class="add_button2" title="Add field"><img src="assets/images/orangeplussymbol2.png" style="position: relative;
    right: -37px;
    top: 0px;"></a></div><br>
				 <?php } ?>
				</div>
				<div class="form-group">
                    <label for="username" class="nametitle" style="position: relative;left: 7.7%;right: 74.24%;top: 2.68%;bottom: 79.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Username</label>
                    <input type="text" value="<?php echo $row['client_username']; ?>" name="task_user11" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 52px;
    left: -52px;" required>
                </div>
				<br>
				<br>
				<div class="form-group">
                    <label for="password" class="nametitle" style="position: relative;left: 7.7%;right: 74.24%;top: 2.68%;bottom: 79.29%;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 20px;line-height: 27px;text-transform: capitalize;color: #626262;">Password</label>
                    <input type="text" value="<?php echo $row['client_password']; ?>" name="task_password11" class="input_text11" style="width: 80%;background: #F0F0F0;padding: 16px 20px;border: none;border-radius: 8px;background-color: #f1f1f1;font-family: Nunito Sans;font-style: italic;font-weight: 300;font-size: 18px;line-height: 25px;text-transform: capitalize;position: relative;top: 52px;
    left: -52px;" required>
                </div>
				<br>
				<div style="position: relative;
    top: 34px;
    right: -47px;">
				<img src="assets/images/file.png" style="position:static;left:-8px"><a target="_blank" href="documents/<?php echo $row['client_documentname']; ?>" style="font-family: Nunito Sans;
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 19px;
    text-decoration-line: underline;
    color: #000000;"><?php echo $row['client_documentname']; ?></a>&nbsp;&nbsp;<img src="assets/images/crossiconremove.png" style="color: #5E5E5E;">
				</div>
				<div class="form-group">
				<label class="myfiles"> + Upload Document
    <input type="file" size="60" name="filegg2" multiple required>
    </label> 
                 </div>
				 <br>
				<input type="hidden" name="task7edit" value="addclientedit">
				 <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
                <center>
                <div class="form-group">
                    <input type="submit" class="submit_button" value="UPDATE" style="position: relative;
    top: 23px;" >    
                </div>
                </center>
        <!-- Content end -->
      </div>
	  </form>
		<?php } ?>
		<?php } ?>