<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  if ($_SERVER['REQUEST_METHOD']=="POST"){
  $errors = array();

    if(empty($_POST['user_name'])){
      $errors[]= "Name is required.";
      } else {
      $name =test_input($_POST['user_name']);
      if (!preg_match("/^[a-zA-Z ]*$/",$name)){
          $errors[] = "invalid name!";

      }
    }
      if (empty($_POST['user_email'])){
          $errors[]='Email is required.';
          }
          else {
          $email = test_input($_POST['user_email']);
          if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $errors[] = "invalid email address.";
          }
       }

       if(empty($_POST['mobile'])){
          $errors[]= 'Mobile  is required.';
          }else {
          $mobile =test_input($_POST['mobile']);
          if (!preg_match("/[0-9]/",$mobile)){
              $errors[] = "invalid Mobile number !";
          }
       }


    if(empty($_POST["address"])) {
      $errors[] = 'Address is required.';
      }else {
        $address = trim($_POST["address"]);
          if(!preg_match("/\d+ [0-9a-zA-Z ]+/", $address)){
          $errors[] = "Invalid Address!";
        }
      }

       if(empty($_POST['membership'])){
        $errors[]= 'Please select membership.';
        } else {
        $membership =test_input($_POST['membership']);
        }

        if(empty($_POST['class'])){
         $errors[]= 'Please select class.';
         } else {
         $class =test_input($_POST['class']);
         }

         if(empty($_POST['password'])){
          $errors[]= 'Please enter password.';
          } else {
          $class =test_input($_POST['password']);
          }

          if(empty($_POST['re_password'])){
           $errors[]= 'Please reenter password..';
           } else {
           $class =test_input($_POST['re_password']);
           }
       //
       // if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["re_password"])) {
       //  $password = test_input($_POST["password"]);
       //  $cpassword = test_input($_POST["re_password"]);

        // $passHash="$2y$10$";
        // $salt="iusesomecrazystrings22";
        // $hash_and_salt = $passHash.$salt;
        //
        // $password =crypt($password,$hash_and_salt);
    //
    //
    //
    //     if (strlen($_POST["user_password"]) <= '8') {
    //       $errors[] = "Your Password Must Contain At Least 8 Characters!";
    //     }
    //     elseif(!preg_match("#[0-9]+#",$password)) {
    //       $errors[] = "Your Password Must Contain At Least 1 Number!";
    //     }
    //     elseif(!preg_match("#[A-Z]+#",$password)) {
    //       $errors[] = "Your Password Must Contain At Least 1 Capital Letter!";
    //     }
    //     elseif(!preg_match("#[a-z]+#",$password)) {
    //       $errors[] = "Your Password Must Contain At Least 1 Lowercase Letter!";
    //     }
    // }
    // elseif(!empty($_POST["password"])) {
    //   $errors[] = "Please Check You've Entered Or Confirmed Your Password!";
    // } else {
    //   $errors[] = "Please enter password   ";
    // }

    if(empty($errors)){
      echo "<h3>Welcome, </h3>".htmlentities($name);
      echo "<h3>Your mail: </h3>".htmlentities($email);
      echo "<h3>Mobile Number: </h3>".htmlentities($mobile);
      echo "<h3>Phone Number: </h3>".htmlentities($phone_number);
      echo "<h3>Address: </h3>".htmlentities($address);
      echo "<h3>Membership type: </h3>".htmlentities($membership);
      echo "<h3>Classes chosen: </h3>".htmlentities($class);
      echo "<h3>Pass: </h3>".htmlentities($password);
      echo "<h3>Pass 2: </h3>".htmlentities($cpassword);

    }

      require('connect.php');

      $query = "INSERT INTO member VALUES ('$name','$email','$mobile','$address','$membership', '$class','$password','$cpassword', 2)";
      if (mysqli_query($db_connection, $query)){
      	echo "<h2>New Member Added Successfuly...</h2>";
      }else {
      	echo "<h2>Could not add New Member...</h2>";
      }



        ?>
