<?php
include "adminhead.php";

if (!isset($_SESSION['user_email'])){
  header("Location:login.php");
}
?>



<html>


<body>


<div class="box" style="position: relative; left: 0; top: 0;">
<img src="img/blur.jpg" class="gym"/>
    <img src="img/logo.png" class="log"/>
</div>

<br>

<section>
    <div class="container ">
    <div class="row">
    <div class="card card border-0 shadow col-md-12 p-3 ">
    <div class="row ">
    <div class="col-md-4 ">
    <img class="w-100" src="index.png" style ="width:500px;height:250px;margin:5%;">
</div>
    <div class="col-md-8">
    <div class="card-body  mt-8">
    <h3 class="card-title text-center border-0"style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:grey">WELCOME ADMINISTRATOR</h3>
        <div class ="text-center">
        <p class="card-text "style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:grey">You are currently logged in as Administrator. This allows adminstrative rights to edit and modify a number of web pages on the site. Please use the website navigation bar to select the required action. If for any reason you have accessed this page and are not the administrator please log out immediately.</p>
    	<a href="index_edit.php" class="btn btn-dark"style="background-color:grey;colour:white">EDIT HOMEPAGE</a>
                 </div>
             </div>
    			</div>

    		</div>
        </div>
        <br>
        <div class="card border-0">
    	<div class="card border-0 shadow col-md-12 p-3">

    		<div class="row ">
            <div class="col-md-4">
    				<img class="w-100" src="mem.png"style ="width:500px;height:250px;margin:5%;">
    			</div>
    			<div class="col-md-8">
    				<div class="card-body">
    					<h3 class="card-title text-center"style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:grey">EDIT MEMBERSHIP</h3>
              <div class="text-center">
    					<p class="card-text"style="text-align:center;font-family: 'Roboto', sans-serif,!important;color:grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    					<a href="mem_edit.php" class="btn btn-dark" style="background-color:grey">EDIT MEMBERSHIP</a>

              </div>
    				</div>
    			</div>
</div>
</div>
</div>
</div>
</div>
<br>
<br>


<br>
<div class="jumbotron jumbotron-fluid"style="font-family: 'Roboto', sans-serif,!important;color:grey">
  <div class="container">
    <h1 class="display-4">"IF YOU FEEL LIKE STOPPING , THINK ABOUT WHY YOU STARTED."</h1>

  </div>
</div>
</div>
</div>

<script>

$( window ).on( "load", function() {
    mainNav();
    $(window).scroll(function() {
       mainNav();
    });
    function mainNav() {
        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
       if (top > 600) $('.navy').stop().animate({
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
</html>

<?php
include "footer.php";
?>
