<?php 
$title = 'Success';
require_once 'includes/header.php';
require_once 'DB/conn.php';

if(isset($_POST['submit'])){
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $contact = $_POST['phone'];
  $specialty = $_POST['specialization'];
  $isSuccess = $crud->insertAttendee($fname,$lname,$dob,$email,$contact,$specialty);
  
  if($isSuccess){
    include 'includes/successmessage.php';
  }
  else{
    include 'includes/errormessage.php';

  }
}
?>
   

    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname']. ' '. $_POST['lastname'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['specialization'] ?></h6>
    <p class="card-text">Date of Birth: <?php echo $_POST['dob'] ?></p>
    <p class="card-text">Email: <?php echo $_POST['email'] ?></p>
    <p class="card-text">Contact Number: <?php echo $_POST['phone'] ?></p>

  </div>
</div>
                      <a href="viewrecords.php" class="btn btn-info">Back To List</a>
                      <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                      <a onclick="return confirm('Are you Sure You Want To delete Record?')" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
  
<br>
<br>
<br>
<br>
<?php require_once'includes/footer.php';?>