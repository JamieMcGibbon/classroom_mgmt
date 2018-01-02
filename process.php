<?php

//need to include code (using a session variable) to keep users from visiting this pages
//unless they are being directed from the "login.html" page.

//pick up variables from "login.html" page
$submit = $_POST['submit'];

if($submit){
  $email = $_POST['email'];
  $password = $_POST['password'];

  echo $email;
  echo $password;

  //include file to connect to database
  include('./php/connection.php');

  //check to see if user-entered credentials match those in the "teachers" table of the DB
  $login_query = "SELECT * FROM teachers WHERE email = '".$email."'";
  $results = mysqli_query($connection, $login_query);

      $db_email = "";
      $db_password = "";

      foreach($results as $row){

        $db_email = $row['email'];
        $db_password = $row['password'];

      }

      echo $db_email;
      echo $db_password;

      if(($email == $db_email) && ($password == $db_password)){

        echo "User has been logged in!";

      }
      else{

        echo "Please re-check your username and password and try again.";

      }



}
else{
  header('./index.php');
}

?>
