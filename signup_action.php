<?php
$con = mysqli_connect("localhost", "root");
if($con){
  echo 
  '<script type="text/javascript">

          window.onload = function () { alert("Signed Up Successful!"); }

</script>';
}
else{
  echo "No Connection!";
}
mysqli_select_db($con, 'contact_form');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $FIRSTNAME = $_POST['fnamesu'];
  $LASTNAME = $_POST['lnamesu'];
  $Email1 = $_POST['emailsu'];
  $Password = $_POST['passwordsu'];
  $Confpass = $_POST['confpasswordsu'];

  $query = "INSERT INTO  signup (`FNameSU`, `LNameSU`, `EmailSU`, `PasswordSU`, `ConfPassSU`) VALUES ('$FIRSTNAME','$LASTNAME','$Email1','$Password','$Confpass')";
  mysqli_query($con, $query);
}
?>