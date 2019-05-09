<?php
    include "header.php";
 ?>
<body>
  <main>
    <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
    <div class="container">
      <h2>“Sweat is your fat crying.”</h2>
    </div>
  </div>

<form action="signup_code.php" method="POST" >
        <div class="container">
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
                      <h2>Sign Up</h2> Please sign up using the form below. </p>
        <div class="form-group">
          <label for="name"><h5>Name:</h5></label>
            <input type="text" class="form-control" id="name" name="user_name"  required maxlength="50">

          </div>
          <div class="form-group">
            <label for="email"><h5>Email:</h5></label>
            <input type="email" class="form-control" id="email" name="user_email" required maxlength="50">
          </div>
          <div class="form-group">
          <label for="mobile"><h5>Mobile number:</h5></label>
            <input type="text" class="form-control" id="mobile" name="user_mobile" required maxlength="50">
        </div>


<div class="form-group">
                    <label for="address"><h5>Address</h5></label>
                    <textarea name="address" class="form-control" cols="30" rows="6"></textarea>
                </div>
                <div class="form-group">
                       <label for="membership"><h5>Membership:</h5></label>
                       <br>
        <div class="radio" style="padding 100px;">
          <label><input type="radio" name="membership"value ="bronze" checked>BRONZE</label>
</div>
<div class="radio">
  <label><input type="radio" name="membership" value="silver">SILVER</label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="membership" value ="gold" >GOLD</label>
</div>
</div>

 <div class="form-group">
   <label for="membership"style="padding 100px;"><h5>Classes:</h5></label>
    <br>
    <input type="checkbox" name="class[]" value="yoga">Yoga<br>
    <input type="checkbox" name="class[]" value="boxingyoga">Boxingyoga<br>
    <input type="checkbox" name="class[]" value="kettlebell" checked>Kettlebell<br>
    <input type="checkbox" name="class[]" value="spin">Spin Classes<br>
    <input type="checkbox" name="class[]" value="weight">Weight training<br>
    <input type="checkbox" name="class[]" value="pilates">Pilates<br>
    <input type="checkbox" name="class[]" value="boxing">Boxing<br>
</div>

<div class="form-group">
    <label for="password"><h5>Password:</h5></label>
    <input type="password" class="form-control" id="password" name="user_password" required maxlength="50">
    </div>
    <div class="form-group">
    <label for="password"><h5>Confirm Password:</h5></label>
    <input type="password" class="form-control" id="password" name="user_re_password" required maxlength="50">
    </div>
    <button type="submit" name = "submit" class="btn btn-dark">Sign up</button>

</div>


<div class="col-md-6 col-md-offset-3">
<div class="container">
    <img class="img-fluid img-thumbnail" src="img/gallery_4.jpg">
</div>
</div>


</div>
</div>

 </form>




<!-- <script>
function myFunction() {
  document.getElementById("myForm").submit();
}
</script> -->

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

<?php
 include "footer.php"
?>
