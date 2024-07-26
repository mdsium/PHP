<?php  
  if(isset($_POST["btn"])){

    $email=$_POST["email"];

    if(!preg_match("/^[a-zA-Z]+[a-zA-Z0-9]*[@][a-zA-Z0-9]+[.][a-z]{2,3}$/",$email)){
        echo "Invalid Email";
    }else{
        echo "Email Ok";
    }

   
  }
?>

<form action="#" method="post">
  <input type="text" name="email" />
  <input type="submit" name="btn" value="Submit" />
</form>