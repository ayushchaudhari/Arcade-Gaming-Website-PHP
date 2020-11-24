<?php 
  //creating connection to database
$con=mysqli_connect("sql12.freemysqlhosting.net","sql12378284","GaRaleRXdJ","sql12378284") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['Name']);
$Email = $con->real_escape_string($_POST['Email']);
$Subject = $con->real_escape_string($_POST['Subject']);
$Message = $con->real_escape_string($_POST['Message']);

  //query to insert the variable data into the database
$sql="INSERT INTO users_feedback (name, email, subject, message) VALUES ('".$Name."', '".$Email."', '".$Subject."', '".$Message."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
    die('Error occured [' . $con->error . ']');
}
else{
    //echo "Thank you";
    header("location: ../thanking.html?cnno=".$cnno."&copies=".$nocopy);
    echo "<script type=\"text/javascript\">
        window.open('../thanking.html.php?cnno=".$cnno."&copies=".$nocopy."', '_blank')
    </script>";
}
}

?>