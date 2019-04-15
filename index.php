<?php
include "header.php";
?>
<head>


<html>
<body>


<div id="backgroundimage"></div>

<br>
<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="change">
          <h2>ABOUT US</h2>
</div>
          <br>
          <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
          <br>
          <br>
          <img src="ladies.jpg" alt="..." class="img-thumbnail">
        </div>
      </div>
    </div>
  </section>
<br>
<br>
<br>
  <section id="services" class="bg-light">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Facilities</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          <br>
          <img src="fac.jpg" alt="..." class="img-thumbnail">
          <br>
          <br>
        </div>
      </div>
    </div>
  </section>
  <br>


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
