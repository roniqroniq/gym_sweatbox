<?php
require "header.php";
 ?>
 <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
    <div class="container">
      <h2>“Work hard in silence. Let success be your noise.”</h2>
    </div>
  </div>
  <body >
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Contact Us</h2> Got a question? Feedback? Awesome!
                <p> Send your message in the form below and we will get back to you as early as possible. </p>
                <form role="form" method="post" id="contact_form" >
                    <div class="form-group">
                        <label for="name"> Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="email"> Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="mobile"> Mobile number:</label>
                        <input type="email" class="form-control" id="mobile" name="mobile" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="name"> Message:</label>
                        <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs"a href="#" style="background-color:grey">Send</button>
                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
              <div class="container">
                <img class="img-fluid img-thumbnail" src="img/gallery_5.jpg">
              </div>
        </div>
        </div>
    </div>
</body>
 <?php
require "footer.php";
  ?>
