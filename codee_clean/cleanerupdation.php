<style>

input#calendardetailsdecode8{
 background-image: url(assets/images/modalcalendar.png);
 background-repeat: no-repeat;
 background-position: 531.3px 20px;
}

input#calendardetailsdecode8:focus{
 background-image:none;
}
</style>
<script>
$(document).on("click", ".completed2", function () {
     var Id2 = $(this).attr('data-id');
     $("#id2").val( Id2 );
   })
  </script>
<?php
    if($_POST['id10'])
	{
    $id = $_POST['id10']; //escape string
    include("database.php");
    $q="select * from clientformdata where ID='$id'";
    $result=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($result))
    { 
                        
?>     
 <form action="action.php" method="POST" enctype="multipart/form-data" style="width:986px;height:510px;">
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
              <div class="modal-body21">
                <div class="form-group">
                    <input type="text" name="task_name" class="input_text1" value="<?php echo($row['taskname']); ?>"  required>
                </div>
                <div class="form-group">
                    <input value="<?php echo($row['completion_scheduled_date']); ?>" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="bday" name="date" id="calendardetailsdecode8" required>
                </div>
                <div class="form-group">
                    <input type="text" name="site_address" class="input_text2" value="<?php echo($row['site_address']); ?>" required>
                </div>
                <input type="hidden" name="taskedit33" value="addedit33">
				<input type="hidden" name="id" id="id" value="<?php echo $id; ?>"/>
                <div class="form-group">
                    			<div class="dropdown" id="imageheader3">
  <img src="assets/images/addcleanerbutton.png" style="position: relative;right: -12px;">
  <br>
  <p style="position: relative;left: 0.19%;top: 7px;font-family: Nunito Sans;font-style: normal;font-weight: normal;font-size: 18px;line-height: 25px;color: #AA9A9A;">Add Cleaner</p>
  <div class="dropdown-content">
  <?php
                            include("database.php");
                            $q="select * from cleanerlisttable";
                            $result=mysqli_query($con,$q);
                            while($row=mysqli_fetch_array($result))
                            { 
                        ?>
<a href="#" class="completed2" data-id="<?php echo $row['ID']; ?>" style="text-decoration:none;"><img src="profileimages/<?php echo($row['cleaner_profilephoto']); ?>"><p class="bb"><?php echo($row['cleaner_name']); ?></p></a>
 
 <?php } ?>
  </div>
</div>
 <br>
 <br>
  </div>
  
                </div><br>
				 <input type="hidden" name="id2" id="id2" value=""/>
                <center>
               
                <div class="form-group">
                    <input type="submit" class="submit_button" value="ADD TASKS">    
                </div>
                </center>
        </form>
		<?php } ?>
		<?php } ?>