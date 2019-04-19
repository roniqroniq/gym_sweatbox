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
                       <label for="name"><h5>Name:</h5></label>
                       <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                   </div>
                   <div class="form-group">
                       <label for="email"><h5>Email:</h5></label>
                       <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                   </div>
                   <div class="form-group">
                       <label for="mobile"><h5>Mobile number:</h5></label>
                       <input type="text" class="form-control" id="mobile" name="mobile" required maxlength="50">
                   </div>
                   <div class="form-group">
                       <label for="membership"><h5>Membership:</h5></label>
                       <br>
                       <form action="/action_page.php">
                         <input type="checkbox" name="Gold" value="gold">Gold<br>
                         <input type="checkbox" name="Silver" value="silver">Silver<br>
                         <input type="checkbox" name="Bronze" value="bronze" checked>Bronze<br><br>
                      </form>
                   </div>
                   <div class="form-group">
                       <label for="membership"><h5>Classes:</h5></label>
                       <br>
                       <form action="/action_page.php">
                         <input type="checkbox" name="Yoga" value="yoga">Yoga<br>
                         <input type="checkbox" name="Boxingyoga" value="boxingyoga">Boxingyoga<br>
                         <input type="checkbox" name="Kettlebell" value="kettlebell" checked>Kettlebell<br>
                         <input type="checkbox" name="Spin" value="spin">Spin Classes<br>
                         <input type="checkbox" name="Weight" value="weight">Weight training<br>
                         <input type="checkbox" name="Pilates" value="pilates">Pilates<br>
                         <input type="checkbox" name="Boxing" value="boxing">Boxing<br>
                    </form>
                  </div>
                   <div class="form-group">
                       <label for="password"><h5>Password:</h5></label>
                       <input type="password" class="form-control" id="password" name="password" required maxlength="50">
                   </div>
                   <div class="form-group">
                       <label for="password"><h5>Confirm Password:</h5></label>
                       <input type="password" class="form-control" id="password" name="password" required maxlength="50">
                   </div>
                   <button type="submit" class="btn btn-lg btn-success pull-right" id="btnSignUp"a href="#" style="background-color:#ADFF2F" >Log in &rarr;</button>
               </form>
               <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Signed up successfully!</h3> </div>
               <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Try again!</div>
           </div>
       </div>
   </div>
</body>
<?php
 require "footer.php"
?>
