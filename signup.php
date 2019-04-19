<?php
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
               <form role="form" method="post" id="login_form" >
                   <div class="form-group">
                       <label for="name"> Name:</label>
                       <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                   </div>
                   <div class="form-group">
                       <label for="email"> Email:</label>
                       <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                   </div>
                   <button type="submit" class="btn btn-lg btn-success pull-right" id="btnLogIn"a href="#" style="background-color:#ADFF2F" >Log in &rarr;</button>
               </form>
               <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Logged in successfully!</h3> </div>
               <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Try again!</div>
           </div>
       </div>
   </div>
</body>
<?php
 require "footer.php"
?>
