<?php 
  $con = mysqli_connect("localhost", "root");
  if($con){
    echo "Form Submitted!";
  }
  else{
    echo "No Connection!";
  }
  mysqli_select_db($con, 'contact_form');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $FIRSTNAME = $_POST['fname'];
    $LASTNAME = $_POST['lname'];
    $Email1 = $_POST['email'];
    $Country = $_POST['country'];
    $Subject = $_POST['subject'];

    $query = "INSERT INTO user_contact (FName, LNAME, Email, Country, Subject) VALUES ('$FIRSTNAME','$LASTNAME','$Email1','$Country','$Subject')";
    mysqli_query($con, $query);
  }
?>
