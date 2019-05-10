<?php
include "header.php";
include('server.php');

if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $edit_state = true;
  $rec =mysqli_query($db_connection, "SELECT * FROM index_features WHERE id=$id ");
  $record = mysqli_fetch_array($rec);
  $title = $record['title'];
  $content = $record['content'];
  $id = $record['id'];
}?>

<!doctype html>
<html lang="en">
<body>




<main>
  <div class="jumbotron jumbotron-fluid" style="background-image: url(img/gym-banner.jpg); background-size: cover; color: white;">
     <div class="container">
       <h2>“The brain is a wonderful organ. It starts working the moment you get up in the morning and does not stop until you get into the office.”</h2>
     </div>
   </div>

   <div class="under-border" style="background: #CFDE00"></div>
   	<div class="under-border under-border--opaic" style="background: #CFDE00"></div>

    <div class="container">

      <?php if(isset($_SESSION['msg'])): ?>
      <div class="msg">
          <?php

              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
          ?>
      </div>
      <?php endif ?>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Feature Title</th>
            <th scope="col">Content</th>
            <th colspan="2"> Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($results)){ ?>
              <tr>
                  <td><?php echo $row['title']; ?></td>
                  <td><?php echo $row['content']; ?></td>
                  <td>
                    <a href="index_edit.php?edit=<?php echo $row['id']; ?>">Edit</a>
                  </td>
                  <td>
                    <a href="server.php?del=<?php echo $row['id']  ?>">Delete</a>
                  </td>
              </tr> <?php } ?>
        </tbody>
      </table>

      <!-- this is the form for editting or adding - this is for admin -->
    <form method="post" action="server.php">
    <input type ="hidden" name="id" value="<?php echo $id; ?> ">
    <div class="form-group ">
      <label>Title</label>
      <input type="text" name="title" value="<?php echo $title; ?>">
    </div>
    <div class="form-group">
      <label>Content</label>
      <input type="text" name="content" value= "<?php echo $content; ?>">
    </div>
    <div class="form-group">
    <?php if ($edit_state == false): ?>
      <button type="submit" name="save" class="btn">Save</button>
    <?php else: ?>
      <button type="submit" name="update" class="btn">Update</button>
    <?php endif ?>
    </div>
    </form>









    </div>



<!-- /.container -->

<br>
<br>
</main>

    <script>

$( window ).on( "load", function() {
    mainNav();
    $(window).scroll(function() {
       mainNav();
    });
    function mainNav() {
        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
       if (top > 1) $('.navy').stop().animate({
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
