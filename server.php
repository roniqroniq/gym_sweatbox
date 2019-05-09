<?php

    session_start();
    $title = "";
    $content = "";
    $id = 0;
    $edit_state = false;

    $db_connection = mysqli_connect('127.0.0.1', 'root', '', 'sweatbox');
    mysqli_set_charset($db_connection, 'utf8');

    if(isset($_POST['save'])){
      $title = $_POST['title'];
      $content = $_POST['content'];

      $query = "INSERT INTO index_features (title, content) VALUES ('$title','$content')";
      mysqli_query($db_connection, $query);
      $_SESSION['msg'] = "Content saved";
      header('location: index_edit.php'); //redirect here after inserting
    }
//update records
    if(isset($_POST['update'])){
      $name = mysqli_real_escape_string($db_connection, $_POST['title']);
      $address = mysqli_real_escape_string($db_connection, $_POST['content']);
      $id = mysqli_real_escape_string($db_connection, $_POST['id']);

      mysqli_query($db_connection, "UPDATE index_features SET title ='$title', content='$content'
      WHERE id=$id");
      $_SESSION['msg'] = "Address updated";
      header('location: index_edit.php');
    }

    //delete records
    if(isset($_GET['del'])){
      $id = $_GET['del'];
      mysqli_query($db_connection, "DELETE FROM index_features WHERE id=$id");
      $_SESSION['msg'] = "Address deleted";
      header('location: index_edit.php');
    }

    $results = mysqli_query($db_connection, "SELECT * FROM index_features");
?>
