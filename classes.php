<?php
require "header.php";
 ?>
<body>
 <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
    <div class="container">
      <h2>“Training gives us an outlet for suppressed energies created by
        stress and thus tones the spirit just as exercise conditions the body...”</h2>
      </div>
    </div>
  </div>
  <p>Displays a list of class summaries , and their associated photo, and link.
     All photos should be stored in a folder not on the database.
    The link brings the logged in user to the relevant class page (using GET) and sends them to the login page.</p>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">What</th>
        <th scope="col">Monday & Wednesday</th>
        <th scope="col">Tuesday & Friday</th>
        <th scope="col">Thursday & Saturday</th>
  	  <th scope="col">Sunday</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Spin</th>
        <td>10:00 - 11:00</td>
        <td>12:30 - 13:30</td>
        <td>14:00 - 15:00</td>
  	  <td>16:30 - 17:30</td>
      </tr>
      <tr>
        <th scope="row">Bodyflex</th>
        <td>10:00 - 11:00</td>
        <td>12:30 - 13:30</td>
  	  <td>12:30 - 13:30</td>
        <td>15:00 - 16:00</td>
      </tr>
      <tr>
        <th scope="row">Kettlebell</th>
        <td>10:00 - 11:00</td>
  	  <td>12:30 - 13:30</td>
        <td>12:30 - 13:30</td>
        <td>15:30 - 16:30</td>
      </tr>
    </tbody>
  </table>
</body>
 <?php
require "footer.php";
  ?>
