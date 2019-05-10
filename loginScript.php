<?php

session_start();
include "connect.php";?>
<?php




if(isset($_POST['login'])){
    
    $username = $_POST['email'];
    $userpassword = $_POST['password'];

    $username = mysqli_real_escape_string($db_connection,$username);
    $userpassword = mysqli_real_escape_string($db_connection,$userpassword);



    //SQL query to check the email and password of the user are in the database 
    $query = "SELECT * FROM member WHERE user_email ='{$username}'";
    $select_user_query =mysqli_query($db_connection,$query);
    if (!$select_user_query){
        die("Query failed".mysqli_error($db_connection));
    }

//looping through the info in the database to see if it is there 
    while ($row =mysqli_fetch_array($select_user_query)){

        $db_username = $row['user_email'];
        $db_password= $row['user_password'];
        $db_userrole= $row['role_id'];

   }
// This should redirect to the index page if the username and user password are not  the same . This is not working and I am not sure why.
    if ($username != $db_username || $userpassword != $db_password){

        header("Location:about.php");

// This should redirect if the password and user email are the same .
} else if ($username == $db_username && $userpassword == $db_password){

    if ($db_userrole == 2 || $db_userrole == 0 ){//here if the user role is 2 then it will log the user in as normal user
        $_SESSION['username'] = $db_username;// here we are assigning this user name (email) to a session called username.
        $_SESSION['role_id'] = $db_userrole;
        $_SESSION['user_password'] = $db_password;
        
        header ("Location:indexmem.php");
        exit;
    } else if ($db_userrole == 1){ // here it will log the user in as 1 because one is the admin in the user table.
        $_SESSION['username'] = $db_username;
        $_SESSION['role_id'] = $db_userrole;

        header ("Location:admin.php");
        exit;
    }
}else {
    header ("Location:index.php");
}



}
?>


