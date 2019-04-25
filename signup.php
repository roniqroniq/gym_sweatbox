<?php
 include('connect.php') ;
  require "header.php";
 ?>
<body >
 <main>
   <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
    <div class="container">
      <h2>“Sweat is your fat crying.”</h2>
    </div>
  </div>

   <div class="container">
       <div class="row">
           <div class="col-md-6 col-md-offset-3">
               <h2>Sign Up</h2> Please sign up using the form below. </p>
               <form id="myForm" action="signup.php" method="POST" >
	               
                   <div class="form-group">
                       <label for="name"><h5>Name:</h5></label>
                       <input type="text" class="form-control" id="name" name="name"  required maxlength="50">
                   </div>
                   <div class="form-group">
                       <label for="email"><h5>Email:</h5></label>
                       <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                   </div>
                   <div class="form-group">
                       <label for="mobile"><h5>Mobile number:</h5></label>
                       <input type="text" class="form-control" id="mobile" name="mobile" required maxlength="50">
                   </div>
                   <!-- <div class="form-group">
                       <label for="membership"><h5>Membership:</h5></label>
                       <br>
                       <form id="myForm" action="signup.php" method="POST" >
                         <input type="checkbox" name="Gold" value="gold">Gold<br>
                         <input type="checkbox" name="Silver" value="silver">Silver<br>
                         <input type="checkbox" name="Bronze" value="bronze" checked>Bronze<br><br>
                      </form>
                   </div> -->
                   <!-- <div class="form-group">
                       <label for="membership"><h5>Classes:</h5></label>
                       <br>
                       <form action="">
                         <input type="checkbox" name="Yoga" value="yoga">Yoga<br>
                         <input type="checkbox" name="Boxingyoga" value="boxingyoga">Boxingyoga<br>
                         <input type="checkbox" name="Kettlebell" value="kettlebell" checked>Kettlebell<br>
                         <input type="checkbox" name="Spin" value="spin">Spin Classes<br>
                         <input type="checkbox" name="Weight" value="weight">Weight training<br>
                         <input type="checkbox" name="Pilates" value="pilates">Pilates<br>
                         <input type="checkbox" name="Boxing" value="boxing">Boxing<br>
                    </form>
                  </div> -->
                   <div class="form-group">
                       <label for="password"><h5>Password:</h5></label>
                       <input type="password" class="form-control" id="password" name="password" required maxlength="50">
                   </div>
                   <div class="form-group">
                       <label for="password"><h5>Confirm Password:</h5></label>
                       <input type="password" class="form-control" id="password" name="cpassword" required maxlength="50">
                   </div>
                   <button type="submit" name = "submit" class="btn btn-dark">Sign up</button>
               </form>
               <!-- <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Signed up successfully!</h3> </div>
               <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Try again!</div> -->
           </div>
           <div class="col-md-6 col-md-offset-3">
             <div class="container">
               <img class="img-fluid img-thumbnail" src="img/gallery_4.jpg">
             </div>
       </div>
   </div>
   </div>
   <?php


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $errors = array();
 


if(empty($_POST['name'])){
    $errors[]= 'Name is required.';
    }
    else {
    $name =trim($_POST['name']);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)){
        $errors[] = "invalid name !";
    }
    if (empty($_POST['email'])){
        $errors[]='Email is required.';
        }
        else {
        $email = trim($_POST['email']);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[] = "invalid email address.";
        }
     }

     if(empty($_POST['mobile'])){
        $errors[]= 'Mobile  is required.';
        }
        else {
        $mobile =trim($_POST['mobile']);
        if (!preg_match("/^[0-9]*$/",$mobile)){
            $errors[] = "invalid Mobile number !";
        }
     }
     if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
      $password = test_input($_POST["password"]);
      $cpassword = test_input($_POST["cpassword"]);
      if (strlen($_POST["password"]) <= '8') {
        $errors[] = "Your Password Must Contain At Least 8 Characters!";
      }
      elseif(!preg_match("#[0-9]+#",$password)) {
        $errors[] = "Your Password Must Contain At Least 1 Number!";
      }
      elseif(!preg_match("#[A-Z]+#",$password)) {
        $errors[] = "Your Password Must Contain At Least 1 Capital Letter!";
      }
      elseif(!preg_match("#[a-z]+#",$password)) {
        $errors[] = "Your Password Must Contain At Least 1 Lowercase Letter!";
      }
  }
  elseif(!empty($_POST["password"])) {
    $errors[] = "Please Check You've Entered Or Confirmed Your Password!";
  } else {
    $errors[] = "Please enter password   ";
  }
  
    


    
     

     if (empty($errors)) { // if no errors process input
        require('connect.php');
         $query = "INSERT INTO user (user_name,user_email,user_password) VALUES ('$name','$email','$password')";
         
          $result = @mysqli_query($db_connection, $query);
            if ($result){
         echo '
         <p class="text-danger">.Sign up succsessful</p>



   ';} else { // else print each error.
     echo 'Error!'.mysqli_error($db_connection);
   }
   
   }else {
        echo'<h1>Error!</h1>
         <p> The following error(s) occured:<br/>';
        foreach ($errors as $msg) {
           echo "$msg <br/>";
           }
       }



      

      
    
  }

    }
?>
<script>
function myFunction() {
  document.getElementById("myForm").submit();
}
</script>
   <script>
  $( window ).on( "load", function() {
      mainNav();
      $(window).scroll(function() {
         mainNav();
      });
      function mainNav() {
          var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
         if (top >1) $('.navy').stop().animate({
            "opacity": '0',
              "top": '0'
           });
         else $('.navy').stop().animate({
              "top": '1',
             "opacity": '1'
         });

       }
       });
  </script>

</body>
<?php
 require "footer.php"
?>
