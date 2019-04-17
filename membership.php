<?php
include "header.php";
?>

<main>
  <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
   <div class="container">
     <h2>“Those who think they have not time for bodily exercise will sooner or later have to find time for illness.”</h2>
   </div>
 </div>
</main>
<html>
<head>
</head>
<body>
<div class="row">
  <div class="col-12">
    <div id="memimage1"></div>
  </div>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Membership Types</h1>
  <p class="lead">Join the Sweat Box Club by choose from one of our three membership levels; Gold, Silver, Bronze.</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="btnstyl">
        <h4 class="my-0 font-weight-normal">Gold</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">€ 50 <small class="text-muted"> /mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Anytime access</li>
          <li>Private Showers and Locker room</li>
          <li>Choose any number of classes</li>
          <li>Free Personal Trainer once per month</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for Gold</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="btnstyl2">
        <h4 class="my-0 font-weight-normal">Silver</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">€ 35 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Anytime access</li>
          <li>Private Showers and Locker room</li>
          <li>Choose 3 classes</li>
          <li>Free Personal Trainer once per month</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Sign up for Silver</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="btnstyl3">
        <h4 class="my-0 font-weight-normal">Bronze</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">€ 20 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Limited access</li>
          <li>Private Showers and Locker room</li>
          <li>Choose 2 classes</li>
          <li>Stay Healthy</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Sign up for Bronze</button>
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
